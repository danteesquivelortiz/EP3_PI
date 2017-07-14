@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/orderproducts/', 'method' => 'POST', 'class'=>'inline-block']) !!}
		<div class="container">
			<input type="hidden" name="order_id" value="{{$order->id}}">

        	<input type="submit" class="btn btn-success" value="Confirmar compra">
        	
		</div>
	{!! Form::close() !!}
          
@endsection