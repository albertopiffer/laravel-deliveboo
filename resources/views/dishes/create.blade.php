@extends('layouts.app')
@section('content')
    <div>
        <div>Aggiugi Piatto</div>
    </div>

    <div class="container">
        <form action="{{ route('dishes.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome piatto</label>
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name"
                    aria-describedby="nameHelp" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror"
                    id="description" aria-describedby="descriptionHelp" value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="typology" class="form-label">Tipologia</label>
                <input type="text" name="typology" class="form-control  @error('typology') is-invalid @enderror"
                    id="typology" aria-describedby="typologyHelp" value="{{ old('typology') }}">
                @error('typology')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror"
                    id="price" aria-describedby="priceHelp" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumbnail" class="form-label">IMG</label>
                <input type="file" name="thumbnail" class="form-control  @error('thumbnail') is-invalid @enderror"
                    id="thumbnail" aria-describedby="thumbnailHelp" value="{{ old('thumbnail') }}">
                @error('thumbnail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi piatto</button>
        </form>
    </div>
@endsection
