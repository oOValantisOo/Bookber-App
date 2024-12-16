<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Exception;

class UserController extends Controller
{
    function updateProfile(){
        return view("profile.update_profile");
    }
    function profile(){
        return view("profile.profile");
    }

    function homeGuest(){
        return view("home.home-guest");
    }

    function homeUser(){
        return view("home-guest-home.ahomeG");
    }

    public function googlepage(){
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(){
        try {
      
            $account = Socialite::driver('google')->user();
       
            $findaccount = User::where('google_id', $account->id)->first();
       
            if($findaccount)

            {
       
                Auth::login($findaccount);
      
                return redirect()->intended('ahome');
       
            }

            else

            {
                $newAccount = Accounts::create([
                    'name' => $account->name,
                    'email' => $account->email,
                    'google_id'=> $account->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newAccount);
      
                return redirect()->intended('ahome');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    function resetPassword($token){
        return view("login_register.new-password", compact('token'));
    }

    function resetPasswordPost(Request $request){
        $updatePassword = DB::table('password_reset_tokens') ->where([
            "email" =>$request->email,
            "token" =>$request->token
        ])->first();

        if (!$updatePassword){
            return redirect()->to(route('resetPassword'))
            ->with('error', 'yah ngak bisa ganti password!');
        }

        User::where('email',$request->email)->update(['password' => $request->password]);

        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        return redirect()->to(route('login'))
        ->with('success', 'yey bisa ganti password!');
    }

    function forgetPassword(){
        return view("login_register.forgot-password");
    }

    function forgetPasswordPost(Request $request){
        $token = Str::random(64);

        DB::table('password_reset_tokens') ->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("login_register.reset-password", ['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route('login')) 
        ->with('success', 'yey link email udh di kirim!');
    }

    function login(){
        return view("login_register.login");
    }

    function loginPost(Request $request){
        $account = User::where('email','=',$request->email)->first();
        if($account && $request->password == $account->password){
            session(['user_name' => $account->name]);
            return redirect(route('ahome'))
            ->with('success', 'Selamat Datang, ' . $account->name . '!');
        }else{
            return redirect(route('login'))
            ->with('error', 'yah ngak bisa login!');
        }
    }

    function register(){
        return view("login_register.register");
    }

    function registerNotif(){
        return redirect(route('register'))
        ->with('success', 'silahkan melakukan register terlebih dahulu');
    }

    function registerPost(Request $request){
        $account = new User();
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = $request->password;
        $account->phone_number = $request->phone_number;
        if($account->save()){
            return redirect(route('login'))
            ->with('success', 'yey bisa regis!');
        }else{
            return redirect(route('aregister'))
            ->with('error', 'yah ngak bisa regis!');
        }
    }
}