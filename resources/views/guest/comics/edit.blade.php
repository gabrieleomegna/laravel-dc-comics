@extends('layouts.app')

@section('main-content')
    <main>
        <section class="form-container container">
            <div class="row justify-content-center">
                <div class="col-6 text-white">
                    <h1 class="title mb-4 pt-3">
                        Modifica nuovo fumetto:
                    </h1>
                    <form action="{{route('guest.comics.update', $comic->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Titolo del fumetto:
                            </label>
                            <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}">
                        </div>

                        <div class="mb-3">
                            <label for="type"class="form-label">Tipologia:</label>
                            <input type="text" name="type" id="type" class="form-control" value="{{$comic->type}}">
                        </div>

                        <div class="mb-3">
                            <label for="series"class="form-label">Serie del fumetto:</label>
                            <input type="text" name="series" id="series" class="form-control" value="{{$comic->series}}">
                        </div>

                        <div class="mb-3">
                            <label for="sale_date"class="form-label">Data di uscita:</label>
                            <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{$comic->sale_date}}">
                        </div>

                        <div class="mb-3">
                            <label for="thumb"class="form-label">Url immagine</label>
                            <input type="text" name="thumb" id="thumb" class="form-control" value="{{$comic->thumb}}">
                        </div>

                        <div class="mb-3">
                            <label for="description"class="form-label">Descrizione:</label>
                            <textarea type="text" name="description" id="description" class="form-control"
                            rows="4">{{$comic->description}}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price"class="form-label">Prezzo:</label>
                            <textarea type="text" name="price" id="price" class="form-control"
                            rows="4">{{$comic->price}}
                            </textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Modifica nuovo tipo di pasta</button>
                        <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection