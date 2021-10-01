@extends('template.mainB')

@section('content')
    
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$hero->id}}</i></p>
    <p><b>Titre de l'élément : </b><i>{{$hero->title}}</i></p>
    <p><b>Description de l'élément : </b><i>{{$hero->description}}</i></p>
    <p><b>Bouton de l'élément : </b><i>{{$hero->bouton}}</i></p>
    <p><b>Url de l'élément : </b><i>{{$hero->url}}</i></p>
    </div>
</div>


@endsection