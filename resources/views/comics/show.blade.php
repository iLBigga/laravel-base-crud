@extends('layouts.app')

@section('content')
    
    <section>
        <div class="container">
            <h2>{{ $comic->title }}</h2>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <p>Descrizione: {{ $comic->description }}</p>
            <p>Prezzo: {{ $comic->price }}$</p>
            <p>Serie: {{ $comic->series }}</p>
            <p>Data: {{ $comic->sale_date }}</p>
            <p>Tipologia: {{ $comic->type }}</p>
        </div>
        
        <div class="contianer">
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" value="Elimina">
            </form>
        </div>

@endsection