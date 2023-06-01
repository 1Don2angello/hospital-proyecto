<?php
  session_start();
  error_reporting(0);
    include('include/config.php');
    include('include/checklogin.php');
  check_login();
  /* if(isset($_POST['submit'])){
    $vid=$_GET['viewid'];
    $bp=$_POST['bp'];
    $bs=$_POST['bs'];
    $weight=$_POST['weight'];
    $temp=$_POST['temp'];
    $pres=$_POST['pres'];
    $query.=mysqli_query($con, "insert   tblmedicalhistory(PatientID,BloodPressure,BloodSugar,Weight,Temperature,MedicalPres)value('$vid','$bp','$bs','$weight','$temp','$pres')");
    if($query){
      echo '<script>alert("Medicle history has been added.")</script>';
      echo "<script>window.location.href ='manage-patient.php'</script>";
    }else{
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
      <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
    }
  } */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Manage P</title>
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
    <div id="app">		
      <?php include('include/sidebar.php');?>
        <div class="app-content">
        <?php include('include/header.php');?>
          <div class="main-content" >
            <!-- <div class="wrap-content container" id="container">
              start: PAGE TITLE -->
              <section id="page-title">
                <div class="row">
                  <div class="col-sm-8">
                    <h1 class="mainTitle">Doctor  |  Reporte completo de Paciente</h1>
                  </div>
                  <ol class="breadcrumb">
                    <li>
                      <span>Doctor</span>
                    </li>
                    <li class="active">
                      <span>Manage Patients</span>
                    </li>
                  </ol>
                </div>
              </section>
              <div class="container-fluid container-fullw bg-white">
                <div class="row">
                  <div class="col-md-12"><!-- class="table table-bordered dt-responsive nowrap" -->
                                <!-- style="border-collapse: collapse; border-spacing: 0; width: 100%;" -->
                    <table class="view" id="datatable" style="border-collapse: collapse; width: 100%;">
                      <thead class="view">
                        <tr>
                          <!-- <th scope="col">#</th> -->
                          <th class="view" colspan="1" scope="col">clave</th>
                          <th class="view" scope="col">hora</th>
                          <th class="view" scope="col">nombre</th>
                          <th class="view" scope="col">Fecha</th>
                          <th class="view" scope="col">Edad</th> 
                          <th class="view" scope="col">Peso</th>
                          <th class="view" scope="col">Sexo</th>
                          <th class="view" scope="col">Talla</th>
                          <th class="view" scope="col">TensArt</th>
                          <th class="view" scope="col">edoCivil</th>
                          <th class="view" scope="col">frCard</th>
                          <th class="view" scope="col">frResp</th>
                          <th class="view" scope="col">imc</th>
                          <th class="view" scope="col">temp</th>
                          <th class="view" scope="col">ahf</th>
                          <th class="view" scope="col">apnp</th>
                          <th class="view" scope="col">app</th>
                          <th class="view" scope="col">pActual</th>
                          <th class="view" scope="col">eFisica</th>
                          <th class="view" scope="col">fecha de Nacimiento</th>
                          <th class="view" scope="col">puestoS</th>
                          <th class="view" scope="col">Escolaridad</th>
                          <th class="view" scope="col">lugar de Origen</th>
                          <th class="view" scope="col">Analisis Covid</th>
                          <th class="view" scope="col">indicaciones</th>
                          <th class="view" scope="col">Visitar UFM</th>
                          <th class="view" scope="col">Observaciones</th>
                          <th class="view" scope="col">Cirugias</th>
                          <th class="view" scope="col">Traumatismos</th>
                          <th class="view" scope="col">Fracturas</th>
                          <th class="view"scope="col">Luxaciones</th>
                          <th class="view" scope="col">Alergias</th>
                          <th class="view" scope="col">Agudeza Visual</th>
                          <th class="view" scope="col">Licencia Indica Uso de Lentes</th>
                          <th class="view" scope="col">Riesgo para la Salub</th>
                          <th class="view" scope="col">envioOpto</th>
                          <th class="view" scope="col">¿Usa Lentes Graduadios?</th>
                          <th class="view" scope="col">Perimetro Abdominal</th>
                          <th class="view" scope="col">Examenes de Laboratorio</th>
                          <th class="view" scope="col">Tipo de Sangre</th>
                          <th class="view" scope="col">Glucosa Capilar</th>
                          <th class="view" scope="col">I.R.A.S</th>
                          <th class="view" scope="col">Porcentaje de3 Oxigeno</th>
                          <th class="view" scope="col">pruevaAplicada</th>
                          <th class="view" scope="col">FechaAplicacion</th>
                          <th class="view" scope="col">horaAplicacion</th>
                          <th class="view" scope="col">resultado</th>
                          <th class="view" scope="col">diagnostico</th>
                          <th class="view" scope="col">indicacionesFinales</th> 
                          <th class="view" scope="col">Acciones</th>
                        </tr>
                      </thead>
                    </table>
                      <tbody>
                        <?php
                        //consulta a la bd de datos
                        include('include/config.php'); //Conexión a la db
                        $consulta2 = "SELECT * FROM pacientes";
                        
                        $resultado2 = mysqli_query($con, $consulta2);
                        
                        if($resultado2 === false) {
                          die( print_r( mysqli_connect_errno(), true));
                        }
                        while ($fila2 = mysqli_fetch_array($resultado2)) {
                          ?>
                            <tr>
                              <!-- <th scope="row"><?php echo $fila2["id"] ?></th> -->
                              <td><?php echo $fila2["clave"] ?></td>
                              <td><?php echo $fila2["hora"] ?></td>
                              <td><?php echo $fila2["nombre"] ?></td>
                              <td><?php echo $fila2["fecha"] ?></td>
                              <td><?php echo $fila2["edad"] ?></td>
                              <td><?php echo $fila2["peso"] ?></td>
                              <td><?php echo $fila2["sexo"] ?></td>
                              <td><?php echo $fila2["talla"] ?></td>
                              <td><?php echo $fila2["tensArt"] ?></td>
                              <td><?php echo $fila2["edoCivil"] ?></td>
                              <td><?php echo $fila2["frCard"] ?></td>
                              <td><?php echo $fila2["frResp"] ?></td>
                              <td><?php echo $fila2["imc"] ?></td>
                              <td><?php echo $fila2["temp"] ?></td>
                              <td><?php echo $fila2["ahf"] ?></td>
                              <td><?php echo $fila2["apnp"] ?></td>
                              <td><?php echo $fila2["app"] ?></td>
                              <td><?php echo $fila2["pActual"] ?></td>
                              <td><?php echo $fila2["eFisica"] ?></td>
                              <td><?php echo $fila2["fechaN"] ?></td>
                              <td><?php echo $fila2["puestoS"] ?></td>
                              <td><?php echo $fila2["escolaridad"] ?></td>
                              <td><?php echo $fila2["lugarOrigen"] ?></td>
                              <td><?php echo $fila2["analisisCovid"] ?></td>
                              <td><?php echo $fila2["indicaciones"] ?></td>
                              <td><?php echo $fila2["visitarUFM"] ?></td>
                              <td><?php echo $fila2["observaciones"] ?></td>
                              <td><?php echo $fila2["cirugias"] ?></td>
                              <td><?php echo $fila2["traumatismos"] ?></td>
                              <td><?php echo $fila2["fracturas"] ?></td>
                              <td><?php echo $fila2["luxaciones"] ?></td>
                              <td><?php echo $fila2["alergias"] ?></td>
                              <td><?php echo $fila2["agudezaVisual"] ?></td>
                              <td><?php echo $fila2["licenciaLentes"] ?></td>
                              <td><?php echo $fila2["riesgoSalub"] ?></td>
                              <td><?php echo $fila2["envioOpto"] ?></td>
                              <td><?php echo $fila2["lentGraduadios"] ?></td>
                              <td><?php echo $fila2["perAbdominal"] ?></td>
                              <td><?php echo $fila2["examLab"] ?></td>
                              <td><?php echo $fila2["tipoSangre"] ?></td>
                              <td><?php echo $fila2["glucosaCapilar"] ?></td>
                              <td><?php echo $fila2["iras"] ?></td>
                              <td><?php echo $fila2["porcentajeOxigeno"] ?></td>
                              <td><?php echo $fila2["pruevaAplicada"] ?></td>
                              <td><?php echo $fila2["FechaAplicacion"] ?></td>
                              <td><?php echo $fila2["horaAplicacion"] ?></td>
                              <td><?php echo $fila2["resultado"] ?></td>
                              <td><?php echo $fila2["diagnostico"] ?></td>
                              <td><?php echo $fila2["indicacionesFinales"] ?></td>
                              <!--Acciones de la tabla por cada insertado-->
                            </tr>
                            <?php  
                        } ?>
                      </tbody>
                </div>
              </div>
              </div>
              </div>
              </div>
            </div>
            
            <!-- start: FOOTER -->
          <?php include('include/footer.php');?>
            <!-- end: FOOTER -->
          
            <!-- start: SETTINGS -->
          <?php include('include/setting.php');?>
            <!-- end: SETTINGS -->
      </div>
      <!-- start: MAIN JAVASCRIPTS -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="vendor/modernizr/modernizr.js"></script>
      <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
      <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script src="vendor/switchery/switchery.min.js"></script>
      <!-- end: MAIN JAVASCRIPTS -->
      <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
      <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
      <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
      <script src="vendor/autosize/autosize.min.js"></script>
      <script src="vendor/selectFx/classie.js"></script>
      <script src="vendor/selectFx/selectFx.js"></script>
      <script src="vendor/select2/select2.min.js"></script>
      <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
      <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
      <!-- start: CLIP-TWO JAVASCRIPTS -->
      <script src="assets/js/main.js"></script>
      <!-- start: JavaScript Event Handlers for this page -->
      <script src="assets/js/form-elements.js"></script>
      <script>
        jQuery(document).ready(function() {
          Main.init();
          FormElements.init();
        });
      </script>
      <!-- end: JavaScript Event Handlers for this page -->
      <!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
