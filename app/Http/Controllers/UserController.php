<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Event;
use Exception;

class UserController extends Controller
{
    public function adminHome(){
        $users = User::all();
        return view('home.users', compact('users'));
    }

    function updateProfile(){
        return view("profile.update_profile");
    }

    function profile(){
        $user = Auth::user();
        return view('profile.profile', compact('user'));
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

    public function googlecallback()
{
    try {
        $account = Socialite::driver('google')->user();

        $findaccount = User::where('email', $account->email)->first();

        if ($findaccount) {
            if (!$findaccount->google_id) {
                $findaccount->google_id = $account->id;
                $findaccount->save();
            }

            Auth::login($findaccount);
            return view('home.home-user');
        } else {
            $newUser = User::create([
                'name' => $account->name,
                'email' => $account->email,
                'google_id' => $account->id,
                'password' => bcrypt('123456dummy') 
            ]);

            Auth::login($newUser);
            return view('home.home-user');
        }
    } catch (\Exception $e) {
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

    public function loginPost(Request $request)
    {
        if ($request->email === env('ADMIN_EMAIL') && $request->password === env('ADMIN_PASSWORD')) {
            return redirect()->route('home.admin');
        }

        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->route('home.user');
        }

        return back()->withErrors([
            'email' => __('auth.failed'),
        ])->onlyInput('email');
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