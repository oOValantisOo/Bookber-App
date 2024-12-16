@extends('layouts.master')

@section('title', 'Login')

@section('content')
<main class="bg-ijosusu flex items-center justify-center min-h-screen">

    @if(session()->has('success'))
    <div id="notification" class="notification success">
        <p>{{ session()->get('success') }}</p>
    </div>
    @endif
    
    @if(session()->has('error'))
    <div id="notification" class="notification error">
        <p>{{ session()->get('error') }}</p>
    </div>
    @endif
    
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </div>
    
    <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
        <div class="flex items-center justify-center w-full lg:p-12">
            <div class="bg-white shadow-2xl border border-gray-300 rounded-3xl p-8">
                <h3 class="mb-3 text-4xl font-extrabold text-kelly-green text-center">Sign In</h3>
                <p class="mb-4 text-dartmouth-green font-semibold text-center">Enter your email and password</p>


                <button onclick="window.location.href='{{ route('google.page') }}'" class="flex items-center justify-center w-full py-4 mb-6 text-xm font-medium transition duration-300 rounded-2xl text-dartmouth-green hover:text-white bg-muda-kelly-green hover:bg-muda-fern-green">
                    <img class="h-5 mr-2" src="{{ asset('images-login-register/logo-google.png') }}" alt="">
                    Sign in with Google
                </button>

                <form action="{{ route('login.post') }}" method="POST" class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl" onsubmit="return loginForm()">
                    @csrf
                    <div class="flex items-center mb-3">
                        <hr class="h-0 border-b border-solid border-fern-green grow">
                        <p class="mx-4 text-xm font-medium text-fern-green">or</p>
                        <hr class="h-0 border-b border-solid border-fern-green grow">
                    </div>

                    <div class="bg-white rounded-lg relative mb-8">
                        <div class="relative">
                            <input type="email" id="email" name="email" class="peer input-field h-12 w-full px-4 py-2 border-2 border-fern-green rounded-lg text-fern-green placeholder-transparent focus:outline-none focus:ring-2 focus:ring-kelly-green focus:border-kelly-green" placeholder="Email" required />
                            <label for="email" class="absolute left-4 -top-3.5 bg-white px-1 text-sm text-fern-green peer-placeholder-shown:text-base peer-placeholder-shown:text-fern-green peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-fern-green peer-focus:text-sm transition-all">
                                Email
                            </label>
                            <p id="email-error" class="text-xs text-red text-left ml-3 absolute hidden">
                                Email must be a valid @mail.com address.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg relative mb-6">
                        <div class="relative">
                            <input type="password" id="password" name="password" class="peer input-field h-12 w-full px-4 py-2 border-2 border-fern-green rounded-lg text-fern-green placeholder-transparent focus:outline-none focus:ring-2 focus:ring-kelly-green focus:border-kelly-green" placeholder="Password" required />
                            <label for="password" class="absolute left-4 -top-3.5 bg-white px-1 text-sm text-fern-green peer-placeholder-shown:text-base peer-placeholder-shown:text-fern-green peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-fern-green peer-focus:text-sm transition-all">
                                Password
                            </label>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer" onclick="togglePassword('password', 'eye-icon-password')">
                                <img id="eye-icon-password" src="{{ asset('images-login-register/eye-closed.png') }}" data-eye-open-path="{{ asset('images-login-register/eye-open.png') }}" data-eye-closed-path="{{ asset('images-login-register/eye-closed.png') }}" alt="Show Password" class="h-5">
                            </span>
                            <p id="password-error" class="text-xs text-red text-left ml-3 absolute hidden">
                                Password must be at least 6 characters long, *Ex: Rarjp123.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-row justify-between mb-5">
                        <label class="relative inline-flex items-center mr-3 cursor-pointer select-none">
                            <input type="checkbox" checked value="" class="sr-only peer">
                            <div class="w-5 h-5 bg-white border-2 rounded-sm border-fern-green peer peer-checked:border-0 peer-checked:bg-muda-kelly-green">
                                <img class="" src="{{ asset('images-login-register/check.png') }}" alt="tick">

                            </div>
                            <span class="ml-3 text-sm font-normal text-fern-green">Keep me logged in</span>
                        </label>
                        <a href="aforgetPassword" class="mr-4 text-sm font-medium text-fern-green hover:underline">Forget password?</a>
                    </div>

                    <button type="submit" class="w-full px-5 py-4 mb-3 text-xm font-medium leading-none transition duration-300 md:w-96 rounded-2xl text-dartmouth-green hover:text-white bg-muda-kelly-green hover:bg-muda-fern-green">Sign In</button>

                    <p class="text-sm leading-relaxed text-fern-green">
                        Not registered yet? 
                        <a href="aregister" class="font-bold text-fern-green hover:underline">Create an Account</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection