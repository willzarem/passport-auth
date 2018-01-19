@extends('layouts.app1')
@section('content')
<div Class="panel-body">

	<h2 align="center"> GENERAR TOKEN A CLIENTES</h2>



	<form    action="{{url('/oauth/personal-access-tokens')}}" method="POST">
		<!--<input type="label" name="name" class="control-label" placeholder="nombre"/>
		<input type="submit"  class="fa fa-plus" value="crear" />-->


		

			<div Class="form-group">
				<label for="name" class="control-label">NOMBRE DE CLIENTE</label>
	       		<input type="text" name="name" class="form-control" placeholder="ingrese nombre">
             	
				{{ csrf_field() }}
			</div>

<div Class="form-group">
			
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus"> </i> GENERAR TOKEN
				</button>
	        
	    </div>

	</form>
				
		
</div>

@endsection