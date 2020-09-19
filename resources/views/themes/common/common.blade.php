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
    </head>
    <body> 
        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">{{$restaurant->name}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <ul class="navbar-nav mr-auto">
                    {{-- <li class="nav-item">
                      <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                    </li> --}}
                    {{-- <li class="nav-item">
                      <a class="nav-link text-white" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="/posts">Blog</a>
                    </li> --}}
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link text-white" href="/">Back to Atrium</a></li>
                  </ul>
                </div>
            </div>
        </nav>

        {{-- CONTENT --}}
        <div>
            <main class="italian-theme">
                <div class="position-relative overflow-hidden text-center banner-italian">
                    <div class="col-md-5 p-lg-5 mx-auto my-5 text-italian">
                        <h1 class="display-4 font-weight-bold">{{$restaurant->name}}</h1>
                        {{-- <p class="lead font-weight-normal">{{$restaurant->description}}</p> --}}
                        {{-- <a class="btn btn-primary btn-lg" href="#">Contact us</a> --}}
                    </div>
                </div>

                <section class="jumbotron text-center">
                    <div class="container">
                        <h1 class="display-4 font-weight-bold">Our Restaurant</h1>
                        <p class="lead">{{$restaurant->description}}</p>
                        <p>
                            <a href="#menu" class="btn btn-primary btn-lg">Check menu</a>
                        </p>
                    </div>
                </section>

                <section class="container pt-4 pb-5" id="menu">
                    <div class="italian-menu-description">
                        <h1 class="display-4 font-weight-bold">Our Menu</h1>
                    </div>

                    @if ($restaurant->menu)
                    <div class="italian-card-container">
                        @foreach ($types as $type)
                            <h2>{{ucfirst($type)}}</h2>
                            @if (count($menus) > 0)
                                @foreach ($menus as $menu)
                                    @if ($menu->type == $type)
                                    <div class="italian-card">
                                        <div class="italian-card-img">
                                            <img src="{{asset('img/breakfast-2.jpg')}}" alt="">
                                        </div>
                                        <div class="italian-card-text">
                                            <h3>{{$menu->name}} <small class="text-secondary">{{!empty($menu->price) && $menu->price != 0 ? $menu->price : ""}}</small></h3>
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
                    @endif
                    {{-- {{$menus->links()}} --}}
                </section>

                <section class="jumbotron">
                    <div class="container px-0">
                                <div class="row d-flex no-gutters">
                        @if (!($restaurant->openingHours))
                        <div class="col-md-12">
                        @else
                        <div class="col-md-6">
                        @endif
                            <div class="mb-5">
                                <h1 class="display-4 font-weight-bold text-center">Contact Us</h1>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Subject</label>
                                            <input type="text" class="form-control" id="book_date" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Message</label>
                                            <textarea class="form-control" id="" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group text-center">
                                            <input type="submit" value="Make a Reservation" class="btn btn-primary btn-lg">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        @if ($restaurant->openingHours)
                        <div class="col-md-6">
                            <h1 class="display-4 font-weight-bold text-center">Opening Hours</h1>
                            <div class="row justify-content-center align-items-center mt-5">
                                <div class="col-md-4 text-center px-0">
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->day_of_the_week1}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week2 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->day_of_the_week2}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week3 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->day_of_the_week3}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week4 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->day_of_the_week4}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week5 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->day_of_the_week5}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week6 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->day_of_the_week6}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week7 != "")
                                    <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->day_of_the_week7}}</h4>
                                </div>
                                <div class="col-md-4 text-center px-0">
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->start_time1}} {{$restaurant->openingHours->s_time1}} {{!empty($restaurant->openingHours->start_time1) ? "-" : ""}} {{$restaurant->openingHours->end_time1}} {{$restaurant->openingHours->e_time1}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week2 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->start_time2}} {{$restaurant->openingHours->s_time2}} {{!empty($restaurant->openingHours->start_time2) ? "-" : ""}} {{$restaurant->openingHours->end_time2}} {{$restaurant->openingHours->e_time2}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week3 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->start_time3}} {{$restaurant->openingHours->s_time3}} {{!empty($restaurant->openingHours->start_time3) ? "-" : ""}} {{$restaurant->openingHours->end_time3}} {{$restaurant->openingHours->e_time3}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week4 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->start_time4}} {{$restaurant->openingHours->s_time4}} {{!empty($restaurant->openingHours->start_time4) ? "-" : ""}} {{$restaurant->openingHours->end_time4}} {{$restaurant->openingHours->e_time4}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week5 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->start_time5}} {{$restaurant->openingHours->s_time5}} {{!empty($restaurant->openingHours->start_time5) ? "-" : ""}} {{$restaurant->openingHours->end_time5}} {{$restaurant->openingHours->e_time5}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week6 != "")
                                        <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->start_time6}} {{$restaurant->openingHours->s_time6}} {{!empty($restaurant->openingHours->start_time6) ? "-" : ""}} {{$restaurant->openingHours->end_time6}} {{$restaurant->openingHours->e_time6}}</h4>
                                    @if($restaurant->openingHours->day_of_the_week7 != "")
                                    <hr>
                                    @else
                                    @endif
                                    <h4 class="d-block font-weight-light">{{$restaurant->openingHours->start_time7}} {{$restaurant->openingHours->s_time7}} {{!empty($restaurant->openingHours->start_time7) ? "-" : ""}} {{$restaurant->openingHours->end_time7}} {{$restaurant->openingHours->e_time7}}</h4>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </section>

                <footer class="container py-5">
                    <div class="d-flex justify-content-between">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
                            <small class="d-block mb-3 text-muted">&copy; {{substr($restaurant->created_at,0,4)}}</small>
                        </div>
                        @if ($restaurant->socialMedia)    
                        <div>
                            <h5>Social Media</h5>
                            <ul class="list-unstyled text-small">
                            @empty(!$restaurant->socialMedia->facebook)
                            <li><a class="text-muted" target="_blank" href="https://www.facebook.com/profile.php?id={{$restaurant->socialMedia->facebook}}">Facebook</a></li>
                            @endempty
                            @empty(!$restaurant->socialMedia->instagram)
                            <li><a class="text-muted" target="_blank" href="https://www.instagram.com/{{$restaurant->socialMedia->instagram}}/">Instagram</a></li>
                            @endempty
                            @empty(!$restaurant->socialMedia->twitter)
                            <li><a class="text-muted" target="_blank" href="https://twitter.com/{{$restaurant->socialMedia->twitter}}">Twitter</a></li>
                            </ul>
                            @endempty
                        </div>
                        @endif
                    </div>
                </footer>
            </main>
        </div>
    </body>
    @stack('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>