@extends('layouts.app')
@section('content')
<div class="container">
	@foreach($categories as $category)
	<div class="col-md-4">
		<h3>{{$category->name}}</h3>
		<p>{{$category->description}}</p>

		<!--{!! Form::open(['url' => '/shopping_carts/', 'method' => 'POST', 'class'=>'inline-block']) !!}-->
		<input type="hidden" name="category_id" value="{{$category->id}}">
		<input type="hidden" name="category_name" value="{{$category->name}}">
		<input type="hidden" name="category_description" value="{{$category->description}}">
		<!--<input type="number" name="qty">
		<input type="submit" class="col.xs-12 btn btn-success" name="" value="Agregar al carrito">-->
		<a onclick ="eliminarCategoria({{$category->id}})" class="btn btn-danger">Eliminar</a>
		<!--{!! Form::close() !!}-->
	</div>	
	@endforeach
	<div class="col-xs-12">
		{{$categories->links()}}
	</div>
</div>
@endsection