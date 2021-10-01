@extends('template.mainB')

@section('content')
    
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$titleDescription->id}}</i></p>
    <p><b>Titre de l'élément : </b><i>{{$titleDescription->title}}</i></p>
    <p><b>Description de l'élément : </b><i>{{$titleDescription->description}}</i></p>
    </div>
</div>


@endsection