@extends('template.mainB')

@section('content')
    
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$about->id}}</i></p>
    <p><b>Icône de l'élément : </b><i>{{$about2->icone}}</i></p>
    <p><b>Titre de l'élément : </b><i>{{$about2->title}}</i></p>
    <p><b>Description de l'élément : </b><i>{{$about2->descrption}}</i></p>
    </div>
</div>


@endsection