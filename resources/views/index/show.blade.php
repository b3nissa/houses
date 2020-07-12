@extends('layouts.app')
@section('content')
    <header>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <a class="navbar-brand" href="{{ route('index.index') }}"><span class="orange">Fundament</span> Houses</a>
                    </div>
                    <div class="col-md-4">
                        <ul class="navigation">
                            <li><a href="">Home</a></li>
                            @guest
                                <li><a href="{{ route('login') }}">Inloggen</a></li>
                            @else
                                <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>




        </nav>


    </header>
    <div class="hero" style="padding: 150px 0 90px;">
        <div class="container">
            <h1>{{ $house->name }}</h1>
        </div>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset("images/" . $house->image) }}">
            </div>
            <div class="col-md-6">
                @if($house->status->id != 3)<p><strong>Prijs: </strong>{{ $house->price }}</p>
                <p><strong>Type huis:</strong>  {{ $house->type->name }}</p>
                <p><strong>Status:</strong>  {{ $house->status->name }}</p>
                <p><strong>Aantal kamers:</strong>  {{ $house->rooms }}</p>
                <p>{{ $house->surface }} m2</p>
                    @else
                    <p> Verkocht </p>
                @endif


            </div>
        </div>
    </div>



@endsection
