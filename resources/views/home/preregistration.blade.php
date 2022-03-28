@extends('layouts.logged')
@section('content')
    <center>
        <form action="{{route('student.prereg.modify')}}" method="post">
        {{@csrf_field()}}
        @foreach($courses as $c)
            <input type="ckeckbox" name="courses[]" value={{$c->id}} @if($c->enrolled) checked @endif>{{$c->name}} <br>
        @endforeach
        <input type="button" value="Modify" class="btn btn-outline-success">
        </form>
    </center>
@endsection