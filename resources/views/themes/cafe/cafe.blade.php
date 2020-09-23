<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>{{$restaurant->name}}</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="{{asset('themes/cafe/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('themes/cafe/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('themes/cafe/css/style.css')}}">
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#menu-list">Menu</a>
          </div>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="container text-center">
            <h1 class="logo-name">{{$restaurant->name}}</h1>
            <p>Craving a Good CUP of Coffee!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">{{$restaurant->name}}</h1>
          <p class="lead">{{$restaurant->description}}</p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 m-auto">
          <div class="col-md-12">
            <img src="{{asset('themes/cafe/img/res01.jpg')}}" alt="" class="img-responsive">
            {{-- <img src="{{asset('img/menuImages/'.$restaurant->image)}}" alt="" class="img-responsive"> --}}
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!-- menu -->
  @if ($restaurant->menu)
  <section id="menu-list" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center marb-35">
              <h1 class="header-h">Our Menu</h1>
            </div>
    
            <div class="col-md-12  text-center" id="menu-flters">
              <ul>
                  <li><a class="filter active" data-filter="dishes">Show All</a></li>
                @foreach ($types as $type)
                <li><a class="filter" data-filter="{{$loop->index}}dish">{{ucfirst($type)}}</a></li>
                @endforeach
              </ul>
            </div>
    
           
            <div id="menu-wrapper" class="common-card-container">
                @foreach ($types as $type)
                    @if (count($menus) > 0)
                        @foreach ($menus as $menu)
                            @if ($menu->type == $type)
                            <div class="common-card d-flex {{$loop->parent->index}}dish dishes">
                                @if ($menu->image)
                                <div class="common-card-img">
                                    <img src="{{asset('img/menuImages/'.$menu->image)}}" alt="{{$menu->name}}">
                                </div>
                                @endif
                                <div class="common-card-text">
                                    <h3 class="m-0">{{$menu->name}} <small class="text-secondary">{{!empty($menu->price) && $menu->price != 0 ? "$".$menu->price : ""}}</small></h3>
                                    <p class="text-secondary">{{$menu->ingredients}}</p>
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
    </div>
  </section>
  @endif
  <!--/ menu -->
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Feedback</h1>
          </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            @if($restaurant->phone)
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">{{$restaurant->phone}} -- <span class="contacts-sp">Contact Us</span></p>
            </div>
            @endif
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            @if ($restaurant->openingHours)
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> {{$restaurant->openingHours->day_of_the_week1}}  
                {{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time1}} {{!empty($restaurant->openingHours->start_time1) ? "-" : ""}} {{$restaurant->openingHours->end_time1}} {{$restaurant->openingHours->e_time1}}</p>
                
              <p class="light-blue regular alt-p"> {{$restaurant->openingHours->day_of_the_week2}}  
                {{$restaurant->openingHours->start_time2}} {{$restaurant->openingHours->s_time2}} {{!empty($restaurant->openingHours->start_time2) ? "-" : ""}} {{$restaurant->openingHours->end_time2}} {{$restaurant->openingHours->e_time2}}</p>

              <p class="light-blue regular alt-p"> {{$restaurant->openingHours->day_of_the_week3}}  
                {{$restaurant->openingHours->start_time3}} {{$restaurant->openingHours->s_time3}} {{!empty($restaurant->openingHours->start_time3) ? "-" : ""}} {{$restaurant->openingHours->end_time3}} {{$restaurant->openingHours->e_time3}}</p>

              <p class="light-blue regular alt-p"> {{$restaurant->openingHours->day_of_the_week4}}  
                {{$restaurant->openingHours->start_time4}} {{$restaurant->openingHours->s_time4}} {{!empty($restaurant->openingHours->start_time4) ? "-" : ""}} {{$restaurant->openingHours->end_time4}} {{$restaurant->openingHours->e_time4}}</p>

              <p class="light-blue regular alt-p"> {{$restaurant->openingHours->day_of_the_week5}}  
                {{$restaurant->openingHours->start_time5}} {{$restaurant->openingHours->s_time5}} {{!empty($restaurant->openingHours->start_time5) ? "-" : ""}} {{$restaurant->openingHours->end_time5}} {{$restaurant->openingHours->e_time5}}</p>

              <p class="light-blue regular alt-p"> {{$restaurant->openingHours->day_of_the_week6}}  
                {{$restaurant->openingHours->start_time6}} {{$restaurant->openingHours->s_time6}} {{!empty($restaurant->openingHours->start_time6) ? "-" : ""}} {{$restaurant->openingHours->end_time6}} {{$restaurant->openingHours->e_time6}}</p>

              <p class="light-blue regular alt-p"> {{$restaurant->openingHours->day_of_the_week7}}  
                {{$restaurant->openingHours->start_time7}} {{$restaurant->openingHours->s_time7}} {{!empty($restaurant->openingHours->start_time7) ? "-" : ""}} {{$restaurant->openingHours->end_time7}} {{$restaurant->openingHours->e_time7}}</p>
            </div>
            @endif
        </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Coffee Hiltop</h4>
            @if ($restaurant->street_address)
            <address>{{$restaurant->street_address}}<br>{{$restaurant->suburb}}, {{$restaurant->country}} {{$restaurant->zip_code}}</address>
            @endif
            @if ($restaurant->socialMedia)
            <div class="social-list">
                @empty (!$restaurant->socialMedia->facebook)
                <a href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                @endempty

                @empty (!$restaurant->socialMedia->twitter)
                <a href="https://twitter.com/{{$restaurant->socialMedia->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                @endempty

                @empty (!$restaurant->socialMedia->instagram)
                <a href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                @endempty
            </div>
            @endif
            <p class="copyright clear-float">
              © {{$restaurant->name}}. All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="{{asset('themes/cafe/js/jquery.min.js')}}"></script>
  <script src="{{asset('themes/cafe/js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('themes/cafe/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('themes/cafe/js/custom.js')}}"></script>
  <script src="{{asset('themes/cafe/contactform/contactform.js')}}"></script>

</body>

</html>
