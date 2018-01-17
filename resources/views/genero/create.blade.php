@extends('layouts.app1')
@section('content')


<!--{{$Clients}} mostrar todos los datos--> 
{!!Form::open()!!}


@include('genero.form.genero')
{!!Form::Close()!!}
@endsection
