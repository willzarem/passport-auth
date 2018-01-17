@extends('layouts.app1')
@section('content')
	<!--{{$User1}}-->

<table border="1">
	<tbody>
		<tr>
			<td>id</td>
			<td>NOMBRE</td>
			<td>email</td>
			<td>clave</td>
		</tr>
		@foreach($User1 as $User1)
		<tr>
			<td>{{$User1->id}}</td>
			<td>{{$User1->name}}</td>
			<td>{{$User1->email}}</td>
			<td>{{$User1->password}}</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection