@extends('layouts.app')

@section('main-content')
    <main>
        <section class="products" id="comics">
            <div class="container">
                <div class="row">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3 justify-content-center">
                        <div class="col">
                            <div class="card my-bg-color text-white">
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} picture">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <a href="{{route('guest.comics.edit', $comic->id)}}">
                                            <button class="btn btn-primary">
                                                Edit comic
                                            </button>
                                        </a>
                                    </div>
                                    <div class="mb-5">
                                        <h2>Title:</h2>
                                        <p class="text-uppercase">{{ $comic->title }}</p>
                                    </div>
                                    <div class="mb-5">
                                        <h4>Type:</h4>
                                        <p >{{ $comic->type }}</p>
                                    </div>
                                    <div class="mb-5">
                                        <h4>Series:</h4>
                                        <p >{{ $comic->series }}</p>
                                    </div>
                                    <div class="mb-5">
                                        <h4>Description:</h4>
                                        <p >{{ $comic->description }}</p>
                                    </div>
                                    <div class="mb-5">
                                        <h4>Sale date:</h4>
                                        <p >{{ $comic->sale_date }}</p>
                                    </div>
                                    <div class="mb-5">
                                        <h4>Price:</h4>
                                        <p >{{ $comic->price }}</p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection