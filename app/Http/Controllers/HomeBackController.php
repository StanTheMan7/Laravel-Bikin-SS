<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\About2;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Team;
use App\Models\TitleDescription;
use Illuminate\Http\Request;

class HomeBackController extends Controller
{
    public function index() {
        
        $titleDescriptions = TitleDescription::all();

        $heros = Hero::all();

        $abouts = About::all();

        $about2s = About2::all();

        $features = Feature::all();

        $teams = Team::all();
        return view('pages.homeBack',compact('titleDescriptions', 'heros', 'abouts', 'about2s', 'features', 'teams'));
    }
}
