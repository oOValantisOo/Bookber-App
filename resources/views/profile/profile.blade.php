@extends('layouts1.user')

@section('title1', 'Profile')

@section('content1')
<main>
    
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

    <div class="container">
        {{-- <div class="row"> --}}
          {{-- <div class="col-lg-12"> --}}
            <div class="page-content">
    
              <!-- ***** Banner Start ***** -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="main-profile ">
                    <div class="row">
                      <div class="col-lg-4">
                        <img src="images/profile-header.jpg" alt="" style="border-radius: 23px;">
                      </div>
                      
                      <div class="col-lg-4 align-self-center">
                        <div class="main-info header-text">
                          <span>Halo!</span>
                          <h4>{{ $user->name }}</h4>
                          <p>This is your profile, check it out!</p>
                          <div class="main-border-button">
                            <a href="aupdateProfile">Update Profile</a>
                          </div>
                          <div class="main-border-button1">
                            <a href="/">Logout</a>
                          </div>

                        </div>
                      </div>
                      
                      <div class="col-lg-4 align-self-center">
                        <ul>
                          <li>Your Current Rank <span>1</span></li>
                          <li>Total Donation Books <span>10</span></li>
                          <li>Total Authors <span>2</span></li>
                          <li>Total Topics <span>2</span></li>
                        </ul>
                      </div>

                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- ***** Banner End ***** -->
    
              <!-- ***** Gaming Library Start ***** -->
              <div class="history-library profile-library">
                <div class="col-lg-12">
                  <div class="heading-section">
                    <h4>Donations History</h4>
                  </div>

                  <div class="item">
                    <ul>
                      <li><img src="{{ asset('images/pp-book.png') }}" alt="" class="templatemo-item"></li>
                      <li><h4>Book Name</h4><span>Pokemon</span></li>
                      <li><h4>Author Name</h4><span>sigegeh</span></li>
                      <li><h4>Donation Date</h4><span>12/12/2012</span></li>
                      <li><h4>Donation Books</h4><span>10</span></li>
                      {{-- <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li> --}}
                    </ul>
                  </div>

                </div>
              </div>
              <!-- ***** Gaming Library End ***** -->
            </div>
          {{-- </div> --}}
        {{-- </div> --}}
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