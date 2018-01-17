@extends('layouts.app1')
@section('content')
	<form action="{{url('/oauth/clients')}}" method="POST">
<p align=center>
nombre: <input type="text" name="name" />
</p>
<p align=center>
Host Permitido: <input type="text" name="redirect" />
</p>
<p align=center>
<input type="submit" name="send" value="Enviar" />
</p>

{{ csrf_field() }}
	</form>
<!--{{$Clients}}-->
<h2> personal acceso</h2>
	<form action="{{url('/oauth/personal-access-tokens')}}" method="POST">
		<input type="text" name="name" placeholder="nombre"/>
		<input type="submit" value="crear" />
		{{ csrf_field() }}
		</form>


@endsection