@extends('template.mainB')

@section('content')
    
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$about->id}}</i></p>
    <p><b>Titre de l'élément : </b><i>{{$about->title}}</i></p>
    <p><b>Description de l'élément : </b><i>{{$about->description}}</i></p>
    <p><b>Bouton de l'élément : </b><i>{{$about->bouton}}</i></p>
    </div>
</div>


@endsection