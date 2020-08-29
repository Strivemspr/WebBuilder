@extends('layouts.app')

@section('content')
<main class="py-4">
    <div class="container-fluid">
        <div class="row">
            @auth
                @include('inc.sidebar')
            @endauth
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @include('inc.messages')
                @yield('extra-content')
            </main>
        </div>
    </div>
</main>
@endsection