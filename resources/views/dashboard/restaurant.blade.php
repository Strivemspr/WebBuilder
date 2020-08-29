@extends('layouts.dashboard')

@section('extra-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Restaurants</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            @include('inc.createRestaurantButton')
        </div>
    </div>

    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            {{-- <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Minimal Statistics Cards</h4>
                    <p>Statistics on minimal cards.</p>
                </div>
            </div> --}}
            <div class="row">
                @if (count($restaurants) > 0)
                    @foreach ($restaurants as $restaurant)
                    <div class="col-xl-3 col-sm-6 col-12 mb-3">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex mb-3">
                                        <div class="media-body text-left">
                                            <h3>{{$restaurant->name}}</h3>
                                            <h3><span class="badge badge-success font-weight-light">Owned by: Marlon</span></h3>
                                            <small>Last Updated at: 2020-08-15 04:40:03</small>
                                        </div>
                                        <div class="align-self-center">
                                            <span class="feather-50"data-feather="folder-plus"></span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="/dashboard/restaurant/{{$restaurant->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                                        <form method="POST" action="/dashboard/restaurant/{{$restaurant->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </div>

                                    {{-- <a href="/restaurant" class="btn btn-primary">Edit</a> --}}
                                    {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>There are currently no restaurants in the database, please create a restaurant</p>
                @endif
            </div>
        </section>
    </div>
@endsection