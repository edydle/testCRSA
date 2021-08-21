<?php 
    $active1="active";
    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 

    $count_user=sqlsrv_query($con, "select * from users");

?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Dashboard<small></small> </h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">

            <div class="row">

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo sqlsrv_num_rows($count_user); ?></h3>
                            <p>Usuarios</p>
                        </div>
                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="image view view-first">
                        <img class="thumb-image" style="width: 50%; display: block;" src="images/profiles/<?php echo $profile_pic ?>"" alt="image">
                    </div>
                        <span class="btn btn-my-button btn-file" style="width: 345px; margin-top: 5px;">
                            <form method="post" id="formulario" enctype="multipart/form-data">
                            Cambiar Imagen de perfil: <input type="file" name="file">
                            </form>
                        </span>
                        <div id="respuesta"></div>
                    <br>
                </div> 
                <div class="col-md-2"></div>
                <div class="col-md-6">
                <!-- <div id="result"></div> -->
                    <div class="box box-primary"><!-- general form elements -->
                        <div class="box-header with-border">
                            <h3 class="box-title">Datos Personales: </h3>

                        </div> <!-- /.box-header -->
                        <?php
                        $success=sha1(md5("contrasena actualizada"));
                        if (isset($_GET['success_pass']) && $_GET['success_pass']==$success) {
                            echo "<div class='alert-success' alert-dismissible fade in' role='alert'>
                                <strong>¡Bien hecho!</strong> Cambio de Contraseña Exitoso
                                </div>";
                        }
                        $invalid=sha1(md5("contrasena no coincide"));
                        if (isset($_GET['invalid']) && $_GET['invalid']==$invalid) {
                            echo "<div class='alert-danger' alert-dismissible fade in' role='alert'>
                                <strong>¡Error!</strong> La contraseña no coincide con la anterior
                                </div>";
                        }
                        $error=sha1(md5("contrasena no coincide"));
                        if (isset($_GET['error']) && $_GET['error']==$error) {
                            echo "<div class='alert-warning' alert-dismissible fade in' role='alert'>
                                <strong>¡Error!</strong> La nueva contraseña no coincide 
                                </div>";
                        }
                ?>
                        <form role="form" method="post" action="action/updprofile2.php"><!-- form start -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="fullname">Nombre Completo</label>
                                    <input name="fullname" class="form-control" id="fullname"> <?php echo $fullname ?> </input>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input name="email" class="form-control" id="email"><?php echo $email ?></input>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button name="token" type="submit" class="btn btn-success">Actualizar Datos</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div><!-- /.row -->
        </section>
    </div><!-- /.content -->
 
    
<?php include "footer.php"; ?>
<script>
    $(function(){
    $("input[name='file']").on("change", function(){
        var formData = new FormData($("#formulario")[0]);
        var ruta = "action/uploadprofile.php";
        $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos)
            {
                $("#respuesta").html(datos);
            }
        });
    });
    });
</script>


