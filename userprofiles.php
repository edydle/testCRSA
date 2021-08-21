<?php
$active7="active";
include "head.php";
include "header.php";
include "aside.php";
?>
<?php 
        $users = sqlsrv_query($con,"select * from users");
?>

    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Busqueda de Personal<small></small> </h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-userprofile"></i> Home</a></li>
                <li class="active">Empleados</li>
            </ol>
        </section>
        <section class="content"><!-- Main content -->
        <div class="box box-primary"><!-- general form elements -->
        	<div class="col-md-12">
                        <div class="box-header with-center">
                            <h3 class="box-title">Control de vacunación COVID-19 </h3>
                        </div> <!-- /.box-header -->
                        
                         <div class="box-body no-padding">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Puesto</th>
                                        <th>Nombre Vacuna</th>
										<th>Fecha 1ra dosis</th>
										<th>Fecha 2da dosis</th>
										<th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>    
                                <tbody>    
                                    <?php foreach($users as $user):?>
									<tr>
                                        <td style="width: 250px">

                                                <i class="fa fa-user"></i>
        
                                       
                                        <?php echo $user['name']; ?></a>
                                        </td>
                                        <td style="width: 350px"><?php echo $user['position']; ?></td>
                                        <td style="width: 350px"><?php echo $user['vacuna']; ?></td>
										<td style="width: 350px"><?php echo $user['date_first']; ?></td>
										<td style="width: 350px"><?php echo $user['date_second']; ?></td>
										<td style="width: 350px"><?php echo $user['status']; ?></td>
                                         <td style="width:223px;"> 
                                            <a href="edituser.php?id=<?php echo $user['id'];?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                                            <a href="action/deluser.php?id=<?php echo $user['id']; ?>&tkn=<?php echo $_SESSION["tkn"]?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                              </div><!-- /.box-body --><br>
                    </div><!-- /.box -->
                    <form role="form" method="post" action="newuser.php"><!-- form start -->
                       <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <button name="token" type="submit" class="btn btn-success">Agregar Nuevo Usuario</button>
                            </div>
                </div>
                </form>
            </div><!-- /.row -->
        </section>
    </div><!-- /.content -->

 
    <?php include "footer.php"; ?>