@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
                <article>
                    <div class="card-logo">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <p>
                        {{$comic['series']}}
                    </p>
                </article>
        </div>

    </main>
@endsection