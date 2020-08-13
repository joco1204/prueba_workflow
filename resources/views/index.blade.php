@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
        	<div class="col-md-4 text-center">
        		<a href="{{ route('trabajadores') }}" class="btn btn-success btn-lg" style="width: 250px;">Trabajadores</a>
        	</div>
        	<div class="col-md-4 text-center">
        		<a href="{{ route('ordenes-de-trabajo') }}" class="btn btn-primary btn-lg" style="width: 250px;">Ordenes de trabajo</a>
        	</div>
        	<div class="col-md-4 text-center">
        		<a href="/" class="btn btn-danger btn-lg" style="width: 250px;">Informe</a>
        	</div>
        </div>
    </div>
@endsection