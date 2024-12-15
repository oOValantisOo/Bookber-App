<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AccountsController extends Controller
{
    function home(){
        return view("home-guest-home.ahome");
    }

    function homeG(){
        return view("home-guest-home.ahomeG");
    }

    function resetPassword($token){
        return view("account-login-register.anew-password", compact('token'));
    }

    function resetPasswordPost(Request $request){
        $updatePassword = DB::table('password_reset_tokens') ->where([
            "email" =>$request->email,
            "token" =>$request->token
        ])->first();

        if (!$updatePassword){
            return redirect()->to(route('aresetPassword'))
            ->with('error', 'yah ngak bisa ganti password!');
        }

        Accounts::where('email',$request->email)->update(['password' => $request->password]);

        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        return redirect()->to(route('alogin'))
        ->with('success', 'yey bisa ganti password!');
    }

    function forgetPassword(){
        return view("account-login-register.aforget-password");
    }

    function forgetPasswordPost(Request $request){
        $token = Str::random(64);

        DB::table('password_reset_tokens') ->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("account-login-register.areset-password", ['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route('alogin')) 
        ->with('success', 'yey link email udh di kirim!');
    }

    function login(){
        return view("account-login-register.alogin");
    }

    function loginPost(Request $request){
        $account = Accounts::where('email','=',$request->email)->first();
        if($account && $request->password == $account->password){
            return redirect(route('ahome'))
            ->with('success', 'yey bisa login!');
        }else{
            return redirect(route('alogin'))
            ->with('error', 'yah ngak bisa login!');
        }
    }

    function register(){
        return view("account-login-register.aregister");
    }

    function registerPost(Request $request){
        $account = new User();
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = $request->password;
        $account->phone_number = $request->phone_number;
        if($account->save()){
            return redirect(route('alogin'))
            ->with('success', 'yey bisa regis!');
        }else{
            return redirect(route('aregister'))
            ->with('error', 'yah ngak bisa regis!');
        }
    }

    public function updateProfile(Request $request, $id){
        
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
