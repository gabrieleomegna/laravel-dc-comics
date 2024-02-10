@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            @forelse ( $comics as $comic )
                <article>
                    <div class="card-logo">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <p>
                        {{$comic['series']}}
                    </p>
                </article>    
            @empty
                <h4>There are no comics...</h4>
            @endforelse 
        </div>

    </main>
@endsection