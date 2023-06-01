<?php
    session_start();
	error_reporting(0);
		include('include/config.php');
		include('include/checklogin.php');
	check_login();
    try {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];/* update medicos set estatus=0 where id_medico=:elid */
            $eliminarConsulta = "DELETE FROM pacientes WHERE id='$id'";
            $resultado7 = mysqli_prepare($conn,$eliminarConsulta);
            if(mysqli_stmt_execute($resultado7)){
                header('location:manage-patient.php?respuesta=ELIMINADO CORRECTAMENTE');
            }
        }
    } catch (Exception $e) {
        header('location:manage-patient.php?respuesta=ERROR'. $e->getMessage());
    }
?>