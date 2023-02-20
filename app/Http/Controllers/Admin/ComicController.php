<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comic = new Comic();
        return view('admin.comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|min:2|max:50',
            'description' => 'required|min:10',
            'thumb' => 'required|string|max:255',
            'price' => 'required|decimal:2|max:9999.99',
            'series' => 'required|string|max:50|min:2',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:20|min:2',

        ]);

        $newComics = new Comic();
        $newComics->fill($data);
        $newComics->save();

        return redirect()->route('admin.comics.show', $newComics->id)->with('message', "$newComics->title has been created")->with('alert-type', 'primary');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'title' => 'required|string|min:2|max:50',
            'description' => 'required|min:10',
            'thumb' => 'required|string|max:255',
            'price' => 'required|decimal:2',
            'series' => 'required|string|max:50|min:2',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:20|min:2',

        ]);

        $updatedComic = Comic::findOrFail($id);
        $updatedComic->update($data);

        return redirect()->route('admin.comics.show', $updatedComic->id)->with('message', "Successfully modified")->with('alert-type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('admin.comics.index')->with('message', "$comic->title has been deleted")->with('alert-type', 'danger');
    }
}
