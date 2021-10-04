<?php

namespace App\Http\Controllers;

use App\Models\TitleDescription;
use Illuminate\Http\Request;

class TitleDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titleDescription = TitleDescription::all();
        return view('backoffice.titleDescription.all', compact('titleDescription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TitleDescription  $titleDescription
     * @return \Illuminate\Http\Response
     */
    public function show(TitleDescription $titleDescription)
    {
        return view('backoffice.titleDescription.show', compact('titleDescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitleDescription  $titleDescription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ensiene methode 
        $titleDescription = TitleDescription::find($id);
        return view('backoffice.titleDescription.edit', compact('titleDescription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitleDescription  $titleDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitleDescription $titleDescription)
    {
        request()->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);

        $titleDescription->title = $request->title;
        $titleDescription->description = $request->description;
        $titleDescription->save();
        return redirect()->route('title.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitleDescription  $titleDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitleDescription $titleDescription)
    {
        $titleDescription->delete();
        return redirect()->route('title.index');
    }
}
