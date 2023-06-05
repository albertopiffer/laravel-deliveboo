@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <form action="{{ route('dishes.update', $dish) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                @if ($dish->cover_image)
                    <img src="{{ asset('storage/' . $dish->cover_image) }}" alt="" width="200">
                @endif
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
                <label for="typology" class="form-label">Tipologia</label>
                <input type="text" name="typology" class="form-control  @error('typology') is-invalid @enderror"
                    id="typology" aria-describedby="typologyHelp" value="{{ old('typology', $dish->typology) }}">
                @error('typology')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="visible" class="form-label">Disponibilità</label>
                <select name="visible" class="form-control @error('visible') is-invalid @enderror" id="visible"
                    aria-describedby="visibleHelp">
                    <option value="0" @if (old('visible', $dish->visible) == 0) selected @endif>Non Disponibile</option>
                    <option value="1" @if (old('visible', $dish->visible) == 1) selected @endif>Disponibile</option>
                </select>
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
                <input type="file" name="thumbnail" class="form-control  @error('thumbnail') is-invalid @enderror"
                    id="thumbnail" aria-describedby="thumbnailHelp" value="{{ old('thumbnail') }}">
                @error('thumbnail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="create-button">Modifica</button>
        </form>
    </div>
@endsection
<style>
    .create-button {
        border-radius: 8px;
        border: 1px solid #FF7659;
        color: #FF7659;
        background-color: white;
        padding: 5px;
        width: 20%;

        &:hover {
            color: white;
            background-color: #FF7659;
            border: 1px solid white;

            .icon {
                color: white
            }
        }
    }
</style>
