@extends('layouts.app1')
@section('content')


<!--{{$Clients}} mostrar todos los datos--> 

<table border="1">
	<tbody>
		<tr>
			<td>ID</td>
			<td>NOMBRE</td>
			<td>redireccionamiento</td>
			<td>clave</td>
		</tr>
		@foreach($Clients as $client)
		<tr>
			<td>{{$client->id}}</td>
			<td>{{$client->name}}</td>
			<td>{{$client->redirect}}</td>
			<td>{{$client->secret}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection