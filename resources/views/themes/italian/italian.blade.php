@extends('layouts.restaurant');

@section('content')
    <div class="position-relative overflow-hidden text-center bg-dark banner-italian">
        <div class="col-md-5 p-lg-5 mx-auto my-5 text-italian">
            <h1 class="display-4 font-weight-normal">Punny headline</h1>
            <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        <img src="{{ asset('img/italian.jpg') }}" class="img-fluid img-italian" alt="Responsive image">
    </div>
@endsection