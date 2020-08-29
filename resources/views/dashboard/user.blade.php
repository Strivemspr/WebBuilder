@extends('layouts.dashboard')

@section('extra-content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <a href="/dashboard" class="btn btn-primary mr-2">
                Update User Details
            </a> --}}
            <input type="submit" class="btn btn-primary mr-2" value="Update User Details" onclick="document.querySelector('#userDetailsForm').submit()">
            @include('inc.createRestaurantButton')
        </div>
    </div>
    <div class="row">
        @include('forms.userDetails')
    </div>
@endsection