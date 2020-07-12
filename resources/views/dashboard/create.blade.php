@extends('layouts.dashboard')

@section('content')
    <section class="container">
        <div class="row header-row">
            <div class="col-md-8">
                <h1 class="page-title">Nieuw huis toevoegen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-wrapper">
                    <form method="post" action="{{ route('dashboard.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="image"> Afbeelding: * </label>
                        <input class="mb-2" type="file" name="image" required>
                        <input class="form-control" type="text" name="name" placeholder="Woningnaam *" required>
                        <select class="form-control" name="type_id">
                            <option disabled selected>Type woning *</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        <input class="form-control" type="text" name="surface" placeholder="Oppervlakte in m2" required>
                        <input class="form-control" type="text" name="rooms" placeholder="Aantal kamers *" required>
                        <input class="form-control" type="text" name="price" placeholder="Prijs *" required>
                        <select class="form-control" name="status_id" required>
                            <option disabled selected> Status * </option>
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
