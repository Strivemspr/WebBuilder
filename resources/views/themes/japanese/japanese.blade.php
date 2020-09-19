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
        <title>{{$restaurant->name}}</title>

        {{-- Theme Related --}} 

        {{-- <link rel="stylesheet" href="{{asset('themes/japanese/css/bootstrap.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('themes/japanese/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('themes/japanese/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('themes/japanese/css/nivo-lightbox.css')}}">
        <link rel="stylesheet" href="{{asset('themes/japanese/css/nivo_themes/default/default.css')}}">
        <link rel="stylesheet" href="{{asset('themes/japanese/css/style.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

    </head>
    <body> 
        <!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Japanese Cuisine</a>
		</div>
			</div>
</section>


<!-- home section -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>JAPANESE RESTAURANT</h1>
				<h2>SUSHI DONBURI</h2>
				</div>
		</div>
	</div>		
</section>



<!-- menu section -->
<section id="menu" class="parallax-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-5 text-center">
				<h1 class="heading">Special Menu</h1>
				<hr>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Edamame - <span>$7.50</span></h4>
				<h5>Edamame soybeans, steamed and seasoned with sea salt</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Spinach - <span>$9.50</span></h4>
				<h5>Fresh spinach, gently steamed and served with Kura’s original sesame sauce</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Takowasabi <span>$10.75</span></h4>
				<h5>Fresh octopus in a wasabi marinade, a spicy Japanese delicacy</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Agedashi tofu - <span>$5.00</span></h4>
				<h5>Crispy fried tofu served in a delicate fish and soy broth</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>sashimi - <span>$6.00</span></h4>
				<h5>A selection of the best available market fresh fish</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Spider roll - <span>$7.50</span></h4>
				<h5>Rolled sushi with crispy fried soft shell crab</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Teriyaki chicken - <span>$10.75</span></h4>
				<h5>Pan fried chicken marinated in a sweet and sticky teriyaki sauce</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Teriyaki style grilled salmon fillets - <span>$20.50</span></h4>
				<h5>Pan fried salmon marinated in a sweet and sticky teriyaki sauce</h5>
			</div>
		</div>
	</div>
</section>		


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
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Contact Info.</h2>
				<div class="ph">
					<p><i class="fa fa-phone"></i> Phone</p>
					<h4>+64 080-0760</h4>
				</div>
				<div class="address">
					<p><i class="fa fa-map-marker"></i> Our Location</p>
					<h4>120 Duis aute irure, Auckland, NZ</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Open Hours</h2>
					<p>Monday <span>10:30 AM - 10:00 PM</span></p>
					<p>Tuesday <span>9:00 AM - 8:00 PM</span></p>
					<p>Wednesday <span>11:30 AM - 10:00 PM</span></p>
					<p>Thursday <span>11:30 AM - 10:00 PM</span></p>
					<p>Friday <span>11:30 AM - 10:00 PM</span></p>
					<p>Saturday <span>11:30 AM - 10:00 PM</span></p>
					<p>Sunday <span>11:30 AM - 10:00 PM</span></p>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Follow Us</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- copyright section -->
<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>JAPANESE</h3>
				<p>Copyright © Japanese Cuisine
                </p>
                
			</div>
		</div>
	</div>
</section>
{{-- {{asset('themes/japanese/')}} --}}
<script src="{{asset('themes/japanese/js/jquery.js')}}"></script>
<script src="{{asset('themes/japanese/js/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/japanese/js/jquery.parallax.js')}}"></script>
<script src="{{asset('themes/japanese/js/smoothscroll.js')}}"></script>
<script src="{{asset('themes/japanese/js/nivo-lightbox.min.js')}}"></script>
<script src="{{asset('themes/japanese/js/wow.min.js')}}"></script>
<script src="{{asset('themes/japanese/js/custom.js')}}"></script>

    </body>
    @stack('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>