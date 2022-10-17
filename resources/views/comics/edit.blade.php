@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h2>
            Modifica fumetto
        </h2>
    </div>

    <div class="container">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <p>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" value="{{ old('name', $comic->title) }}" placeholder="Titolo Fumetto">
                @error('title')
                    <div style="color:red; font-size: 12px" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <p>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrizione...">{{ old('name', $comic->description) }}</textarea>
                @error('description')
                    <div style="color:red; font-size: 12px" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <p>
                <label for="thumb">Link Imamgine</label>
                <input type="text" name="thumb" id="thumb" value="{{ old('name', $comic->thumb) }}" placeholder="Link immagine">
                @error('thumb')
                    <div style="color:red; font-size: 12px" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <p>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" value="{{ old('name', $comic->price) }}" placeholder="Prezzo">
                @error('price')
                    <div style="color:red; font-size: 12px" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <p>
                <label for="series">Serie</label>
                <input type="text" name="series" id="series" value="{{ old('name', $comic->series) }}" placeholder="Serie">
                @error('series')
                    <div style="color:red; font-size: 12px" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <p>
                <label for="sale_date">Data</label>
                <input type="date" name="sale_date" id="sale_date" value="{{ old('name', $comic->sale_date) }}" placeholder="Data">
                @error('sale_date')
                    <div style="color:red; font-size: 12px" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <p>
                <label for="type">Tipologia</label>
                <input type="text" name="type" id="type" value="{{ old('name', $comic->type) }}" placeholder="Tipologia">
                @error('type')
                    <div style="color:red; font-size: 12px" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <p>
                <input type="submit" value="invia">
            </p>
        </form>
    </div>

    {{-- @if ($errors->any())
            <div class="alert alert-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif     --}}
</section>

@endsection