<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{$restaurant->name}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('themes/thai/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('themes/thai/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('themes/thai/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/thai/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/thai/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('themes/thai/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('themes/thai/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('themes/thai/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('themes/thai/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('themes/thai/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('themes/thai/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('themes/thai/css/style.css')}}">
</head>
<body>
    <section class="home-slider owl-carousel js-fullheight">

        <div class="slider-item js-fullheight" style="background-image: url({{asset('themes/thai/images/background.jpeg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Tasty Thai</span>
                        <h1 class="mb-4">{{$restaurant->name}}</h1>
                    </div>

                </div>
            </div>
        </div>
	</section>
	
	<section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wrap-about p-0 pt-5 ftco-animate">
                    <div class="heading-section mb-4 my-5 my-md-0">
                        <span class="subheading">About</span>
                        <h2 class="mb-4">{{$restaurant->name}}</h2>
                    </div>
                    <p>{{$restaurant->description}}</p>
                </div>
            </div>
        </div>
    </section>


	@if ($restaurant->menu)
    <section class="ftco-section mb-5">
        <div class="container">
            <div class="ftco-search">
                <h3> <span> Menu </span></h3>
                <div class="row">

                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

							@foreach ($types as $type)
								@if ($loop->first)
									<a class="nav-link ftco-animate active" id="v-pills-{{$loop->index}}-tab" data-toggle="pill" href="#v-pills-{{$loop->index}}" role="tab" aria-controls="v-pills-{{$loop->index}}" aria-selected="true">{{ucfirst($type)}}</a>
								@else
									<a class="nav-link ftco-animate" id="v-pills-{{$loop->index}}-tab" data-toggle="pill" href="#v-pills-{{$loop->index}}" role="tab" aria-controls="v-pills-{{$loop->index}}" aria-selected="true">{{ucfirst($type)}}</a>
								@endif
							@endforeach
                            {{-- <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Pork</a> --}}
                        </div>
                    </div>

                    <div class="col-md-12 tab-wrap">
                        <div class="tab-content" id="v-pills-tabContent">

							@foreach ($types as $type)
							@if ($loop->first)
							<div class="tab-pane fade show active" id="v-pills-{{$loop->index}}" role="tabpanel" aria-labelledby="day-{{$loop->index}}-tab">
							@else
							<div class="tab-pane fade show" id="v-pills-{{$loop->index}}" role="tabpanel" aria-labelledby="day-{{$loop->index}}-tab">
							@endif
							
                                <div class="row no-gutters d-flex align-items-stretch">

									@if (count($menus) > 0)
									  	@foreach($menus as $menu)
											  @if ($menu->type == $type)
											  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
												  <div class="menus d-sm-flex ftco-animate align-items-stretch">
													  <div class="menu-img img" style="background-image: url({{asset('img/menuImages/'.$menu->image)}});">
													  </div>
													  <div class="text d-flex align-items-center">
														  <div>
															  <div class="d-flex">
																  <div class="one-half">
																	<h3>{{$menu->name}}</h3>
																  </div>
																  <div class="one-forth">
																	  <span class="price">{{!empty($menu->price) && $menu->price != 0 ? "$".$menu->price : ""}}</span>
																  </div>
															  </div>
																<p><span>{{$menu->ingredients}}</span></p>
														  </div>
													  </div>
												  </div>
											  </div>
											  @endif
										@endforeach
									@else
										<p class="Lead">No Menu found in the database</p>
									@endif

                                </div>
							</div>
							@endforeach
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
	
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">

				@if ($restaurant->socialMedia)
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Tasty Thai</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							@empty(!$restaurant->socialMedia->facebook)
                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}"><span class="icon-facebook"></span></a></li>
							@endempty
							@empty(!$restaurant->socialMedia->instagram)
                            <li class="ftco-animate"><a href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}"><span class="icon-instagram"></span></a></li>
							@endempty
							@empty(!$restaurant->socialMedia->twitter)
                            <li class="ftco-animate"><a href="https://twitter.com/{{$restaurant->socialMedia->twitter}}"><span class="icon-twitter"></span></a></li>
							@endempty
                        </ul>
                    </div>
				</div>
				@endif
				
				@if ($restaurant->openingHours)
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Open Hours</h2>
                        <ul class="list-unstyled open-hours">
						<li class="d-flex"><span>{{$restaurant->openingHours->day_of_the_week1}}
							</span><span>{{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time1}} {{!empty($restaurant->openingHours->start_time1) ? "-" : ""}} {{$restaurant->openingHours->end_time1}} {{$restaurant->openingHours->e_time1}}</span>
						</li>

						<li class="d-flex"><span>{{$restaurant->openingHours->day_of_the_week2}}
							</span><span>{{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time2}} {{!empty($restaurant->openingHours->start_time2) ? "-" : ""}} {{$restaurant->openingHours->end_time2}} {{$restaurant->openingHours->e_time2}}</span>
						</li>

						<li class="d-flex"><span>{{$restaurant->openingHours->day_of_the_week3}}
							</span><span>{{$restaurant->openingHours->start_time3}} {{$restaurant->openingHours->s_time3}} {{!empty($restaurant->openingHours->start_time3) ? "-" : ""}} {{$restaurant->openingHours->end_time3}} {{$restaurant->openingHours->e_time3}}</span>
						</li>

						<li class="d-flex"><span>{{$restaurant->openingHours->day_of_the_week4}}
							</span><span>{{$restaurant->openingHours->start_time4}} {{$restaurant->openingHours->s_time4}} {{!empty($restaurant->openingHours->start_time4) ? "-" : ""}} {{$restaurant->openingHours->end_time4}} {{$restaurant->openingHours->e_time4}}</span>
						</li>

						<li class="d-flex"><span>{{$restaurant->openingHours->day_of_the_week5}}
							</span><span>{{$restaurant->openingHours->start_time5}} {{$restaurant->openingHours->s_time5}} {{!empty($restaurant->openingHours->start_time5) ? "-" : ""}} {{$restaurant->openingHours->end_time5}} {{$restaurant->openingHours->e_time5}}</span>
						</li>

						<li class="d-flex"><span>{{$restaurant->openingHours->day_of_the_week6}}
							</span><span>{{$restaurant->openingHours->start_time6}} {{$restaurant->openingHours->s_time6}} {{!empty($restaurant->openingHours->start_time6) ? "-" : ""}} {{$restaurant->openingHours->end_time6}} {{$restaurant->openingHours->e_time6}}</span>
						</li>

						<li class="d-flex"><span>{{$restaurant->openingHours->day_of_the_week7}}
							</span><span>{{$restaurant->openingHours->start_time7}} {{$restaurant->openingHours->s_time7}} {{!empty($restaurant->openingHours->start_time7) ? "-" : ""}} {{$restaurant->openingHours->end_time7}} {{$restaurant->openingHours->e_time7}}</span>
						</li>
                        </ul>
                    </div>
                </div>
				@endif


                <div class="row">
                    <div class="col-md-12 text-center">

                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | {{$restaurant->name}}
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="{{asset('themes/thai/js/jquery.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/popper.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('themes/thai/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/aos.js')}}"></script>
    <script src="{{asset('themes/thai/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('themes/thai/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('themes/thai/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('themes/thai/js/google-map.js')}}"></script>
    <script src="{{asset('themes/thai/js/main.js')}}"></script>

</body>
</html>
