@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGU')

{!! Form::model($Maestro, ['route' => ['mae.update', $Maestro->id], 'method'=>'PUT', 'class'=> 'form-horizontal', 'files' => true]) !!}

 	@include('Admin.Maestros.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('mae.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection