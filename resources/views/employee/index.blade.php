@extends('layouts.app')

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12 text-center">
    			<h2>Listado de trabajadores</h2>
    		</div>
    	</div>
    	<br>
    	<div class="row justify-content-center">
    		<div class="col-lg-12 text-center">
    			<a href="" class="btn btn-primary">Nuevo Trabajador</a>
    		</div>
    	</div>
    	<br>
    	<div class="row justify-content-center">
    		<div class="col-lg-8">
    			<table class="table table-hover">
    				<thead>
    					<tr>
    						<th scope="col">id</th>
    						<th scope="col">Nombre</th>
    						<th scope="col">Identificación</th>
    						<th scope="col">Creación</th>
    						<th scope="col">Actualización</th>
    					</tr>
    				</thead>
    				<tbody>
    					
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
@endsection