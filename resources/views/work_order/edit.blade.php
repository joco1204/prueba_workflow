@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
    		<div class="col-lg-12 text-center">
    			<h2>Nueva Orden de Trabajo</h2>
    		</div>
    	</div>
    	<br>
    	{{ Form::open(array('method' => 'post', 'action'=> 'WorkOrderController@store', 'id' => 'editar-ot', 'autocomplete' => 'off' )) }}
    		<div class="row">
    			<div class="col-lg-12">
    				{{ Form::label('numero_ot', 'Número de OT', array('class' => '')) }}
                    {{ Form::text('numero_ot', old('numero_ot'), array('class' => 'form-control', 'required', 'id' => 'numero_ot')) }}
    			</div>
    		</div>
            <br>
    		<div class="row">
    			<div class="col-lg-12">
    				{{ Form::label('descripcion', 'Descripción', array('class' => '')) }}
                    {{ Form::text('descripcion', old('descripcion'), array('class' => 'form-control', 'required', 'id' => 'descripcion')) }}
    			</div>
    		</div>
            <br>
    		<div class="row">
    			<div class="col-lg-12">
    				{{ Form::label('trabajador', 'Asignado a:', array('class' => '')) }}
                    {{ Form::select('trabajador', $trabajadores, '', array('class' => 'form-control', 'required')) }}
    			</div>
    		</div>
            <br>
    		<div class="row">
    			<div class="col-lg-12">
    				{{ Form::label('precio', 'Precio', array('class' => '')) }}
                    {{ Form::number('precio', old('precio'), array('class' => 'form-control', 'required', 'id' => 'precio')) }}
    			</div>
    		</div>
            <br>
    		<div class="row">
    			<div class="col-lg-12">
    				{{ Form::label('estado', 'Estado OT', array('class' => '')) }}
                    {{ Form::select('estado', $estados, '', array('class' => 'form-control', 'required')) }}
    			</div>
    		</div>
            <br>
    		<div class="row">
    			<div class="col-lg-12 text-center">
    				{{ Form::submit('Crear',array('class' => 'btn btn-success btn-lg','id' => 'btn-editar-ot')) }}
    			</div>
    		</div>
            <br>
    	{{ Form::close() }}
    </div>
@endsection