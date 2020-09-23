<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$restaurant->name}}</title>

  <link rel="stylesheet" href="{{asset('themes/indonesian/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('themes/indonesian/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('themes/indonesian/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('themes/indonesian/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('themes/indonesian/vendors/Magnific-Popup/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{asset('themes/indonesian/css/style.css')}}">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand" href="/">{{$restaurant->name}}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              {{-- <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> 
              <li class="nav-item active"><a class="nav-link" href="menu.html">Menu</a> --}}
              <li class="nav-item"><a class="nav-link" href="chef.html">Back to Atrium</a>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Hero Banner Section start =================-->
  <section class="hero-banner hero-banner-sm">
    <div class="hero-wrapper">
      <div class="hero-left">
        <h1 class="hero-title">{{$restaurant->name}}</h1>
        <p>{{$restaurant->description}}</p>
        <ul class="hero-info d-none d-lg-block">
          <li>
            <img src="{{asset('themes/indonesian/img/banner/fas-service-icon.png')}}" alt="">
            <h4>Fast Service</h4>
          </li>
          <li>
            <img src="{{asset('themes/indonesian/img/banner/fresh-food-icon.png')}}" alt="">
            <h4>Fresh Food</h4>
          </li>
          {{-- <li>
            <img src="{{asset('themes/indonesian/img/banner/support-icon.png')}}" alt="">
            <h4>24/7 Support</h4>
          </li> --}}
        </ul>
      </div>
      <div class="hero-right">
        <div class="owl-carousel owl-theme w-100 hero-carousel">
          <div class="hero-carousel-item">
            <img class="img-fluid" src="{{asset('themes/indonesian/img/banner/hero-banner-sm.png')}}" alt="">
            {{-- <img class="img-fluid" src="{{asset('img/restaurantImages/'.$restaurant->image)}}" alt="{{$restaurant->name}}"> --}}
          </div>
        </div>
      </div>

    @if ($restaurant->socialMedia)    
          <ul class="social-icons d-none d-lg-block">
          @empty (!$restaurant->socialMedia->facebook)
          <li><a href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}"><i class="ti-facebook"></i></a></li>
          @endempty
          
          @empty (!$restaurant->socialMedia->twitter)
          <li><a href="https://twitter.com/{{$restaurant->socialMedia->twitter}}"><i class="ti-twitter"></i></a></li>
          @endempty
          
          @empty (!$restaurant->socialMedia->instagram)
          <li><a href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}"><i class="ti-instagram"></i></a></li>
          @endempty
        </ul>
    @endif
    </div>
  </section>
  <!--================Hero Banner Section end =================-->


  <!--================Food menu section start =================-->  
  @if ($restaurant->menu)
  <section class="section-margin m-0 p-5">
    <div class="container-fluid p-5">
      <div class="section-intro ml-5">
        <h4 class="intro-title">Food Menu</h4>
      </div>

      <div class="row px-5">

        @foreach($types as $type)
            @if ($loop->first)
            <h2 class="col-md-12 mb-5">{{ucfirst($type)}}</h2>
            @else
            <h2 class="col-md-12 my-5">{{ucfirst($type)}}</h2>
            @endif
        
            @if (count($menus) > 0)
                @foreach ($menus as $menu)
                    @if ($menu->type == $type)
                        <div class="col-lg-4">
                            <div class="p-0 pr-3 media align-items-center food-card">
                                @if ($menu->image)
                                <img src="{{asset('img/menuImages/'.$menu->image)}}" width="200px" alt="{{$menu->name}}">
                                @endif
                                <div class="media-body p-3">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4>{{$menu->name}}</h4>
                                        <h3 class="price-tag">{{!empty($menu->price) && $menu->price != 0 ? "$".$menu->price : ""}}</h3>
                                    </div>
                                    <p>{{$menu->ingredients}}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <p class="Lead">No Menu found in the database</p>
            @endif
        @endforeach
        </div>
    </div>
</section>
@endif
<!--================Food menu section end =================-->  



  <!--================CTA section start =================-->  
  
  <section class="section-margin bg-light m-0 p-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          @if ($restaurant->street_address)
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>{{$restaurant->suburb}}, {{$restaurant->city}}.</h3>
              <p>{{$restaurant->street_address}}</p>
            </div>
          </div>
          @endif
          @if ($restaurant->phone)
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:{{$restaurant->phone}}">Phone Number</a></h3>
              <p>{{$restaurant->phone}}</p>
            </div>
          </div>
          @endif
          @if ($restaurant->email)
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">{{$restaurant->email}}</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div> 
          @endif
        </div>
      </div>
    </div>
  </section>
  <!--================CTA section end =================-->  

  
  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap m-0 p-5 bg-white">
		<div class="container">
            @if ($restaurant->openingHours)
			<div class="row">
				<div class="col-md-12 mb-5">
					<h4>Opening Hours</h4>
          <p class="light-blue regular alt-p"> <span class="font-weight-bold">{{$restaurant->openingHours->day_of_the_week1}} </span>  
            {{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time1}} {{!empty($restaurant->openingHours->start_time1) ? "-" : ""}} {{$restaurant->openingHours->end_time1}} {{$restaurant->openingHours->e_time1}}</p>
            
          <p class="light-blue regular alt-p"> <span class="font-weight-bold">{{$restaurant->openingHours->day_of_the_week2}} </span> 
            {{$restaurant->openingHours->start_time2}} {{$restaurant->openingHours->s_time2}} {{!empty($restaurant->openingHours->start_time2) ? "-" : ""}} {{$restaurant->openingHours->end_time2}} {{$restaurant->openingHours->e_time2}}</p>

          <p class="light-blue regular alt-p"> <span class="font-weight-bold">{{$restaurant->openingHours->day_of_the_week3}} </span>  
            {{$restaurant->openingHours->start_time3}} {{$restaurant->openingHours->s_time3}} {{!empty($restaurant->openingHours->start_time3) ? "-" : ""}} {{$restaurant->openingHours->end_time3}} {{$restaurant->openingHours->e_time3}}</p>

          <p class="light-blue regular alt-p"> <span class="font-weight-bold">{{$restaurant->openingHours->day_of_the_week4}} </span>  
            {{$restaurant->openingHours->start_time4}} {{$restaurant->openingHours->s_time4}} {{!empty($restaurant->openingHours->start_time4) ? "-" : ""}} {{$restaurant->openingHours->end_time4}} {{$restaurant->openingHours->e_time4}}</p>

          <p class="light-blue regular alt-p"> <span class="font-weight-bold">{{$restaurant->openingHours->day_of_the_week5}} </span> 
            {{$restaurant->openingHours->start_time5}} {{$restaurant->openingHours->s_time5}} {{!empty($restaurant->openingHours->start_time5) ? "-" : ""}} {{$restaurant->openingHours->end_time5}} {{$restaurant->openingHours->e_time5}}</p>

          <p class="light-blue regular alt-p"> <span class="font-weight-bold">{{$restaurant->openingHours->day_of_the_week6}} </span> 
            {{$restaurant->openingHours->start_time6}} {{$restaurant->openingHours->s_time6}} {{!empty($restaurant->openingHours->start_time6) ? "-" : ""}} {{$restaurant->openingHours->end_time6}} {{$restaurant->openingHours->e_time6}}</p>

          <p class="light-blue regular alt-p"> <span class="font-weight-bold">{{$restaurant->openingHours->day_of_the_week7}} </span> 
            {{$restaurant->openingHours->start_time7}} {{$restaurant->openingHours->s_time7}} {{!empty($restaurant->openingHours->start_time7) ? "-" : ""}} {{$restaurant->openingHours->end_time7}} {{$restaurant->openingHours->e_time7}}</p>
				</div>
            </div>
            @endif
            
			<div class="footer-bottom m-0 row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 p-0 col-lg-8 col-md-12">
Copyright &copy All rights reserved | {{$restaurant->name}} </p>

                @if ($restaurant->socialMedia)
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    @empty(!$restaurant->socialMedia->facebook)
                    <a href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}"><i class="ti-facebook"></i></a>
                    @endempty
                    @empty(!$restaurant->socialMedia->instagram)
                    <a href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}"><i class="ti-instagram"></i></a>
                    @endempty
                    @empty(!$restaurant->socialMedia->twitter)
                    <a href="https://twitter.com/{{$restaurant->socialMedia->twitter}}"><i class="ti-twitter"></i></a>
                    @endempty
                </div>
                @endif
    
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="{{asset('themes/indonesian/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('themes/indonesian/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('themes/indonesian/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('themes/indonesian/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('themes/indonesian/vendors/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('themes/indonesian/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('themes/indonesian/js/mail-script.js')}}"></script>
  <script src="{{asset('themes/indonesian/js/main.js')}}"></script>
</body>
</html>