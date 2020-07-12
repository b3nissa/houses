@extends('layouts.dashboard')

@section('content')

    <section class="container">
        <div class="row header-row">
            <div class="col-md-8">
                <h1 class="page-title">Huizen overzicht</h1>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn" href="{{ route('dashboard.create') }}"> Voeg huis toe </a>
            </div>
        </div>

        <table class="houses-table">
            <thead>
            <tr>
                <th>Status</th>
                <th>Huis</th>
                <th>Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($houses as $house)
                <tr onclick="window.location.href = ' {{ route('dashboard.edit', $house) }} ' ">
                    <td>{{ $house->status->name }}</td>
                    <td>{{ $house->name }} </td>
                    <td>{{ $house->type->name }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </section>


@endsection
