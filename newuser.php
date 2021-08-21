<?php
$active9="active";
include "head.php";
include "header.php";
include "aside.php";
?>

    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Nuevo Usuario<small></small> </h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-userprofile"></i> Home</a></li>
                <li class="active">Nuevo Usuario</li>
            </ol>
        </section>
        <section class="content"><!-- Main content -->
        <div class="box box-primary"><!-- general form elements -->
        	<div class="col-md-6 col-md-offset-3">
        <div class="register-box-body">
            <form method="post" id="add" name="add">
                <div class="form-group has-feedback">
                    <input type="text" name="fullname" class="form-control" placeholder="Nombre y apellidos" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
				  <div class="form-group has-feedback">
                    <input type="text" name="position" class="form-control" placeholder="Puesto" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
				   <div class="form-group has-feedback">
                    <input type="text" name="vacuna" class="form-control" placeholder="Nombre de vacuna" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
				   <div class="form-group has-feedback">
                    <input type="text" name="status" class="form-control" placeholder="Estado" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <select class="form-control" name="profile" required>
                                      <option value="" selected="selected">---Seleciona Perfil---</option>
                                       <option value="superAdministrador">Super Administrador</option>
                                       <option value="Administrador">Administrador</option>
                                        <option value="consulta">Consulta</option>
                                      </select>
                                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <p class="text-muted text-right">campos obligatorios* </p>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">

                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button id="save_data" type="submit" class="btn btn-primary btn-block btn-flat">Agregar Nuevo Usuario</button>
                    </div><!-- /.col -->
                </div>
            </form>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>




<script>
$(document).ready(function(){
    load(1);
});

$( "#add" ).submit(function( event ) {
  $('#save_data').attr("disabled", true);

 var parametros = $(this).serialize();
     $.ajax({
            type: "POST",
            url: "action/adduser.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#result").html("Mensaje: Cargando...");
              },
            success: function(datos){
            $("#result").html(datos);
            $('#save_data').attr("disabled", false);
            load(1);
          }
    });
  event.preventDefault();
})
</script>
</div><!--  -->
</section>
</div>
