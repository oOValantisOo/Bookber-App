<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
          
                        <a href="index.html" class="logo">
                            <h1>Bookber</h1>
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('home.admin')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route('event-admin.all') }}">Events</a></li>
                            <li class="scroll-to-section"><a href="{{ route('book-admin.all') }}">Books</a></li>
                            <li class="scroll-to-section"><a href="{{ route('article-admin.all') }}">Articles</a></li>
                            <li class="scroll-to-section"><a href="{{ route('donation-admin.all') }}">Donation</a></li>
                            <li class="scroll-to-section"><a href="{{ route('user-admin.all') }}">Users</a></li>

                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
    
                    </nav>
                </div>
            </div>
        </div>
    </header>