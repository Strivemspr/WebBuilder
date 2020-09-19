@extends('layouts.restaurant')

@section('content')
  <div class="position-relative overflow-hidden text-center banner-index">
    <div class="col-md-5 p-lg-5 mx-auto my-5 text-italian">
        <h1 class="display-4 font-weight-bold">The Atrium On Elliot Street</h1>
        {{-- <p class="lead font-weight-normal">A Unique Shopping Experience All Under One Roof</p>
        <a class="btn btn-primary btn-lg" href="#">Contact us</a> --}}
    </div>
  </div>

  <section class="jumbotron bg-light text-center m-0">
    <div class="container">
        <h1 class="display-4 font-weight-bold">A Unique Shopping Experience All Under One Roof</h1>
        <p class="lead">Shop to your heart's content in the heart of the city at Atrium on Elliott. You'll find fashion and accessories, sports, lifestyle, beauty and health all under one roof.Relax in one of our cafes, enjoy the sumptuous delights of our foodcourt, or indulge in a facial or reflexology foot massage to ease away your aches and pains.</p>
          
        <p class="lead">With over 40 specialised shops with the main entrance on Elliott Street, Atrium on Elliott is part of the greater complex which includes Huawei Centre office building, Crowne Plaza Hotel and Atrium Carpark.</p>

        <p class="lead">When  you spend a minimum of $10.00 at any Atrium on Elliott outlet, you'll receive discounted (t&c's apply) parking at Atrium Carpark until midnight. Please bring your parking ticket and your same-day proof of purchase to the Atrium on Elliott management office on level 3 and receive your parking discount.</p>
        <p>
            <a href="#menu" class="btn btn-primary btn-lg">Visit Restaurants</a>
        </p>
    </div>
  </section>

  <section class="jumbotron text-center m-0">
    <div class="container px-0">
        <div class="col-md-12">
            <h1 class="display-4 font-weight-bold mb-5">Opening Hours</h1>
            <h1 class="font-weight-bold text-center">Centre Trading Hours</h1>
            <p class="lead">Mon to Fri: 9:00am - 6:00pm</p>
            <p class="lead">Sat, Sun & Public Holidays: 10:00am - 5:00pm</p>
            <h1 class="font-weight-bold text-center">Food Court Opening Hours</h1>
            <p class="lead">Mon to Fri: 9:00am - 5:00pm</p>
            <p class="lead">Sat, Sun & Public Holidays: 9:00am -5:00pm</p>
        </div>
    </div>
</section>

  <div class="album py-5 bg-light" id="menu">
    <div class="container">
      <h1 class="pb-3">Restaurants</h1>
      <div class="row">
        @foreach ($restaurants as $restaurant)
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div style="height: 250px; overflow: hidden;">
                <img style="object-fit: cover" class="card-img-top" src="{{ asset('img/restaurantImages/' . $restaurant->image) }}" alt="Card image cap">
              </div>
              {{-- $restaurant->type --}}
              <div class="card-body">
                <h3 class="card-title">{{$restaurant->name}}</h3>
                <p class="card-text">{{$restaurant->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                  @if(count($restaurant->menu) > 0)
                  <a href="/restaurant/{{$restaurant->id}}/{{$restaurant->type}}" type="button" class="btn btn-sm btn-success">Order Now</a>
                  @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        {{-- <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="{{asset('img/italian.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Italian Restaurant</h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <button type="button" class="btn btn-sm btn-success">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </div>
@endsection
