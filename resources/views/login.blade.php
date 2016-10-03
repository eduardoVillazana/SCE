<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Control Escolar</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/general.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/AdminLTE/css/AdminLTE.css')}}">
</head>

<header>
	<!--Row 1 Titulo y logos-->
	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="logoamericana"> <center>
                            <a href="http://www.uaa.edu.mx/" target="_new">
                            <img src="/src/imagenes/logo_americana2.png" class="img-responsive" alt="Responsive image"/> </center>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="logotitulo"><center>
                            <img src="/src/imagenes/logo_titulo2.png" class="img-responsive" alt="Responsive image"/> </center>
                        </div>  
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="logounam"> <center>
                            <a href="http://www.dgire.unam.mx/" target="_new">
                            <img src="/src/imagenes/logo-si-somos-unam2.png" class="img-responsive" alt="Responsive image"/> </center>
                            </a>
                        </div>  
                    </div>     
                </div>
            </div>
    </div>
</header>

<body>


<div class="container-fluid">
	@yield('content')
</div>

<!--Row 2 PEqueño de fecha a la izquierda y cerrar sesión -->
<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row2">
                    
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="fecha">
                        <?php
                        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                        echo $dias[date('w')].", ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
                        ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cerrarsesion">
                        
                        </div>  
                    </div>    
                </div>

                </div>
            </div>        
</div>

<!--Row general que contendra a los 3 rows-->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
        <!--Subdividimos este row en 3 columnas-->
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="menuizquierdo">
                   
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			
            <div class="login-box">
  <div class="login-logo">
    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Validar Sesión</p>

    <form action="../../index2.html" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Matrícula">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordar
            </label>
          </div>
        </div>
        <!-- /.col -->
        
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Validar</button>
        </div>
        <!-- /.col -->
      
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
        </div> <!--Termina Row de login -->

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="rowderecho">
                    <div class="logoFacultad">
                    <img src="/src/imagenes/logo_computacion.png" class="img-responsive" alt="Responsive image"/>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
	
    <script src="src/js/bootstrap.min.js" language=”Javascript”></script>

</body>
</html>