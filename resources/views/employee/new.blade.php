@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
    		<div class="col-lg-12 text-center">
    			<h2>Nuevo Trabajador</h2>
    		</div>
    	</div>
    	{{ Form::open(array('method' => 'post', 'action'=> 'EmployeeController@store', 'id' => 'nuevo-trabajador', 'autocomplete' => 'off' )) }}
    		<div class="row">
    			<div class="col-lg-12">
					{{ Form::label('nombre_trabajador', 'Nombre trabajador', array('class' => '')) }}
					{{ Form::text('nombre_trabajador', old('nombre_trabajador'), array('class' => 'form-control', 'required', 'id' => 'nombre_trabajador')) }}
    			</div>
    		</div>
    		<br>
    		<div class="row">
    			<div class="col-lg-12">
    				{{ Form::label('identificacion', 'Número de identificación', array('class' => '')) }}
					{{ Form::number('identificacion', old('identificacion'), array('class' => 'form-control', 'required', 'id' => 'identificacion')) }}
    			</div>
    		</div>
    		<br>
    		<div class="row">
    			<div class="col-lg-12 text-center">
					{{ Form::submit('Crear',array('class' => 'btn btn-success btn-lg','id' => 'btn-nuevo-trabajador')) }}
    			</div>
    		</div>
    	{{ Form::close() }}
    	<br>
    </div>
@endsection