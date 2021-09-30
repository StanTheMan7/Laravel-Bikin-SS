@extends('template.mainB')

@section('content')
<div style="display: flex; justify-content:center;">
    <div class="card w-50">
        <p><b>Titre de l'about 1 = </b>{{$abouts[0]->title}}</p>
        <p><b>Description de l'about 1 =</b>{{$abouts[0]->description}}</p>
        <p>{{$abouts[0]->bouton}}</p>
    </div>
</div>
@endsection