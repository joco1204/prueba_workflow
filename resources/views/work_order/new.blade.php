@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
    		<div class="col-lg-12 text-center">
    			<h2>Nueva Orden de Trabajo</h2>
    		</div>
    	</div>
    	<br>
    	{{ Form::open(array('method' => 'post','action'=> 'WorkOrderController@store','id' => 'nueva-ot' )) }}
    		<div class="row">
    			<div class="col-lg-12">
    				
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-12">
    				
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-12">
    				
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-12">
    				
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-12">
    				
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-12">
    				
    			</div>
    		</div>
    	{{ Form::close() }}
    </div>
@endsection