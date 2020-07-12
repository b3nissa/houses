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
    <div class="hero">
        <div class="container">
            <h1>Fundament Homes, het beste aanbod in huizen voor jou!</h1>
            <a href="#" class="button">Bekijk laatste aanbod</a>
        </div>
    </div>

    <div class="stock">
        <div class="container">
            <h2> Ons aanbod </h2>
            <div class="row mt-4">
                @foreach($houses as $house)
                    <div class="col-md-4">
                        <a href="{{ route('index.show', $house) }}">
                            <div class="stock-wrapper">
                                <img src="{{ asset("images/" . $house->image) }}">
                                <h3> {{ $house->name }} </h3>
                                <p> {{ $house->rooms  }} kamers </p>
                                <p class="price"> &euro; {{ $house->price }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
