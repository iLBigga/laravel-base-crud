<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comic);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:1000',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
        ]);
        
        $c = new Comic();
        $c = Comic::create($params);

        return redirect()->route('comics.show', $c);        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        // dd($comic);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        // dd($comic);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $comic = Comic::findOrFail($id);
        $params = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:1000',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
        ]);

        // dd($params);
        $comic->update($params);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        // dd($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
