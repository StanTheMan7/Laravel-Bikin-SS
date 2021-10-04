@extends('template.mainB')

@section('content')
    
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b>{{$team->id}}</p>
    <p><b>Url de l'élément : </b>{{$team->url}}</p>
    <p><b>Name de l'élément : </b>{{$team->name}}</p>
    <p><b>job de l'élément : </b>{{$team->job}}</p>
    </div>
</div>


@endsection