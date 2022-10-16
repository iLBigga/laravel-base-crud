@extends('layouts.app')

@section('content')
    
    <section>
        <div class="container">
            <ul>
                @foreach ($comics as $c)
                <h2>{{ $c->title }}</h2>
                <a href="{{ route('comics.show', $c) }}">
                    <img src="{{ $c->thumb }}" alt="{{ $c->title }}">
                </a>
                @endforeach
            </ul>
        </div>
    </section>

@endsection