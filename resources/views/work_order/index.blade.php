@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
    		<div class="col-lg-12 text-center">
    			<h2>Ordenes de Trabajo</h2>
    		</div>
    	</div>
    	<br>
    	<div class="row justify-content-center">
    		<div class="col-lg-6 text-center">
    			<a href="" class="btn btn-primary">Nueva OT</a>
    		</div>
    		<div class="col-lg-6 text-center">
    			<a href="" class="btn btn-success">Carga Masiva</a>
    		</div>
    	</div>
    	<br>
    	<div class="row justify-content-center">
    		<div class="col-lg-12">
    			<table class="table table-hover">
    				<thead>
    					<tr>
    						<th scope="col">id</th>
    						<th scope="col">Número de orden</th>
    						<th scope="col">Descripción</th>
    						<th scope="col">Asignado a</th>
    						<th scope="col">Precio</th>
    						<th scope="col">Estado</th>
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