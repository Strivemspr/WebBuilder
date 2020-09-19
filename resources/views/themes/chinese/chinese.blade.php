@extends('layouts.restaurant')

@section('content')
    <main class="italian-theme">
        <div class="position-relative overflow-hidden text-center banner-italian">
            <div class="col-md-5 p-lg-5 mx-auto my-5 text-italian">
                <h1 class="display-4 font-weight-bold">Chinese</h1>
                <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                <a class="btn btn-primary btn-lg" href="#">Contact us</a>
            </div>
        </div>

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4 font-weight-bold">Our Restaurant</h1>
                <p class="lead">On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p>
                    <a href="#" class="btn btn-primary btn-lg">Check menu</a>
                </p>
            </div>
        </section>

        <section class="container pt-4 pb-5">
            <div class="italian-menu-description">
                <h1 class="display-4 font-weight-bold">Our Menu</h1>
            </div>

            <div class="italian-card-container">
                <h2>Breakfast</h2>
                @if (count($menus) > 0)
                    @foreach ($menus as $menu)
                        <div class="italian-card">
                            <div class="italian-card-img">
                                <img src="{{asset('img/breakfast-2.jpg')}}" alt="">
                            </div>
                            <div class="italian-card-text">
                                <h3>{{$menu->name}} <small class="text-secondary">{{$menu->price}}</small></h3>
                                <p class="text-secondary">{{$menu->ingredients}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="Lead">No Menu found in the database</p>
                @endif
            </div>
            {{-- {{$menus->links()}} --}}
        </section>

        <section class="jumbotron">
            <div class="container px-0">
                        <div class="row d-flex no-gutters">
                <div class="col-md-6">
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
                <div class="col-md-6">
                    <h1 class="display-4 font-weight-bold text-center">Opening Hours</h1>
                    <div class="row justify-content-center align-items-center mt-5">
                        <div class="col-md-4 text-center px-0">
                            <h4 class="d-block font-weight-light">Monday</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">Tuesday</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">Wednesday</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">Thursday</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">Friday</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">Saturday</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">Sunday</h4>
                        </div>
                        <div class="col-md-4 text-center px-0">
                            <h4 class="d-block font-weight-light">11:00 - 18:00</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">11:00 - 18:00</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">11:00 - 18:00</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">11:00 - 18:00</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">11:00 - 18:00</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">11:00 - 18:00</h4>
                            <hr>
                            <h4 class="d-block font-weight-light">11:00 - 18:00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
                    <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Business</a></li>
                    <li><a class="text-muted" href="#">Education</a></li>
                    <li><a class="text-muted" href="#">Government</a></li>
                    <li><a class="text-muted" href="#">Gaming</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Social Media</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Facebook</a></li>
                    <li><a class="text-muted" href="#">Instagram</a></li>
                    <li><a class="text-muted" href="#">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>
@endsection