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
    			<a href="{{ route('nuevo-trabajador') }}" class="btn btn-primary">Nuevo Trabajador</a>
    		</div>
    	</div>
    	<br>
    	<div class="row justify-content-center">
    		<div class="col-lg-12">
    			<table class="table table-hover">
    				<thead>
    					<tr>
    						<th scope="col">id</th>
    						<th scope="col">Nombre</th>
    						<th scope="col">Identificación</th>
    						<th scope="col">Creación</th>
    						<th scope="col">Actualización</th>
    						<th scope="col"></th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach ($trabajadores as $row)
    						<tr>
    							<td>{{$row->id}}</td>
    							<td>{{$row->name}}</td>
    							<td>{{$row->identification}}</td>
    							<td>{{$row->created_at}}</td>
    							<td>{{$row->updated_at}}</td>
    							<td>
    								<a href="{{ route('ver-trabajador/$row->id') }}" class="btn btn-success btn-sm">Ver</a>
    								<a href="{{ route('editar-trabajador/$row->id') }}" class="btn btn-warning btn-sm">Modificar</a>
    							</td>
    						</tr>
    					@endforeach
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
@endsection