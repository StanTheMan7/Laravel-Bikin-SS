<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\About2;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\TitleDescription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $titleDescriptions = TitleDescription::all();
        $heros = Hero::all();
        $contact = Contact::all();
        $abouts = About::first();
        $portfolios = Portfolio::all();
        $about2s = About2::all();

        $features = Feature::all();

        $teams = Team::paginate(4);

        $testimonials = Testimonial::all();
        
        $services = Service::all();
        return view('pages.homeUI',compact('portfolios', 'contact', 'testimonials','services','titleDescriptions', 'heros', 'abouts', 'about2s', 'features', 'teams'));
    }
}
