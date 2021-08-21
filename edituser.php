<?php
$active8="active";
include "head.php";
include "header.php";
include "aside.php";
?>

 <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Perfil De Usuario<small></small> </h1>
        </section>
        <section class="content"><!-- Main content -->
        <div class="box box-primary"><!-- general form elements -->
        	<div class="col-md-6 col-md-offset-3">
                        <div class="box-header with-center">
                            <h3 class="box-title">Modificar Datos y Permisos de Usuario: </h3>
                        </div> <!-- /.box-header -->
                        <form role="form" method="post" action="action/modifyuser.php"><!-- form start -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="fullname">Nombre Completo</label>
                                    <input name="fullname" type="text" class="form-control" id="fullname" value="<?php echo $fullname ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input name="email" type="email" class="form-control" id="email" value="<?php echo $email ?>">
                                </div>
                                <div class="form-group">
                                    <label for="profile">Perfil</label>
                                     <select class="form-control select2" name="user_profile">
                                      <option value="" selected="selected">---Seleciona Perfil---</option>
                                       <option value="superAdministrador">Super Administrador</option>
                                       <option value="Administrador">Administrador</option>
                                        <option value="consulta">Consulta</option>
                                      </select>
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña Actual</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="*******">
                                </div>
                                <div class="form-group">
                                    <label for="new_password">Nueva Contraseña</label>
                                    <input name="new_password" type="password" class="form-control" placeholder="*******" id="new_password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_new_password">Confirmar Nueva Contraseña</label>
                                    <input name="confirm_new_password" type="password" class="form-control" placeholder="*******" id="confirm_new_password">
                                </div>
                            </div><!-- /.box-body -->
                            <div class="form-group">
                                <button name="token" type="submit" class="btn btn-success">Actualizar Datos</button>
                            </div>
                        </form>
                        </div>
                         </div>
        </section>
       
    </div><!-- /.content -->
    <?php include "footer.php"; ?>