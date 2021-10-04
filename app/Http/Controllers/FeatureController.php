<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view('backoffice.featureSection.all', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.featureSection.create');
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
            "url"=>["required"],
            "title"=>["required"],
            "description"=>["required"],
            "p1"=>["required"],
            "p2"=>["required"],
            "p3"=>["required"]
        ]);
        $feature = new Feature();
        $feature->url= $request->file("url")->hashName();
        $request->file("url")->storePublicly("img", "public");
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->p1 = $request->p1;
        $feature->p2 = $request->p2;
        $feature->p3 = $request->p3;
        $feature->save();
        return redirect()->route("feature.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        return view('backoffice.featureSection.show',compact('feature') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('backoffice.featureSection.edit',compact('feature') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        request()->validate([
            "title"=>["required"],
            "description"=>["required"],
            "p1"=>["required"],
            "p2"=>["required"],
            "p3"=>["required"]
        ]);
        if($request->file('url') !== null){
            Storage::disk('public')->delete('/img' . $feature->url);
            $feature->url= $request->file("url")->hashName();
            $request->file("url")->storePublicly("img", "public");
        }
        
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->p1 = $request->p1;
        $feature->p2 = $request->p2;
        $feature->p3 = $request->p3;
        $feature->save();
        return redirect()->route("feature.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        Storage::disk('public')->delete('/img' . $feature->url);
        $feature->delete();
        return redirect()->route('feature.index');
    }
}
