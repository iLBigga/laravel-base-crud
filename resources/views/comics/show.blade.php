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

@endsection