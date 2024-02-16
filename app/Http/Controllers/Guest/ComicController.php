<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $comics = Comic::all();
        return view('guest.comics.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic){
        return view('guest.comics.show', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:comics', 'min:4', 'max:80'],
        ]);
        // $newComic = new Comic();
        // $newComic->title = $formData['title'];
        // $newComic->type = $formData['type'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->description = $formData['description'];
        // $newComic->price = $formData['price'];
        // $newComic->artists = '';
        // $newComic->writers = '';
        // $newComic->save();
        $formData = $request->all();

        $newComic= Comic::create($formData);

        return redirect()->route('guest.comics.show', $newComic->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        // $comic= Comic::findOrFail($id);
         // dd($data);
        // $newComic= new Comic();
        // $newComic->title = $data['title'];
        // $newComic->type = $data['type'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->description = $data['description'];
        // $newComic->price = $data['price'];
        // $newComic->artists = '';
        // $newComic->writers = '';
        // $newComic->update();
        $comic->update($data);

        return redirect()->route('guest.comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
