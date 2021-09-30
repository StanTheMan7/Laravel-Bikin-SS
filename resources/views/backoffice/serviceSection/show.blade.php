@extends('template.mainB')

@section('content')
    
<div class="card">
    <p>ID de l'élément : {{$service->id}}</p>
    <p>Titre de l'élément : {{$service->title}}</p>
    <p>Texte de l'élément : {{$service->text}}</p>
    <p>Icône de l'élément : {{$service->icon}}</p>
</div>


@endsection