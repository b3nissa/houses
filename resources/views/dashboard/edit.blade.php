@extends('layouts.dashboard')

@section('content')
    <section class="container">
        <div class="row header-row">
            <div class="col-md-8">
                <h1 class="page-title">Wijzig {{ $house->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-wrapper">
                    <form method="post" action="{{ route('dashboard.update', $house) }}" enctype="multipart/form-data">
                        @csrf
                        <label for="image"> Afbeelding: * {{ $house->image }} </label>
                        <input class="mb-2 d-block" type="file" name="image" >
                        <input class="form-control" type="text" name="name" placeholder="Woningnaam *" value="{{ $house->name }}" required>
                        <select class="form-control" name="type_id">
                            <option selected value="{{ $house->type->id }}">{{ $house->type->name }}</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        <input class="form-control" type="text" name="surface" placeholder="Oppervlakte in m2" value="{{ $house->surface }}" required>
                        <input class="form-control" type="text" name="rooms" placeholder="Aantal kamers *" value="{{ $house->rooms }}" required>
                        <input class="form-control" type="text" name="price" placeholder="Prijs *" value="{{ $house->price }}" required>
                        <select class="form-control" name="status_id" required>
                            <option selected value="{{ $house->status->id }}"> {{ $house->status->name }} </option>
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-right">
                            <a href="{{ route('dashboard.index') }}">Annuleer </a>
                            <button class="btn" type="submit">Opslaan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
