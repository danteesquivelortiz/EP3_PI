@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/products/', 'method' => 'POST', 'class'=>'inline-block']) !!}
    
    
	Nombre del producto:
	{{Form::text('name','',['class'=>'form-control'])  }}

	Descripción del producto:
	{{Form::textarea('description','',['class'=>'form-control'])  }}

	Precio del producto:
	{{Form::text('price','',['class'=>'form-control'])  }}

	Categoría del producto:
	{{Form::select('category_id',$categories,['class'=>'form-control'])  }}
	<br><input type="submit" class="btn btn-success" value="Guardar">
	{!! Form::close() !!}
@endsection