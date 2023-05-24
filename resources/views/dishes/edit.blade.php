@extends('layouts.app')
@section('content')
    <h1>Edit</h1>

    <div>
        <form action="{{ route('dishes.update', $dish) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                @if ($dish->cover_image)
                    <img src="{{ asset('storage/' . $dish->cover_image) }}" alt="" width="200">
                @endif
                <label for="thumbnail" class="form-label">IMG</label>
                <input type="file" name="thumbnail" class="form-control  @error('thumbnail') is-invalid @enderror"
                    id="thumbnail" aria-describedby="thumbnailHelp" value="{{ old('thumbnail') }}">
                @error('thumbnail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome piatto</label>
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                    id="name" aria-describedby="nameHelp" value="{{ old('name', $dish->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror"
                    id="description" aria-describedby="descriptionHelp"
                    value="{{ old('description', $dish->description) }}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tipology" class="form-label">Tipologia</label>
                <input type="text" name="tipology" class="form-control  @error('tipology') is-invalid @enderror"
                    id="tipology" aria-describedby="tipologyHelp" value="{{ old('tipology', $dish->tipology) }}">
                @error('tipology')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="visible" class="form-label">Disponibilità</label>
                <input type="text" name="visible" class="form-control  @error('visible') is-invalid @enderror"
                    id="visible" aria-describedby="visibleHelp" value="{{ old('visible', $dish->visible) }}">
                @error('visible')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror"
                    id="price" aria-describedby="priceHelp" value="{{ old('price', $dish->price) }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumbnail" class="form-label">IMG</label>
                <input type="text" name="thumbnail" class="form-control  @error('thumbnail') is-invalid @enderror"
                    id="thumbnail" aria-describedby="thumbnailHelp" value="{{ old('thumbnail', $dish->thumbnail) }}">
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
