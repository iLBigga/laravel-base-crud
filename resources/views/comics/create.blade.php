@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h2>
            Aggiungi un fumetto
        </h2>
    </div>

    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <p>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" placeholder="Titolo Fumetto">
            </p>

            <p>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrizione..."></textarea>
            </p>

            <p>
                <label for="thumb">Link Imamgine</label>
                <input type="text" name="thumb" id="thumb" placeholder="Link immagine">
            </p>

            <p>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" placeholder="Prezzo">
            </p>

            <p>
                <label for="series">Serie</label>
                <input type="text" name="series" id="series" placeholder="Serie">
            </p>

            <p>
                <label for="sale_date">Data</label>
                <input type="text" name="sale_date" id="sale_date" placeholder="Data">
            </p>

            <p>
                <label for="type">Tipologia</label>
                <input type="text" name="type" id="type" placeholder="Tipologia">
            </p>

            <p>
                <input type="submit" value="invia">
            </p>
        </form>
    </div>
</section>

@endsection