<!DOCTYPE html>
<html lang="en">

<?php
	$mensaje = Session::get('message')
?>

<head>
	<meta charset="UTF-8">

	@extends('Alumno.layouts.master')
    
	<title>Sistema de Control Escolar</title>
</head>
<body>

@section('contentAlumno')
   
	@if($mensaje == 'store')
		<div class="alert alert-warning alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p>Acción realizada con exito</p>
		</div>
	@endif

	<!--<div class="table-responsive">-->

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Boletas de Calificaciones</h4> </div>    
                </div>
            </div>        
        </div>
    </div>
	
	<table class="table table-stripped table-hover">
        <thead>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Grupo</th>
            <th colspan="4">Opciones</th>
        </thead>

        <tbody>
            @foreach($Alumnos as $Alumno)
                <tr>
                    <td>{{ $Alumno->matricula }}</td>
                    <td>{{ $Alumno->apa }}
                    {{ $Alumno->ama }}
                    {{ $Alumno->nombre }}</td>
                    <td>{{ $Alumno->grupos->nombre }}</td>
                    
                    <td>{!!link_to_route('Boleta.show', $title = 'Mostrar', $parameters = $Alumno->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>

                    <th>{!!link_to_action('Boletas@crear_boletas', $title = 'Ver Calendario', $parameters = array('2' , $Alumno->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>
                </tr>
            @endforeach
        </tbody>
    </table>


	</div>
@endsection
	
</body>
</html>