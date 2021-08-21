<?php

	$servidor = 'USUARIO\SQLEXPRESS';
	$arrDb = ['Database' => 'organizacion'];


	$con=sqlsrv_connect($servidor, $arrDb);
    if(!$con){
        @die("<h2 style='text-align:center'>Imposible conectarse a la base de datos! </h2>".mssql_get_last_message($con));
    }
?>