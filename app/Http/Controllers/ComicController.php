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
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        /*
            $table->string('title', 70);
            $table->text('description');
            $table->string('thumb', 300);
            $table->float('price', 5, 2);
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 50);
        */
        //Validation
        $request->validate([
            'title' => 'required|unique:comics|max:70',
            'thumb' => 'required|URL|max:300',
            'price' => 'required|numeric',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:50'
        ], [
            'unique' => 'Il campo :key contiene un valore che già esiste nel database!',
            'required' => 'Il campo :key e\' obbligatorio!',
            'string' => 'In :key e\' richiesta una stringa!',
            'date' => 'In :key e\' richiesto di inserire una data valida!',
            'numeric' => 'In :key e\' richiesto di inserire un numero!',
            'max' => 'In :key e\' richiesto di inserire in :key massimo :max caratteri!',
            'URL' => 'Il campo :key deve contenere un URL valido!',
        ] );
        // End Validation
        $data=$request->all();
        $newComic= new Comic();
        
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
                //Validation
                $request->validate([
                    'title' => 'required|unique:comics|max:70',
                    'thumb' => 'required|URL|max:300',
                    'price' => 'required|numeric',
                    'series' => 'required|max:100',
                    'sale_date' => 'required|date',
                    'type' => 'required|max:50'
                ], [
                    'unique' => 'Il campo :key contiene un valore che già esiste nel database!',
                    'required' => 'Il campo :key e\' obbligatorio!',
                    'string' => 'In :key e\' richiesta una stringa!',
                    'date' => 'In :key e\' richiesto di inserire una data valida!',
                    'numeric' => 'In :key e\' richiesto di inserire un numero!',
                    'max' => 'In :key e\' richiesto di inserire in :key massimo :max caratteri!',
                    'URL' => 'Il campo :key deve contenere un URL valido!',
                ] );
                // End Validation
        $data=$request->all();
        
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    public function confirmDelete(Comic $comic){
        return view('comics.confirmDelete', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('comics.index');

    }
}
