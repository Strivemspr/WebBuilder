<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$restaurant->name}}</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="{{asset('themes/korean/img/favicon.ico')}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{asset('themes/korean/')}}img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('themes/korean/img/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('themes/korean/img/apple-touch-icon-114x114.png')}}">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('themes/korean/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('themes/korean/fonts/font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{asset('themes/korean/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('themes/korean/css/nivo-lightbox/nivo-lightbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('themes/korean/css/nivo-lightbox/default.css')}}">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
 
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text m-auto">
            <h1>{{$restaurant->name}}</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- MENU-->
@if($restaurant->menu)
<div id="restaurant-menu">
    <div class="container p-5 mt-5">
        <div class="row text-center">
            <h2 class="col-md-12">Menu</h2>
        </div>
        <div class="row">

            @foreach($types as $type)
                <div class="col-md-12">
                    <h2 class="menu-section-title">{{ucfirst($type)}}</h2>
                    <hr class="m-auto">
                </div>

                @if (count($menus) > 0)
                    @foreach ($menus as $menu)
                        @if($menu->type == $type)
                            <div class="col-md-4 menu-item">
                                <div class="menu-item-name">{{$restaurant->name}}</div>
                                <div class="menu-item-price">{{!empty($menu->price) && $menu->price != 0 ? "$".$menu->price : ""}}</div>
                                <div class="menu-item-description">{{$menu->ingredients}}</div>
                            </div>
                        @endif
                    @endforeach
                @else
                    <div>No Menu found in the database</div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- About Section -->
<div id="about" class="m-0 pt-0">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="about-text text-center">
                <h2>Our Restaurant</h2>
                <hr class="m-auto">
                <p>{{$restaurant->description}}</p>
                <div class="about-img d-flex justify-content-center align-self-center text-center"><img width="600" src="{{asset('themes/korean/img/about.jpg')}}" class="img-responsive" alt=""></div>
         </div>
      </div>
    </div>
  </div>
</div>

<div id="footer">
  <div class="container text-center">
    @if ($restaurant->street_address)
    <div class="col-md-4">
        <h3>Address</h3>
        <div class="contact-item">
          <p>{{$restaurant->street_address}},</p>
          <p>{{$restaurant->suburb}}, {{$restaurant->country}}, {{$restaurant->zip_code}}</p>
        </div>
      </div>
    @endif

    @if ($restaurant->openingHours)
    <div class="col-md-4">
        <h3>Opening Hours</h3>
        <div class="contact-item">
        <p>{{$restaurant->openingHours->day_of_the_week1}} <span class="font-weight-bold">{{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time1}} {{!empty($restaurant->openingHours->start_time1) ? "-" : ""}} {{$restaurant->openingHours->end_time1}} {{$restaurant->openingHours->e_time1}}</span></p>

        <p>{{$restaurant->openingHours->day_of_the_week2}} <span class="font-weight-bold">{{$restaurant->openingHours->start_time2}} {{$restaurant->openingHours->s_time2}} {{!empty($restaurant->openingHours->start_time2) ? "-" : ""}} {{$restaurant->openingHours->end_time2}} {{$restaurant->openingHours->e_time2}}</span></p>

        <p>{{$restaurant->openingHours->day_of_the_week3}} <span class="font-weight-bold">{{$restaurant->openingHours->start_time3}} {{$restaurant->openingHours->s_time3}} {{!empty($restaurant->openingHours->start_time3) ? "-" : ""}} {{$restaurant->openingHours->end_time3}} {{$restaurant->openingHours->e_time3}}</span></p>

        <p>{{$restaurant->openingHours->day_of_the_week4}} <span class="font-weight-bold">{{$restaurant->openingHours->start_time4}} {{$restaurant->openingHours->s_time4}} {{!empty($restaurant->openingHours->start_time4) ? "-" : ""}} {{$restaurant->openingHours->end_time4}} {{$restaurant->openingHours->e_time4}}</span></p>

        <p>{{$restaurant->openingHours->day_of_the_week5}} <span class="font-weight-bold">{{$restaurant->openingHours->start_time5}} {{$restaurant->openingHours->s_time5}} {{!empty($restaurant->openingHours->start_time5) ? "-" : ""}} {{$restaurant->openingHours->end_time5}} {{$restaurant->openingHours->e_time5}}</span></p>

        <p>{{$restaurant->openingHours->day_of_the_week6}} <span class="font-weight-bold">{{$restaurant->openingHours->start_time6}} {{$restaurant->openingHours->s_time6}} {{!empty($restaurant->openingHours->start_time6) ? "-" : ""}} {{$restaurant->openingHours->end_time6}} {{$restaurant->openingHours->e_time6}}</span></p>

        <p>{{$restaurant->openingHours->day_of_the_week7}} <span class="font-weight-bold">{{$restaurant->openingHours->start_time7}} {{$restaurant->openingHours->s_time7}} {{!empty($restaurant->openingHours->start_time7) ? "-" : ""}} {{$restaurant->openingHours->end_time7}} {{$restaurant->openingHours->e_time7}}</span></p>
        </div>
      </div>
    @endif

    @if ($restaurant->phone || $restaurant->email)
    <div class="col-md-4">
        <h3>Contact Info</h3>
        <div class="contact-item">
        @if ($restaurant->phone)
        <p>Phone: {{$restaurant->phone}}</p>
        @endif
        @if ($restaurant->email)
        <p>Email: {{$restaurant->email}}</p>
        @endif
        </div>
      </div>
    @endif
  </div>

  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
    @if ($restaurant->socialMedia)
    <div class="social">
      <ul>
          @empty(!$restaurant->socialMedia->facebook)
          <li><a href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}"><i class="fa fa-facebook"></i></a></li>
          @endempty

          @empty(!$restaurant->socialMedia->instagram)
          <li><a href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}"><i  class="fa fa-instagram"></i></a></li>
          @endempty

          @empty(!$restaurant->socialMedia->twitter)
          <li><a href="https://twitter.com/{{$restaurant->socialMedia->twitter}}"><i class="fa fa-twitter"></i></a></li>
          @endempty
      </ul>
    </div>
    @endif
      <p>&copy; 2020 {{$restaurant->name}}. All rights reserved. </p>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('themes/korean/js/jquery.1.11.1.js')}}"></script> 
<script type="text/javascript" src="{{asset('themes/korean/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('themes/korean/js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{asset('themes/korean/js/nivo-lightbox.js')}}"></script> 
<script type="text/javascript" src="{{asset('themes/korean/js/jquery.isotope.js')}}"></script> 
<script type="text/javascript" src="{{asset('themes/korean/js/jqBootstrapValidation.js')}}"></script> 
<script type="text/javascript" src="{{asset('themes/korean/js/contact_me.js')}}"></script> 
<script type="text/javascript" src="{{asset('themes/korean/js/main.js')}}"></script>
</body>
</html>
