@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/categories/'.$category->id, 'method' => 'PATCH', 'class'=>'inline-block','files'=>true]) !!}

	Nombre de la categoria:
	{{Form::text('name',$category->name,['class'=>'form-control'])  }}

	Descripción del producto:
	{{Form::textarea('description',$category->description,['class'=>'form-control'])  }}

	<br><input type="submit" class="btn btn-success" value="Guardar">
	{!! Form::close() !!}
@endsection 