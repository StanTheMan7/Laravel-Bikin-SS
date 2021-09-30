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
<<<<<<< HEAD
        return view('backoffice.serviceSection.all', compact('services'));
=======
        return view("backoffice.serviceSection.all", compact("services"));
>>>>>>> f223af4b18f91f64d6a1cc146d434d6305c1753d
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return  view('backoffice.serviceSection.create');
=======
        return view("backoffice.serviceSection.create");
>>>>>>> f223af4b18f91f64d6a1cc146d434d6305c1753d
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        
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
=======
        $service = new Service();
        $service->title = $request->title;
        $service->text = $request->text;
        $service->icon = $request->icon;
        $service->save();
>>>>>>> f223af4b18f91f64d6a1cc146d434d6305c1753d
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
        return  view('backoffice.serviceSection.show');
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
        return  view('backoffice.serviceSection.show');
=======
        return view("backoffice.serviceSection.edit", compact("service"));
>>>>>>> f223af4b18f91f64d6a1cc146d434d6305c1753d
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
<<<<<<< HEAD
        request()->validate([
            "icon"=>["required"],
            "title"=>["required", "min:1", "max:500"],
            "text"=>["required"],
        ]);

            $service->icon = $request->icon;
            $service->title = $request->title;
            $service->text = $request->text;
            $service->save();
=======
        $service->title = $request->title;
        $service->text = $request->text;        
        $service->icon = $request->icon;
        $service->save();
>>>>>>> f223af4b18f91f64d6a1cc146d434d6305c1753d
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
        return redirect()->route('service.index');
    }
}
