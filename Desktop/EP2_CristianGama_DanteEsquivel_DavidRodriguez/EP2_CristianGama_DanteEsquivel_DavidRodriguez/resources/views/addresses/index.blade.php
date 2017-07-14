@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/addresses/', 'method' => 'POST', 'class'=>'inline-block']) !!}
	
	Calle:
	{{Form::text('street','',['class'=>'form-control'])  }}

	Codigo Postal:
	{{Form::textarea('postcode','',['class'=>'form-control'])  }}

	Colonia:
	{{Form::text('neighborhood','',['class'=>'form-control'])  }}

	Municipio:
	{{Form::text('city','',['class'=>'form-control'])  }}
	<input type="submit" class="col.xs-12 btn btn-success" name="" value="Guardar">
	{!! Form::close() !!}
@endsection