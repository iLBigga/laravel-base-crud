@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <a href="{{ route('comics.create') }}">Aggiungi Fumetto</a>
    </div>
</section>
    
<section>
    <div class="container">
        <ul>
            @foreach ($comics as $c)
            <div class="card" style="border-bottom: 1px solid black;">
                <h2>{{ $c->title }}</h2>
                <a href="{{ route('comics.show', $c) }}">
                    <img src="{{ $c->thumb }}" alt="{{ $c->title }}">
                </a>
                <a style="display: block;" href="{{ route('comics.edit', $c) }}">Modifica</a>
                <form action="{{ route('comics.destroy', $c) }}" method="POST">
                    @csrf
                    @method('DELETE')
    
                    <input type="submit" value="Elimina">
                </form>
            </div>
            @endforeach
        </ul>
    </div>
</section>

@endsection