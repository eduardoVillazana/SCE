@extends('Maestro.layouts.master')

@section('contentMaestro')

@include('Maestro.layouts.partials.menuGD')

{!! Form::open(['route' => 'PrograExtendido.store', 'method'=>'POST', 'class'=> 'form-horizontal', 'files' => true]) !!}

 	@include('Maestro.Documentos.Agregar.PrograExtendido.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('PrograExtendido.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection