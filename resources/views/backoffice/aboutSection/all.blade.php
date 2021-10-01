@extends('template.mainB')

@section('content')
<div style="display: flex; justify-content:center;">
    <div class="card w-50">
        <p><b>Titre de l'about 1 = </b>{{$abouts[0]->title}}</p>
        <p><b>Description de l'about 1 = </b>{{$abouts[0]->description}}</p>
        <p><b>Icone de l'about 1 = </b>{{$abouts[0]->bouton}}</p>
        <div style="display: flex; justify-content:center;">
            <a class="btn btn-success" href="{{route("about.edit", $abouts[0]->id)}}">Edit</a>
            <a class="btn btn-warning" href="{{route("about.show", $abouts[0]->id)}}">Show</a>
        </div>
       
    </div>
</div>
@endsection