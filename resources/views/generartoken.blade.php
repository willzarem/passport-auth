@extends('layouts.app1')
@section('content')
	
<!--{{$Clients}}-->
<h2> personal acceso</h2>
	<form action="{{url('/oauth/personal-access-tokens')}}" method="POST">
		<input type="text" name="name" placeholder="nombre"/>
		<input type="submit" value="crear" />
		{{ csrf_field() }}
		</form>


@endsection