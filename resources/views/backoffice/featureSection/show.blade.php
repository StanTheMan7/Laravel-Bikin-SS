@extends('template.mainB')

@section('content')

<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$feature->id}}</i></p>
    <p><b>Titre de l'élément : </b><i>{{$feature->title}}</i></p>
    <p><b>Description de l'élément : </b><i>{{$feature->description}}</i></p>
    <p><b>P1 de l'élément : </b><i>{{$feature->p1}}</i></p>
    <p><b>P2 de l'élément : </b><i>{{$feature->p2}}</i></p>
    <p><b>P3 de l'élément : </b><i>{{$feature->p3}}</i></p>
    <p><b>image de l'élément : </b><i><img class="w-50" src="{{asset("img/".$feature->url)}}" alt="" srcset=""></i></p>

    </div>
</div>



@endsection