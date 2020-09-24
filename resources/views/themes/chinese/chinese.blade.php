<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>{{$restaurant->name ? $restaurant->name : "Company Name"}}</title>

        {{-- Theme Related --}} 

        {{-- <link rel="stylesheet" href="{{asset('themes/chinese/css/bootstrap.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('themes/chinese/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('themes/chinese/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('themes/chinese/css/nivo-lightbox.css')}}">
        <link rel="stylesheet" href="{{asset('themes/chinese/css/nivo_themes/default/default.css')}}">
        <link rel="stylesheet" href="{{asset('themes/chinese/css/style.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

    </head>
    <body> 
        <!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top bg-dark" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand text-white">{{$restaurant->name ? $restaurant->name : "Company Name"}}</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a class="nav-link text-white" href="/">Back to Atrium</a></li>
		</ul>
	</div>
</section>


<!-- home section -->
<section id="home" class="parallax-section">
	<div class="container bg-danger p-5">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2 class="display-1">{{$restaurant->name ? $restaurant->name : "Company Name"}}</h2>
				<p class="lead text-white">{{$restaurant->description}}</p>
			</div>
		</div>
	</div>		
</section>



<!-- menu section -->
@if ($restaurant->menu)
<section id="menu" class="parallax-section bg-light">
	<div class="container-fluid px-5">
		<h1 class="m-auto text-center">Menu</h1>
		<div class="row">
			@foreach ($types as $type)
				<div class="col-md-12 my-5 text-center">
					<h1 class="heading">{{ucfirst($type)}}</h1>
					<hr>
				</div>
				@if (count($menus) > 0)
					@foreach ($menus as $menu)
						@if ($menu->type == $type)
						<div class="col-md-4 col-sm-3 p-2">
							<div class="card">
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
</section>		
@endif


<!-- contact section -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="heading">Contact Us</h1>
				<hr>
			</div>
			<div class="col-md-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="#" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                      </div>
                        <div class="col-md-6">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                      </div>
                    </div>
					<div class="col-md-12 mb-4 p-0">
						<textarea name="message" rows="8" class="form-control" id="message" placeholder="Message"></textarea>
					</div>
					<div class="m-auto col-md-6 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="Submit">
					</div>
				</form>
			</div>
			<div class="col-md-2 col-sm-1"></div>
		</div>
	</div>
</section>


<!-- footer section -->
<footer class="parallax-section">
	<div class="container bg-danger pt-5 text-center m-auto align-items-center">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				@if ($restaurant->phone || $restaurant->street_address)
					<h2 class="heading">Contact Us</h2>

					@if ($restaurant->phone)
						<div class="ph">
							<p><i class="fa fa-phone"></i> Phone</p>
							<h4>{{$restaurant->phone}}</h4>
						</div>
					@endif
					
					@if ($restaurant->street_address)
						<div class="address">
							<p><i class="fa fa-map-marker"></i> Our Location</p>
							<h4>{{$restaurant->street_address}}</h4>
						</div>
					@endif
				@endif
			</div>

			@if($restaurant->openingHours)
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Open Hours</h2>
				<p>{{$restaurant->openingHours->day_of_the_week1}} <span>{{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time1}} {{!empty($restaurant->openingHours->start_time1) ? "-" : ""}} {{$restaurant->openingHours->end_time1}} {{$restaurant->openingHours->e_time1}}</span></p>

				<p>{{$restaurant->openingHours->day_of_the_week2}} <span>{{$restaurant->openingHours->start_time2}} {{$restaurant->openingHours->s_time2}} {{!empty($restaurant->openingHours->start_time2) ? "-" : ""}} {{$restaurant->openingHours->end_time2}} {{$restaurant->openingHours->e_time2}}</span></p>

				<p>{{$restaurant->openingHours->day_of_the_week3}} <span>{{$restaurant->openingHours->start_time3}} {{$restaurant->openingHours->s_time3}} {{!empty($restaurant->openingHours->start_time3) ? "-" : ""}} {{$restaurant->openingHours->end_time3}} {{$restaurant->openingHours->e_time3}}</span></p>

				<p>{{$restaurant->openingHours->day_of_the_week4}} <span>{{$restaurant->openingHours->start_time4}} {{$restaurant->openingHours->s_time4}} {{!empty($restaurant->openingHours->start_time4) ? "-" : ""}} {{$restaurant->openingHours->end_time4}} {{$restaurant->openingHours->e_time4}}</span></p>

				<p>{{$restaurant->openingHours->day_of_the_week5}} <span>{{$restaurant->openingHours->start_time5}} {{$restaurant->openingHours->s_time5}} {{!empty($restaurant->openingHours->start_time5) ? "-" : ""}} {{$restaurant->openingHours->end_time5}} {{$restaurant->openingHours->e_time5}}</span></p>

				<p>{{$restaurant->openingHours->day_of_the_week6}} <span>{{$restaurant->openingHours->start_time6}} {{$restaurant->openingHours->s_time6}} {{!empty($restaurant->openingHours->start_time6) ? "-" : ""}} {{$restaurant->openingHours->end_time6}} {{$restaurant->openingHours->e_time6}}</span></p>

				<p>{{$restaurant->openingHours->day_of_the_week7}} <span>{{$restaurant->openingHours->start_time7}} {{$restaurant->openingHours->s_time7}} {{!empty($restaurant->openingHours->start_time7) ? "-" : ""}} {{$restaurant->openingHours->end_time7}} {{$restaurant->openingHours->e_time7}}</span></p>
			</div>
			@endif

			@if ($restaurant->socialMedia)
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Follow Us</h2>
				<ul class="social-icon">
					@empty(!$restaurant->socialMedia->facebook)
					<li><a href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
					@endempty
					@empty(!$restaurant->socialMedia->instagram)
					<li><a href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}" class="fa fa-instagram wow bounceIn" data-wow-delay="0.6s"></a></li>
					@endempty
					@empty(!$restaurant->socialMedia->twitter)
					<li><a href="https://twitter.com/{{$restaurant->socialMedia->twitter}}" class="fa fa-twitter wow bounceIn" data-wow-delay="0.9s"></a></li>
					@endempty
				</ul>
			</div>
			@endif
		</div>
	</div>
</footer>


<!-- copyright section -->
<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>{{$restaurant->name}}</h3>
				<p>Copyright © All rights reserved</p>
			</div>
		</div>
	</div>
</section>
{{-- {{asset('themes/chinese/')}} --}}
<script src="{{asset('themes/chinese/js/jquery.js')}}"></script>
<script src="{{asset('themes/chinese/js/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/chinese/js/jquery.parallax.js')}}"></script>
<script src="{{asset('themes/chinese/js/smoothscroll.js')}}"></script>
<script src="{{asset('themes/chinese/js/nivo-lightbox.min.js')}}"></script>
<script src="{{asset('themes/chinese/js/wow.min.js')}}"></script>
<script src="{{asset('themes/chinese/js/custom.js')}}"></script>

    </body>
    @stack('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>