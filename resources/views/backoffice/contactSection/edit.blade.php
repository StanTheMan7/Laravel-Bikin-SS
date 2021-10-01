@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("contact.update", $contact->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Address :</label>
    <input type="text" name="address" value="{{$contact->address}}">
    <br>
    <label for="">Mail1 :</label>
    <input type="text" name="mail1" value="{{$contact->mail1}}">
    <br>
    <label for="">Mail2 :</label>
    <input type="text" name="mail2" value="{{$contact->mail2}}">
    <br>
    <label for="">Num1 :</label>
    <input type="text" name="num1" value="{{$contact->num1}}">
    <br>
    <label for="">Num2 :</label>
    <input type="text" name="num2" value="{{$contact->num2}}">
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection