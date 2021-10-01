@extends('template.mainB')

@section('content')
    
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$portfolio->id}}</i></p>
    <p><b>Url de l'élément : </b><i>{{$portfolio->url}}</i></p>
    <p><b>Title de l'élément : </b><i>{{$portfolio->title}}</i></p>
    <p><b>Description de l'élément : </b><i>{{$portfolio->description}}</i></p>
    </div>
</div>


@endsection