<?php
	session_start();
	error_reporting(0);
		include('include/config.php');
		include('include/checklogin.php');
	check_login();
?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Manage Patients </title>
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
		<!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
			<?php include('include/sidebar.php');?>
			<div class="app-content">
				<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Doctor  |   Administrar Pacientes </h1>
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
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Patients</span></h5>
									<table class="manaje"><!-- class="table table-hover" id="sample-table-1" -->
										<thead class="manaje">
											<tr>
												<th class="manaje1" scope="col">#</th>
												<th class="manaje" scope="col">clave</th>
												<th class="manaje" scope="col">hora</th>
												<th class="manaje" scope="col">nombre</th>
												<th class="manaje" scope="col">Fecha</th>
												<th class="manaje" scope="col">Edad</th> 
												
												<th class="manaje" scope="col">Acciones</th>
											</tr>
										</thead>
										<tbody>
											<?php
											//consulta a la db
											include('include/config.php'); //Conexión a la db
											$consulta2 = "SELECT * FROM pacientes";
											
											$resultado2 = mysqli_query($con, $consulta2);
											
											if($resultado2 === false) {
												die( print_r( mysqli_connect_errno(), true));
											}
											while ($fila2 = mysqli_fetch_array($resultado2)) {
											?>
												<tr>
													<th scope="row"><?php echo $fila2["id"] ?></th>
													<td class="manaje"><?php echo $fila2["clave"] ?></td>
													<td class="manaje"><?php echo $fila2["hora"] ?></td>
													<td class="manaje"><?php echo $fila2["nombre"] ?></td>
													<td class="manaje"><?php echo $fila2["fecha"] ?></td>
													<td class="manaje"><?php echo $fila2["edad"] ?></td>
													<!--Acciones de la tabla por cada insertado-->
													<td class="manaje">
														<a href="edit-doctor.php?id=<?php echo $row['id']; ?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
														<a href="manage-patient.php?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('¿Estás seguro de que quieres eliminar al Paciente?')" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
														<a class='btn' href='view-patient.php?id=<?php echo $fila2["id"]; ?>'>Ver</a>
														<!-- <a class='btn' href='notificarConsulta.php?id=<?php echo $fila2["id"]; ?>'>Notificar</a> -->
														<!-- <a class='btn' href='edicionConsulta.php?id=<?php echo $fila2["id"]; ?>'>Editar</a> -->
														<a class='btn' href='delete-patient.php?id=<?php echo $fila2["id"]; ?>'>Eliminar</a>
													</td>
												</tr>
												<?php  
											} ?>
										</tbody>
									</table>
								</div>
							</div>
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