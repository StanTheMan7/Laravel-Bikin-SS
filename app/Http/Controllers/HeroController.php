<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heros = Hero::all();
        return view('backoffice.heroSection.all', compact('heros'));
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
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('backoffice.heroSection.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('backoffice.heroSection.show', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {

        request()->validate([
            "tilte"=>["required"],
            "description"=>["required", "min:1", "max:500"],
            "bouton"=>["required"],
            "url"=>["required"]
        ]);

        if ($request->file('img') !== null) {
            Storage::disk("public")->delete("img/" . $hero->url);
            $hero->url= $request->file("url")->hashName();
            $request->file("url")->storePublicly("img", "public");
        }

        $hero->title = $request->title;
        $hero->description = $request->description;
        $hero->bouton = $request->bouton;
        $hero->save();
        return redirect()->route("heros.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        Storage::disk("public")->delete("img/" . $hero->url);
        $hero->delete();
        return redirect()->route("heros.index")->with('message', 'IT WORKS!');
    }
}
