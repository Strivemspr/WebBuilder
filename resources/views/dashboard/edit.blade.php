@extends('layouts.dashboard')

@section('extra-content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Restaurant Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <input id="generateWebsite" type="submit" class="btn btn-primary mr-2" value="Generate Website">
            @include('inc.createRestaurantButton')
        </div>
    </div>

    <div class="container-fluid">
        <h1>Details</h1>
        <hr>
        <div class="row">
            <div class="col-6">
                <h4><span class="badge badge-primary">Restaurant Name</span></h4>
                <p>{{$restaurant->name}}</p>
            </div>
            <div class="col-6">
                <h4><span class="badge badge-primary">Phone Number</span></h4>
                <p>{{$restaurant->phone}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h4><span class="badge badge-primary">Contact Name</span></h4>
                <p>{{Auth::user()->name}}</p>
            </div>
            <div class="col-6">
                <h4><span class="badge badge-primary">Email Address</span></h4>
                <p>{{Auth::user()->email}}</p>
            </div>
        </div>
    </div>
    
    @include('forms.restaurantDetails')

    <div class="row">
        @include('forms.openingHours')
        @include('forms.socialMedia')
    </div>

    @include('forms.menu')
@endsection