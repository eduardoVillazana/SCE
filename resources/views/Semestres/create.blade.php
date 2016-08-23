@extends('layouts.master')

@section('content2')

{!! Form::open(['route' => 'sem.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	<div class="form-group">
 		<div class="col-lg-3">
 			{!! Form::label('nombre','Nombre:',['class' => 'control-label'])!!}
 		</div>
 		<div class="col-lg-5">
			{!! Form::text('nombre',null,['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-3">
 			{!! Form::label('nombre','Selecciona un Ciclo Escolar:',['class' => 'control-label'])!!}
 		</div>

		<div class="col-lg-5">

			{!! Form::select('ciclo_escolars_id', $CiclosEscolares, array('class' => 'form-control')) !!}
		</div>
    </div>

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
	</div>
 
{!! Form::close() !!}

@endsection