@extends('alayouts.adefault')

@section('title', 'Update Profile')

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
    


    <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
        <div class="flex items-center justify-center w-full lg:p-12">
            <div class="bg-white shadow-2xl border border-gray-300 rounded-3xl p-8">
                
                <form action="{{-- {{ route('aregister.post') }} --}}" method="{{-- POST --}}" class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl" onsubmit="return updateProfileForm()">
                    @csrf
                    <h3 class="mb-8 text-4xl font-extrabold text-kelly-green">
                        Update Profile
                    </h3>

                    <!-- Name Field -->
                    <div class="bg-white rounded-lg relative mb-8">
                        <div class="relative">
                            <input type="text" id="name" name="name" class="peer bg-transparent h-12 w-full px-4 py-2 border-2 border-fern-green rounded-lg text-fern-green placeholder-transparent focus:outline-none focus:ring-2 focus:ring-kelly-green focus:border-kelly-green" placeholder="Name" required />
                            <label for="name" class="absolute left-4 -top-3.5 bg-white px-1 text-sm text-fern-green peer-placeholder-shown:text-base peer-placeholder-shown:text-fern-green peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-fern-green peer-focus:text-sm transition-all">
                                Update Name
                            </label>
                            <p id="name-error" class="text-xs text-red text-left ml-3 absolute hidden">
                                Name must be more than 5 characters.
                            </p>
                        </div>
                    </div>

                    <!-- status Field -->
                    <div class="bg-white rounded-lg relative mb-8">
                        <div class="relative">
                            <input type="text" id="status" name="status" class="peer bg-transparent h-12 w-full px-4 py-2 border-2 border-fern-green rounded-lg text-fern-green placeholder-transparent focus:outline-none focus:ring-2 focus:ring-kelly-green focus:border-kelly-green" placeholder="status" required />
                            <label for="status" class="absolute left-4 -top-3.5 bg-white px-1 text-sm text-fern-green peer-placeholder-shown:text-base peer-placeholder-shown:text-fern-green peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-fern-green peer-focus:text-sm transition-all">
                                Update Status
                            </label>
                            <p id="status-error" class="text-xs text-red text-left ml-3 absolute hidden">
                                Name must be more than 5 characters.
                            </p>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full px-5 py-4 mb-3 text-xm font-medium leading-none transition duration-300 md:w-96 rounded-2xl text-dartmouth-green hover:text-white bg-muda-kelly-green hover:bg-muda-fern-green">
                        Update Profile
                    </button>

                    <p class="text-sm leading-relaxed text-fern-green">
                        Ngak jadi Update? 
                        <a href="aprofile" class="font-bold text-fern-green hover:underline">Balik ke Profile</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection