@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    Sesión Iniciada
                     @if(Auth::user()->admin())
                    <li>
                        <a href="{{url('/products/create')}}">Crear producto</a>
                    </li>

                    <li>
                        <a href="{{url('/categories/create')}}">Crear categoria</a>
                    </li>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
