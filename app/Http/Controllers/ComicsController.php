<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::All();
        $sections = config("comics.sections");
        $footcard = config('comics.foothead');
        return view("comics.index", compact("comics", "sections", "footcard"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = config("comics.sections");
        $footcard = config('comics.foothead');
        return view("comics.create", compact("sections", "footcard"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_comic = new Comic();
        // PRIMO METODO
        // $new_comic->title = $form_data['title'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->type = $form_data['type'];

        // SECONDO METODO, ABBREVIATO
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $sections = config("comics.sections");
        $footcard = config('comics.foothead');

        return view("comics.show", compact("comic", "sections", "footcard"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $sections = config("comics.sections");
        $footcard = config('comics.foothead');
        return view("comics.edit", compact("comic", "sections",  "footcard"));
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
        // VALIDATION
        // $request->validate([
        //     "title" => "required|max:100",
        //     "price" => "required|max:16",
        //     "series" => "required|max:50",
        //     "sale_date" => "required|date_format:Y-m-d",
        //     "type" => "required|max:30",
        // ]);

        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
