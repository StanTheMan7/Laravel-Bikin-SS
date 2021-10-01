@extends('template.mainB')

@section('content')
    
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$contact->id}}</i></p>
    <p><b>Address de l'élément : </b><i>{{$contact->address}}</i></p>
    <p><b>Mail1 de l'élément : </b><i>{{$contact->mail1}}</i></p>
    <p><b>Mail2 de l'élément : </b><i>{{$contact->mail2}}</i></p>
    <p><b>Num1 de l'élément : </b><i>{{$contact->num1}}</i></p>
    <p><b>Num2 de l'élément : </b><i>{{$contact->num2}}</i></p>

    </div>
</div>


@endsection