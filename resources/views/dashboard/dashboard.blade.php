@extends('layouts.dashboard')

@section('extra-content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Restaurant Creation</h1>
    </div>

    <form method="POST" action="/dashboard" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Restaurant Name">
            </div>
            <div class="form-group col-md-4">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">
            </div>
            <div class="form-group col-md-4">
                <label for="email">Restaurant Email</label>
                <input type="email" name="email" class="form-control" id="email" value="" placeholder="Restaurant Email">
            </div>
        </div>
        <div class="form-group">
            <label for="street_address">Street Address</label>
            <input type="text" name="street_address" class="form-control" id="street_address" placeholder="Restaurant Street Address">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" class="form-control" id="city" placeholder="City">
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="suburb">Suburb</label>
                <input type="text" name="suburb" class="form-control" id="suburb" placeholder="Suburb">
            </div>
            <div class="form-group col-md-5">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" id="country" placeholder="Country">
            </div>
            <div class="form-group col-md-2">
                <label for="zip_code">Zip Code</label>
                <input type="text" name="zip_code" class="form-control" id="inputZip" placeholder="Zip Code">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type">Type</label>
                <select id="type" name="type" class="form-control">
                    @if ($types)
                        <option selected disabled hidden>Choose a restaurant type</option>
                        @foreach ($types as $type)
                            <option value="{{$type}}">{{ucfirst(trans($type))}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input accept="image/jpg, image/jpeg, image/png" name="image" type="file" class="custom-file-input" id="RestaurantImage" aria-describedby="RestaurantImage">
                        <label class="custom-file-label imageLabel" for="RestaurantImage">Choose file</label>
                    </div>
                </div> 
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Restaurant Description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Restaurant</button>
    </form>
@endsection