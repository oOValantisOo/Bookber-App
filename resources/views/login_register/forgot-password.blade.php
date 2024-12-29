@extends('alayouts.adefault')

@section('title', 'Forget Password')

@section('content')
<main class="bg-ijosusu flex items-center justify-center min-h-screen">

    <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
        <div class="flex items-center justify-center w-full lg:p-12">
            <div class="bg-white shadow-2xl border border-gray-300 rounded-3xl p-8">
                <form action="{{ route('forgetPassword.post') }}" method="POST" class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl" onsubmit="return forgetPasswordForm()">
                    @csrf
                    <h3 class="mb-5 text-4xl font-extrabold text-kelly-green">
                        Forget Password
                    </h3>
                    <p class="mb-6 text-dartmouth-green font-semibold">
                        We will send you the link to your email
                    </p> 

                    <div class="bg-white rounded-lg relative mb-8">
                        <div class="relative">
                            <input type="email" id="email" name="email" class="peer input-field h-12 w-full px-4 py-2 border-2 border-fern-green rounded-lg text-fern-green placeholder-transparent focus:outline-none focus:ring-2 focus:ring-kelly-green focus:border-kelly-green" placeholder="Email"/>
                            <label for="email" class="absolute left-4 -top-3.5 bg-white px-1 text-sm text-fern-green peer-placeholder-shown:text-base peer-placeholder-shown:text-fern-green peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-fren-green peer-focus:text-sm transition-all">
                                Email
                            </label>
                            <p id="email-error" class="text-xs text-red text-left ml-3 absolute hidden">
                                Email must be a valid @mail.com address.
                            </p>
                        </div>
                    </div>

                    <button type="submit" class="w-full px-5 py-4 mb-3 text-xm font-medium leading-none transition duration-300 md:w-96 rounded-2xl text-dartmouth-green hover:text-white bg-muda-kelly-green hover:bg-muda-fern-green">
                        Change Password
                    </button>

                    <p class="text-sm leading-relaxed text-fern-green">
                        Already Remember? 
                        <a href="login" class="font-bold text-fern-green hover:underline">Go back!</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection