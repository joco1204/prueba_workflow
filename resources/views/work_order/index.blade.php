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
    			<a href="{{ route('nueva-orden-de-trabajo') }}" class="btn btn-primary">Nueva OT</a>
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
    						<th scope="col"></th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach ($orden_trabajo as $row)
    						<tr>
    							<td>{{$row->id}}</td>
    							<td>{{$row->wo_number}}</td>
    							<td>{{$row->wo_description}}</td>
    							<td>{{$row->employee}}</td>
    							<td>{{$row->price}}</td>
    							<td>{{$row->status}}</td>
    							<td>{{$row->created_at}}</td>
    							<td>{{$row->updated_at}}</td>
    							<td>
    								<a href="{{route('ver-orden-de-trabajo', $row->id)}}" class="btn btn-success btn-sm">Ver</a>
    								<a href="{{route('editar-orden-de-trabajo', $row->id)}}" class="btn btn-warning btn-sm">Modificar</a>
    							</td>
    						</tr>
    					@endforeach
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
@endsection