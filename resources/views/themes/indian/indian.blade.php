<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>{{$restaurant->name}}</title>
    <!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('themes/indian/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/indian/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/indian/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('themes/indian/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('themes/indian/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/indian/css/magnific-popup.css')}}">
    {{-- {{asset('themes/indian/')}} --}}

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('themes/indian/css/templatemo-style.css')}}">

</head>
<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand">{{$restaurant->name}}</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <a href="/" class="section-btn">Back to Atrium</a>
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="row">

            <div>
                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h1>{{$restaurant->name}}</h1>
                                <a href="#menu" class="section-btn btn btn-default smoothScroll">Check our Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h3>Who we are</h3>
                            <h1>About Us</h1>
                        </div>
                        <p class="lead wow fadeInUp" data-wow-delay="0.4s">{{$restaurant->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($restaurant->menu)
    <section id="rmenu" class="parallax-section bg-light">
        <div class="container" style="padding: 100px;">
            <h1 class="m-auto text-center">Menu</h1>
            <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between">
                @foreach ($types as $type)
                <div class="col-md-12 my-5 text-center" style="width: 100%">
                    <h1 class="heading" style="padding: 50px 0 10px 0">{{ucfirst($type)}}</h1>
                    <hr>
                </div>
                @if (count($menus) > 0)
                @foreach ($menus as $menu)
                @if ($menu->type == $type)
                <div style="padding: 20px; width:100%; max-width:500px;">
                    <div class="card">
                        <div class="row card-body">
                            <div class="col-md-6 col-sm-6 col-6">
                                <h3 class="card-title">{{$menu->name}} <span>{{!empty($menu->price) && $menu->price != 0 ? "$".$menu->price : ""}}</span></h3>
                                <p class="card-text">{{$menu->ingredients}}</p>
                            </div>
                            @if ($menu->image)
                            <img class="col-md-6 col-sm-6 col-6" width="300" src="{{asset('img/menuImages/'.$menu->image)}}" alt="{{$menu->name}}" />
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


    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->

                <div class="col-md-12 col-sm-12">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h1>Contact Us</h1>
                        </div>
                    </div>

                    <!-- CONTACT FORM -->
                    <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                        <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                        <h6 class="text-success">Your message has been sent successfully.</h6>

                        <!-- IF MAIL NOT SENT -->
                        <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                            <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                            <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                @if ($restaurant->openingHours)
                <div class="col-md-12 col-sm-12">
                    <div class="footer-info footer-open-hour">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <div>
                                <strong>{{$restaurant->openingHours->day_of_the_week1}}</strong>
                                <p>{{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time1}} {{!empty($restaurant->openingHours->start_time1) ? "-" : ""}} {{$restaurant->openingHours->end_time1}} {{$restaurant->openingHours->e_time1}}</p>
                            </div>
                            <div>
                                <strong>{{$restaurant->openingHours->day_of_the_week2}}</strong>
                                <p>{{$restaurant->openingHours->start_time2}} {{$restaurant->openingHours->s_time2}} {{!empty($restaurant->openingHours->start_time2) ? "-" : ""}} {{$restaurant->openingHours->end_time2}} {{$restaurant->openingHours->e_time2}}</p>
                            </div>
                            <div>
                                <strong>{{$restaurant->openingHours->day_of_the_week3}}</strong>
                                <p>{{$restaurant->openingHours->start_time3}} {{$restaurant->openingHours->s_time3}} {{!empty($restaurant->openingHours->start_time3) ? "-" : ""}} {{$restaurant->openingHours->end_time3}} {{$restaurant->openingHours->e_time3}}</p>
                            </div>
                            <div>
                                <strong>{{$restaurant->openingHours->day_of_the_week4}}</strong>
                                <p>{{$restaurant->openingHours->start_time4}} {{$restaurant->openingHours->s_time4}} {{!empty($restaurant->openingHours->start_time4) ? "-" : ""}} {{$restaurant->openingHours->end_time4}} {{$restaurant->openingHours->e_time4}}</p>
                            </div>
                            <div>
                                <strong>{{$restaurant->openingHours->day_of_the_week5}}</strong>
                                <p>{{$restaurant->openingHours->start_time5}} {{$restaurant->openingHours->s_time5}} {{!empty($restaurant->openingHours->start_time5) ? "-" : ""}} {{$restaurant->openingHours->end_time5}} {{$restaurant->openingHours->e_time5}}</p>
                            </div>
                            <div>
                                <strong>{{$restaurant->openingHours->day_of_the_week6}}</strong>
                                <p>{{$restaurant->openingHours->start_time6}} {{$restaurant->openingHours->s_time6}} {{!empty($restaurant->openingHours->start_time6) ? "-" : ""}} {{$restaurant->openingHours->end_time6}} {{$restaurant->openingHours->e_time6}}</p>
                            </div>
                            <div>
                                <strong>{{$restaurant->openingHours->day_of_the_week7}}</strong>
                                <p>{{$restaurant->openingHours->start_time7}} {{$restaurant->openingHours->s_time7}} {{!empty($restaurant->openingHours->start_time7) ? "-" : ""}} {{$restaurant->openingHours->end_time7}} {{$restaurant->openingHours->e_time7}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>


            <div class="row">
                @if ($restaurant->street_address)
                <div class="col-md-6 col-sm-6">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>{{$restaurant->street_address}},<br>{{$restaurant->suburb}}<br>{{$restaurant->city}} {{$restaurant->zip_code}}</p>
                        </address>
                    </div>
                </div>
                @endif
                
                <div class="col-md-6 col-sm-6">
                    
                    @if ($restaurant->socialMedia)
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                        @empty(!$restaurant->socialMedia->facebook)
                        <li><a href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        @endempty

                        @empty(!$restaurant->socialMedia->twitter)
                        <li><a href="https://twitter.com/{{$restaurant->socialMedia->twitter}}" class="fa fa-twitter"></a></li>
                        @endempty

                        @empty(!$restaurant->socialMedia->instagram)
                        <li><a href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}" class="fa fa-instagram"></a></li>
                        @endempty
                    </ul>
                    @endif

                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                        <p><br>Copyright &copy; 2018 <br>{{$restaurant->name}}
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="{{asset('themes/indian/js/jquery.js')}}"></script>
    <script src="{{asset('themes/indian/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('themes/indian/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('themes/indian/js/wow.min.js')}}"></script>
    <script src="{{asset('themes/indian/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('themes/indian/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('themes/indian/js/smoothscroll.js')}}"></script>
    <script src="{{asset('themes/indian/js/custom.js')}}"></script>

</body>
</html>
