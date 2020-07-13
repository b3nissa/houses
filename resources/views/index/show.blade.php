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
    <div class="hero" style="padding: 45px 0;">
        <div class="container">
            <h1></h1>
        </div>
    </div>
    <div class="container py-4">
        <div class="row mb-2 house-detail">
            <div class="col-md-12">
                <h2> {{ $house->name }} </h2>
                <p class="price">@if($house->status->id != 3) &euro; {{ $house->price }} @else Dit huis is verkocht @endif</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <img class="show-img" src="{{ asset("images/" . $house->image) }}">
            </div>
            <div class="col-md-4">





            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p><strong>Type huis:</strong>  {{ $house->type->name }}</p>
                <p><strong>Status:</strong>  {{ $house->status->name }}</p>
                <p><strong>Aantal kamers:</strong>  {{ $house->rooms }}</p>
                <p>{{ $house->surface }} m2</p>
            </div>

        </div>
    </div>



@endsection
