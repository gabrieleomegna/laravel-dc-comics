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
    public function show(string $id){
        $comic = Comic::findOrFail($id);
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
        $formData = $request->all();
        // ? ['titolo'] => 'Spaghetto alla chitarra'
        // ? ['cottura'] => '10 minuti'

        $newComic = new Comic();
        $newComic->title = $formData['title'];
        $newComic->type = $formData['type'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->thumb = $formData['thumb'];
        $newComic->description = $formData['description'];
        $newComic->price = $formData['price'];
        $newComic->artists = '';
        $newComic->writers = '';
        $newComic->save();

        return redirect()->route('guest.comics.show', $newComic->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
