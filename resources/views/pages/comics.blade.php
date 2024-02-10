@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            @foreach ($comics as $comic)
            <article>
                <div class="card-logo">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <p>
                    {{$comic['series']}}
                </p>
            </article>
            @endforeach
        </div>

    </main>
@endsection