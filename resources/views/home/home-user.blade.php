@extends('alayouts1.adefault1')

@section('title1', 'Home')

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
                            <li class="scroll-to-section"><a href="#home" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about-us">About us</a></li>
                            <li class="scroll-to-section"><a href="#events">Event</a></li>
                            <li class="scroll-to-section"><a href="#">Donation</a></li>
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


    <div class="main-banner" id="home">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="owl-carousel owl-banner">
                <div class="item item-1">
                <div class="header-text">
                    <span class="category">Better Education For The Future</span>
                    <h2>With bookber, we can expand our education.</h2>
                    <p><strong>Bookber</strong> is an interesting idea! By using it, we can indeed expand education for younger generations. Could you tell me more about what "bookber" involves? Is it a book donation program, a reading campaign, or something else? I'd love to help you develop this idea further!.</p>
                    <div class="buttons">
                    <div class="main-button">
                        <a href="">Donate now!</a>
                    </div>

                    </div>
                </div>
                </div>

                <div class="item item-2">
                <div class="header-text">
                    <span class="category">Better Education For The Future</span>
                    <h2>With bookber, we can build our nation.</h2>
                    <p><strong>Bookber</strong> is an interesting idea! By using it, we can indeed expand education for younger generations. Could you tell me more about what "bookber" involves? Is it a book donation program, a reading campaign, or something else? I'd love to help you develop this idea further!.</p>
                    <div class="buttons">
                    <div class="main-button">
                        <a href="#">Donate now!</a>
                    </div>
                    </div>
                </div>
                </div>

                <div class="item item-3">
                <div class="header-text">
                    <span class="category">Better Education For The Future</span>
                    <h2>With bookber, we can make people happy.</h2>
                    <p><strong>Bookber</strong> is an interesting idea! By using it, we can indeed expand education for younger generations. Could you tell me more about what "bookber" involves? Is it a book donation program, a reading campaign, or something else? I'd love to help you develop this idea further!.</p>
                    <div class="buttons">
                    <div class="main-button">
                        <a href="#">Donate now!</a>
                    </div>
                    </div>
                </div>
                </div>
                
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="section about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Why was Bookber created?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Low literacy rates are often a significant topic when discussing education in Indonesia. 
                                    According to data from UNESCO (United Nations Educational, Scientific and Cultural Organization), 
                                    global literacy rates have improved, and by 2024, 87% of adults (aged 15 and older) worldwide are able to read and write. 
                                    Therefore, we believe that one of the solutions to address low literacy rates is to provide books as assistance to 
                                    underprivileged communities.  
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is our main goal?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our goal in creating Bookber is to facilitate access to books for all Indonesians through a donation system, with the hope of improving literacy and fostering a love for reading in everyone.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Why Bookber is different than others?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Unlike other platforms, Bookber connects readers directly to book donors, making the process simple and personal. With our innovative system, you can donate, exchange, or find books that match your interests effortlessly.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Our Contact Detail.
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    If you want to learn more about Bookber, you can click the contact options below according to your needs!
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="bi bi-envelope"></i></a></li>
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h2>What is Bookber?</h2>
                        <p><strong>Bookber</strong> is an interesting idea! By using it, we can indeed expand education for younger generations. 
                            Could you tell me more about what "bookber" involves? Is it a book donation program, a reading campaign, 
                            or something else? I'd love to help you develop this idea further!.</p>
                        <div class="main-button">
                        <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Our Events</h2>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                <img src="images/event-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>
                                    <li>
                                        <h1>halo</h1>
                                        <span>Date:</span>
                                        <h6>16 Feb 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>22 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$120</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                        <div class="col-lg-3">
                            <div class="image">
                            <img src="images/event-2.jpg" alt="">
                            </div>
                        </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>24 Feb 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>30 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$320</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                <img src="images/event-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>12 Mar 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>48 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$440</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <li><a href="sign"><h2>Donation Leaderbord</h2></a></li>

                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="page-content">
                    <h2>halloguys</h2>
                </div>
            </div>
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