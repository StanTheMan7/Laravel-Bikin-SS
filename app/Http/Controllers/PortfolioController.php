<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('backoffice.portfolio.all', compact('portfolios'));
    }
    public function create()
    {
        return view('backoffice.portfolio.create');
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
        ]);
        $portfolio = new Portfolio();
        $portfolio->url= $request->file("url")->hashName();
        $request->file("url")->storePublicly("img", "public");
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->save();
        return redirect()->route("portfolio.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('backoffice.portfolio.show',compact('portfolio') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('backoffice.portfolio.edit',compact('portfolio') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        request()->validate([
            "title"=>["required"],
            "description"=>["required"]
        ]);
        if($request->file('url') !== null){
            Storage::disk('public')->delete('/img' . $portfolio->url);
            $portfolio->url= $request->file("url")->hashName();
            $request->file("url")->storePublicly("img", "public");
        }
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;

        $portfolio->save();
        return redirect()->route("portfolio.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk('public')->delete('/img' . $portfolio->url);
        $portfolio->delete();
        return redirect()->route('portfolio.index');
    }
}


