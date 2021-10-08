<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all()->inRandomOrder('1','2','3','4')->paginate(4);
        return view('backoffice.teamSection.all', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.teamSection.create');
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
            "name"=>["required", "min:1", "max:500"],
            "job"=>["required"],
        ]);

            $team = new Team();
            $team->url= $request->file("url")->hashName();
            $request->file("url")->storePublicly("img", "public");
            $team->name = $request->name;
            $team->job = $request->job;
            $team->save();
        return redirect()->route("team.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('backoffice.teamSection.show', compact('team'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('backoffice.teamSection.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        request()->validate([
            "name"=>["required", "min:1", "max:500"],
            "job"=>["required"],
        ]);
            if($request->file('url') !== null){
                Storage::disk('public')->delete('/img' . $team->url);
                $team->url= $request->file("url")->hashName();
                $request->file("url")->storePublicly("img", "public");
            }
            $team->name = $request->name;
            $team->job = $request->job;
            $team->save();
        return redirect()->route("team.index");
    }
    //

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Storage::disk('public')->delete('/img' . $team->url);
        $team->delete();
        return redirect()->route('team.index');
    }
}
