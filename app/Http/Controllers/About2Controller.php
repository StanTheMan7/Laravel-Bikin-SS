<?php

namespace App\Http\Controllers;

use App\Models\About2;
use Illuminate\Http\Request;

class About2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about2s = About2::all();
        return view('backoffice.about2Section.all', compact('about2s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.about2Section.create');   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'icone' => ['required'],
            'title' => ['required'],
            'description' => ['required']
        ]);
        $about2 = new About2;
        $about2->icone = $request->icone;
        $about2->title = $request->title;
        $about2->description = $request->description ;
        $about2->save();
        return redirect()->route("about2s.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About2  $about2
     * @return \Illuminate\Http\Response
     */
    public function show(About2 $about2)
    {
        return view('backoffice.about2Section.show', compact('about2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About2  $about2
     * @return \Illuminate\Http\Response
     */
    public function edit(About2 $about2)
    {
        $this->authorize('about2-edit', $about2);
        return view('backoffice.about2Section.edit', compact('about2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About2  $about2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About2 $about2)
    {
        request()->validate([
            'icone' => ['required'],
            'title' => ['required'],
            'description' => ['required']
        ]); 

        $about2->icone = $request->icone;
        $about2->title = $request->title;
        $about2->description = $request->description;
        $about2->save();
        return redirect()->route('about2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About2  $about2
     * @return \Illuminate\Http\Response
     */
    public function destroy(About2 $about2)
    {
        $about2->delete();
        return redirect()->route("about2.index")->with('message', 'IT WORKS!');

    }
}
