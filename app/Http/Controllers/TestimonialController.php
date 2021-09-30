<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all(); 
        return view('backoffice.testimonialSection.all', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.testimonialSection.create');
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
            'text'=>['required'],
            'photo'=>['required'],
            'name'=>['required'],
            'job'=>['required']
        ]);
        $testimonial =  new Testimonial();
        $testimonial->text = $request->text;
        $testimonial->photo->file('photo')->hashName();
        $request->file("photo")->storePublicly("img", "public");
        $testimonial->name = $request->name;
        $testimonial->job = $request->job;
        $testimonial->save();
        return redirect()->route("testimonials.index");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('backoffice.testimonialSection.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backoffice.testimonialSection.show', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        request()->validate([
            'text'=>['required'],
            'name'=>['required'],
            'job'=>['required']
        ]);

        if ($request->file('photo') !== null) {
            Storage::disk('photo')->delete('/img' . $testimonial->photo);
            $testimonial->photo= $request->file("photo")->hashName();
            $request->file("photo")->storePublicly("img", "public");
        }
        $request->file("photo")->storePublicly("img", "public");
        $testimonial->name = $request->name;
        $testimonial->job = $request->job;
        $testimonial->save();
        return redirect()->route("testimonials.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk('photo')->delete('/img' . $testimonial->photo);
        $testimonial->delete();
        return redirect()->route('testimonials.index');
    }
}
