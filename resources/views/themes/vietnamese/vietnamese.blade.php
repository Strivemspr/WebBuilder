
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>vietnamese</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

 	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('themes/vietnamese/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('themes/vietnamese/css/icomoon.css')}}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{asset('themes/vietnamese/css/simple-line-icons.css')}}">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="{{asset('themes/vietnamese/css/bootstrap-datetimepicker.min.css')}}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{asset('themes/vietnamese/css/flexslider.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('themes/vietnamese/css/bootstrap.css')}}">

	<link rel="stylesheet" href="{{asset('themes/vietnamese/css/style.css')}}">


	<!-- Modernizr JS -->
	<script src="{{asset('themes/vietnamese/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h1 class="to-animate m-auto">foodee</h1>
							<h2 class="to-animate m-auto">{{$restaurant->name}}</h2>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url({{asset('themes/vietnamese/images/slide_1.jpg')}})" data-stellar-background-ratio="0.5"></li>
			   </ul>

			</div>
			
		</div>
		
		
		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url({{asset('themes/vietnamese/images/res_img_1.jpg')}})"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">About Us</h2>
                <p class="to-animate">{{$restaurant->description}}</p>
			</div>
		</div>

	
		<div id="fh5co-menus" data-section="menu">
			<div class="container-fluid px-5">
				<div class="row text-center fh5co-heading row-padded">
                    @if ($restaurant->menu)
                        <div class="container-fluid">
                            <div class="row">
                                @foreach ($types as $type)
                                    <div class="col-md-12 my-5 text-center pt-5">
                                        <h1 class="heading mt-5">{{ucfirst($type)}}</h1>
                                    </div>
                                    @if (count($menus) > 0)
                                        @foreach ($menus as $menu)
                                            @if ($menu->type == $type)
                                            <div class="col-md-4 col-sm-4 p-2">
                                                <div class="card to-animate-2">
                                                    <div class="row card-body">
                                                    <div class="col-sm-6">
                                                            <h3 class="card-title">{{$menu->name}} <span>{{!empty($menu->price) && $menu->price != 0 ? "$".$menu->price : ""}}</span></h3>
                                                            <p class="card-text">{{$menu->ingredients}}</p>
                                                        </div>
                                                        @if ($menu->image)
                                                        <img class="col-sm-6" src="{{asset('img/menuImages/'.$menu->image)}}" alt="{{$menu->name}}"/>
                                                        @endif
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
                    @endif
                </div>
			</div>
		</div>

		<div id="fh5co-contact" data-section="reservation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Contact Us</h2>
					</div>
				</div>
				<div class="row">
                    @if ($restaurant->street_address || $restaurant->phone || $restaurant->email)
					<div class="col-md-6 to-animate-2">
						<h3>Contact Info:</h3>
						<ul class="fh5co-contact-info">
                            @if ($restaurant->street_address)
                            <li class="fh5co-contact-address ">
								<i class="icon-home"></i>
								{{$restaurant->street_address}}, <br>{{$restaurant->suburb}}, {{$restaurant->country}}
							</li>
                            @endif
                            @if ($restaurant->phone)
                            <li><i class="icon-phone"></i>{{$restaurant->phone}}</li>
                            @endif
                            @if ($restaurant->email)
                            <li><i class="icon-envelope"></i>{{$restaurant->email}}</li>
                            @endif
						</ul>
					</div>
                    @endif

                    @if ($restaurant->openingHours)
					<div class="col-md-6 to-animate-2">
						<h3>Openning Hours:</h3>
						<ul class="fh5co-contact-info">
							<li class="d-block font-weight-light p-0 mb-1">
                                {{$restaurant->openingHours->day_of_the_week1}}
                                {{!empty($restaurant->openingHours->day_of_the_week1) ? "-" : ""}}
                                {{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time1}} {{!empty($restaurant->openingHours->start_time1) ? "-" : ""}} {{$restaurant->openingHours->end_time1}} {{$restaurant->openingHours->e_time1}}
                            </li>
                            <li class="d-block font-weight-light p-0 mb-1">
                                {{$restaurant->openingHours->day_of_the_week2}}
                                {{!empty($restaurant->openingHours->day_of_the_week2) ? "-" : ""}}
                                {{$restaurant->openingHours->start_time2}} {{$restaurant->openingHours->s_time2}} {{!empty($restaurant->openingHours->start_time2) ? "-" : ""}} {{$restaurant->openingHours->end_time2}} {{$restaurant->openingHours->e_time2}}
                            </li>
                            <li class="d-block font-weight-light p-0 mb-1">
                                {{$restaurant->openingHours->day_of_the_week3}}
                                {{!empty($restaurant->openingHours->day_of_the_week3) ? "-" : ""}}
                                {{$restaurant->openingHours->start_time3}} {{$restaurant->openingHours->s_time3}} {{!empty($restaurant->openingHours->start_time3) ? "-" : ""}} {{$restaurant->openingHours->end_time3}} {{$restaurant->openingHours->e_time3}}
                            </li>
                            <li class="d-block font-weight-light p-0 mb-1">
                                {{$restaurant->openingHours->day_of_the_week4}}
                                {{!empty($restaurant->openingHours->day_of_the_week4) ? "-" : ""}}
                                {{$restaurant->openingHours->start_time4}} {{$restaurant->openingHours->s_time4}} {{!empty($restaurant->openingHours->start_time4) ? "-" : ""}} {{$restaurant->openingHours->end_time4}} {{$restaurant->openingHours->e_time4}}
                            </li>
                            <li class="d-block font-weight-light p-0 mb-1">
                                {{$restaurant->openingHours->day_of_the_week5}}
                                {{!empty($restaurant->openingHours->day_of_the_week5) ? "-" : ""}}
                                {{$restaurant->openingHours->start_time5}} {{$restaurant->openingHours->s_time5}} {{!empty($restaurant->openingHours->start_time5) ? "-" : ""}} {{$restaurant->openingHours->end_time5}} {{$restaurant->openingHours->e_time5}}
                            </li>
                            <li class="d-block font-weight-light p-0 mb-1">
                                {{$restaurant->openingHours->day_of_the_week6}}
                                {{!empty($restaurant->openingHours->day_of_the_week6) ? "-" : ""}}
                                {{$restaurant->openingHours->start_time6}} {{$restaurant->openingHours->s_time6}} {{!empty($restaurant->openingHours->start_time6) ? "-" : ""}} {{$restaurant->openingHours->end_time6}} {{$restaurant->openingHours->e_time6}}
                            </li>
                            <li class="d-block font-weight-light p-0 mb-1">
                                {{$restaurant->openingHours->day_of_the_week7}}
                                {{!empty($restaurant->openingHours->day_of_the_week7) ? "-" : ""}}
                                {{$restaurant->openingHours->start_time7}} {{$restaurant->openingHours->s_time7}} {{!empty($restaurant->openingHours->start_time7) ? "-" : ""}} {{$restaurant->openingHours->end_time7}} {{$restaurant->openingHours->e_time7}}
                            </li>
						</ul>
					</div>
                    @endif
				</div>
			</div>
		</div>

		
	</div>

	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy {{$restaurant->name}} | All Rights Reserved</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
				</div>
            </div>
            
            @if ($restaurant->socialMedia)
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
                        @empty(!$restaurant->socialMedia->facebook)
                        <li><a href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}" class="icon-facebook" data-wow-delay="0.3s"></a></li>
                        @endempty
                        @empty(!$restaurant->socialMedia->instagram)
                        <li><a href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}" class="icon-instagram" data-wow-delay="0.6s"></a></li>
                        @endempty
                        @empty(!$restaurant->socialMedia->twitter)
                        <li><a href="https://twitter.com/{{$restaurant->socialMedia->twitter}}" class="icon-twitter" data-wow-delay="0.9s"></a></li>
                        @endempty
					</ul>
				</div>
			</div>
            @endif
		</div>
	</div>


	
	
	
	
	<!-- jQuery -->
	<script src="{{asset('themes/vietnamese/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('themes/vietnamese/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('themes/vietnamese/js/bootstrap.min.js')}}"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="{{asset('themes/vietnamese/js/moment.js')}}"></script>
	<script src="{{asset('themes/vietnamese/js/bootstrap-datetimepicker.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('themes/vietnamese/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('themes/vietnamese/js/jquery.stellar.min.js')}}"></script>

	<!-- Flexslider -->
	<script src="{{asset('themes/vietnamese/js/jquery.flexslider-min.js')}}"></script>
	<!-- Main JS -->
	<script src="{{asset('themes/vietnamese/js/main.js')}}"></script>

	</body>
</html>

