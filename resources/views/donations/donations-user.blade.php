@extends('alayouts1.adefault1')

@section('title1', 'Donation')

@section('content1')
<main>
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

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
          
                        <a href="index.html" class="logo">
                            <h1>Bookber</h1>
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="ahome">Home</a></li>
                            <li class="scroll-to-section"><a href="/ahome#about-us">About us</a></li>
                            <li class="scroll-to-section"><a href="aevent">Event</a></li>
                            <li class="scroll-to-section"><a href="abook">Books</a></li>
                            <li class="scroll-to-section"><a href="aarticles">Articles</a></li>
                            <li class="scroll-to-section"><a href="adonation" class="active">Donation</a></li>
                            <li><a href="aprofile" class="actived">Profile <img src="{{ asset('images/profile-header.jpg') }}" alt="Profile Picture"></a></li>

                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
    
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="full-screenDonation-container">
        <div class="bodyDonation">
            <form class="donation-form">
                <h2>Donate Your Books Here!</h2>
        
                <!-- Book Name -->
                <div class="formDonation-group">
                    <label for="book-name">Book Name</label>
                    <input type="text" id="book-name" name="book-name" placeholder="Enter the book name" required>
                </div>
        
                <!-- Author Name -->
                <div class="formDonation-group">
                    <label for="author-name">Author Name</label>
                    <input type="text" id="author-name" name="author-name" placeholder="Enter the author's name" required>
                </div>
        
                <!-- Donation Date -->
                <div class="formDonation-group">
                    <label for="donation-date">Donation Date</label>
                    <input type="date" id="donation-date" name="donation-date" required>
                </div>
        
                <!-- Total Book -->
                <div class="formDonation-group">
                    <label for="book-quantity">Number of Books</label>
                    <input type="number" id="book-quantity" name="book-quantity" min="1" placeholder="Number of books" required>
                </div>
        
                <!-- Submit Button -->
                <button type="submit" class="submitDonation-btn">Submit Donation</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
            <p>Copyright © 2024 bookber. All rights reserved.</a></p>
            </div>
        </div>
    </footer>
</main>
@endsection