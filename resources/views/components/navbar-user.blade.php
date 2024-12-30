<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
          
                        <a href="index.html" class="logo">
                            <h1>Bookber</h1>
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('home.user')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about-us">About us</a></li>
                            <li class="scroll-to-section"><a href="{{ route('event-user.all') }}">Event</a></li>
                            <li class="scroll-to-section"><a href="{{ route('book-user.all') }}">Books</a></li>
                            <li class="scroll-to-section"><a href="{{ route('article-user.all') }}">Articles</a></li>
                            <li><a href="{{route('profile')}}" class="actived">Profile <img src="{{ asset('images/profile-header.jpg') }}" alt="Profile Picture"></a></li>

                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
    
                    </nav>
                </div>
            </div>
        </div>
    </header>