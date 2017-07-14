@extends('layouts.app')
@section('content')
<div class="container">
	
	<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Carrito de compras</h4>
        </div>
        <div class="modal-body">
        	<table style="width: 100%"> 
		    	<tr>
				<td>Producto: </td> 
				<td>Precio</td> 
				<td>Cantidad:</td>
				</tr>
				@foreach($shopping_cart as $product)
				<tr>
					<td>{{$product->name}}</td>
					<td>${{$product->price}} </td>
					<td>{{$product->qty}}</td>
				</tr>
				<br>
				
				@endforeach
			</table>
			Subtotal: {{$subtotal}}
			<br>
			Total a pagar: {{$total+($total*.10)}}
		    <div class="col-xs-12">
		    
		    </div>
		    <div class="col-xs-12">
			</div>

        </div>
        <div class="modal-footer">
        {!! Form::open(['url' => '/orders/', 'method' => 'POST', 'class'=>'inline-block']) !!}
        <input type="submit" class="btn btn-success" value="Comprar">
		{!! Form::close() !!}
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
	@foreach($products as $product)
	<div class="col-md-4">
		<img class="col-xs-12" height="300px"  src="/images/products/{{$product->image}}" alt="img-responsive" />;
		<h3>{{$product->name}}</h3>
		<h4>{{$product->price}}</h4>
		<p>{{$product->description}}</p>

		{!! Form::open(['url' => '/shopping_carts/', 'method' => 'POST', 'class'=>'inline-block']) !!}
		<input type="hidden" name="product_id" value="{{$product->id}}">
		<input type="hidden" name="product_name" value="{{$product->name}}">
		<input type="hidden" name="product_price" value="{{$product->price}}">
		<input type="hidden" name="product_description" value="{{$product->description}}">
		<label>Cantidad:</label>
		<input type="number" min="1" name="qty" required>
		<input type="submit" class="col.xs-12 btn btn-success" name="" value="Agregar al carrito">
		@if (Auth::user()->admin())
		<a onclick ="eliminarProducto({{$product->id}})" class="btn btn-danger">Eliminar</a>

		<!--<a href="{{url('/products/$product->id/edit')}}" class="btn btn-warning">Editar</a>-->
		@endif
		{!! Form::close() !!}
		
	</div>	

	@endforeach
	<!-- Trigger the modal with a button -->
	<div class="conteiner">
		<div class="col-md-4">
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Ver Carrito</button>
		</div>
  	</div>
	<div clas
	s="col-xs-12">
		{{$products->links()}}
	</div>
	
</div>
@endsection