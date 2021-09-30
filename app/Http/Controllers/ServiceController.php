<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('backoffice.serviceSection.all', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('backoffice.serviceSection.create');
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
            "icon"=>["required"],
            "title"=>["required", "min:1", "max:500"],
            "text"=>["required"],
        ]);

            $service = new Service();
            $service->icon = $request->icon;
            $service->title = $request->title;
            $service->text = $request->text;
            $service->save();
        return redirect()->route("service.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return  view('backoffice.serviceSection.show', compact("service"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
<<<<<<< HEAD
        return view("backoffice.serviceSection.edit", compact("service"));
=======
        return  view('backoffice.serviceSection.show');
>>>>>>> 30484d53e27306de606e9733e8d93458f98393eb
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        request()->validate([
            "icon"=>["required"],
            "title"=>["required", "min:1", "max:500"],
            "text"=>["required"],
        ]);

            $service->icon = $request->icon;
            $service->title = $request->title;
            $service->text = $request->text;
            $service->save();
        return redirect()->route("service.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
<<<<<<< HEAD
        return redirect()->route('service.index');
        
=======
        return redirect()->route("service.index");
>>>>>>> 30484d53e27306de606e9733e8d93458f98393eb
    }
}
