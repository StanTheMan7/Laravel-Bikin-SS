@extends('template.mainB')

@section('content')
    
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$service->id}}</i></p>
    <p><b>Titre de l'élément : </b><i>{{$service->title}}</i></p>
    <p><b>Texte de l'élément : </b><i>{{$service->text}}</i></p>
    <p><b>Icône de l'élément : </b><i>{{$service->icon}}</i></p>
    </div>
</div>


@endsection