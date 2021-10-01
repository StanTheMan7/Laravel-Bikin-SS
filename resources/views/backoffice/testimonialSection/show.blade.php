@extends('template.mainB')

@section('content')
  
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$testimonial->id}}</i></p>
    <p><b>Name de l'élément : </b><i>{{$testimonial->name}}</i></p>
    <p><b>Texte de l'élément : </b><i>{{$testimonial->text}}</i></p>
    <p><b>Job de l'élément : </b><i>{{$testimonial->job}}</i></p>
    <p><b>image de l'élément : </b><i><img class="w-25" src="{{asset("img/".$testimonial->photo)}}" alt="" srcset=""></i></p>

    </div>
</div>


@endsection