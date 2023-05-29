<?php
	session_start();
	error_reporting(0);
		include('include/config.php');
		include('include/checklogin.php');
	check_login();

	if(isset($_POST['submit'])){	
		//$docid=$_SESSION['id'];
		$clave = $_POST["clave"];
		$hora = $_POST["hora"];
		$nombre = $_POST["nombre"];
		$fecha = $_POST["fecha"];
		$edad = $_POST["edad"];
		$peso = $_POST["peso"];
		$sexo = $_POST["sexo"];
		$talla = $_POST["talla"];
		$tensArt = $_POST["tensArt"];
		$edoCivil = $_POST["edoCivil"];
		$frCard = $_POST["frCard"];
		$frResp = $_POST["frResp"];
		$imc = $_POST["imc"];
		$temp = $_POST["temp"];
		$ahf = $_POST["ahf"];
		$apnp = $_POST["apnp"];
		$app = $_POST["app"];
		$pActual = $_POST["pActual"];
		$eFisica = $_POST["eFisica"];
		$fechaN = $_POST["fechaN"];
		$puestoS = $_POST["puestoS"];
		$escolaridad = $_POST["escolaridad"];
		$lugarOrigen = $_POST["lugarOrigen"];
		$analisisCovid = $_POST["analisisCovid"];
		$indicaciones = $_POST["indicaciones"];
		$visitarUFM = $_POST["visitarUFM"];
		$observaciones = $_POST["observaciones"];
		$cirugias = $_POST["cirugias"];
		$traumatismos = $_POST["traumatismos"];
		$fracturas = $_POST["fracturas"];
		$luxaciones = $_POST["luxaciones"];
		$alergias = $_POST["alergias"];
		$agudezaVisual = $_POST["agudezaVisual"];
		$licenciaLentes = $_POST["licenciaLentes"];
		$riesgoSalub = $_POST["riesgoSalub"];
		$envioOpto = $_POST["envioOpto"];
		$lentGraduadios = $_POST["lentGraduadios"];
		$perAbdominal = $_POST["perAbdominal"];
		$examLab = $_POST["examLab"];
		$tipoSangre = $_POST["tipoSangre"];
		$glucosaCapilar = $_POST["glucosaCapilar"];
		$iras = $_POST["iras"];
		$porcentajeOxigeno = $_POST["porcentajeOxigeno"];
		$pruebaAplicada = $_POST["pruebaAplicada"];
		$fechaAplicacion = $_POST["fechaAplicacion"];
		$horaAplicacion = $_POST["horaAplicacion"];
		$resultado = $_POST["resultado"];
		$diagnostico = $_POST["diagnostico"];
		$indicacionesFinales = $_POST["indicacionesFinales"];
			
		$query3=mysqli_query($con,"INSERT INTO pacientes (clave, hora, nombre, fecha, edad, peso, sexo, talla, tensArt, edoCivil, frCard, 
		frResp, imc, temp, ahf, apnp, app, pActual, eFisica, fechaN, puestoS, escolaridad, lugarOrigen, analisisCovid, 
		indicaciones, visitarUFM, observaciones, cirugias, traumatismos, fracturas, luxaciones, alergias, agudezaVisual, 
		licenciaLentes, riesgoSalub, envioOpto, lentGraduadios, perAbdominal, examLab, tipoSangre, glucosaCapilar, iras, 
		porcentajeOxigeno, pruebaAplicada, FechaAplicacion, horaAplicacion, resultado, diagnostico, indicacionesFinales) 
				VALUES ('$clave','$hora','$nombre','$fecha','$edad','$peso','$sexo','$talla','$tensArt','$edoCivil','$frCard',
		'$frResp','$imc','$temp','$ahf','$apnp','$app','$pActual','$eFisica','$fechaN','$puestoS','$escolaridad','$lugarOrigen',
		'$analisisCovid','$indicaciones','$visitarUFM','$observaciones','$cirugias','$traumatismos','$fracturas','$luxaciones',
		'$alergias','$agudezaVisual','$licenciaLentes','$riesgoSalub','$envioOpto','$lentGraduadios','$perAbdominal','$examLab',
		'$tipoSangre','$glucosaCapilar','$iras','$porcentajeOxigeno','$pruebaAplicada','$FechaAplicacion','$horaAplicacion',
		'$resultado','$diagnostico','$indicacionesFinales')");

		//$resultado3=mysqli_prepare($con,$query3);
		if(!$query3){
			echo "<script>alert('FAILD');</script>";
			header('location:add-patient.php');
		}else{
			echo "<script>alert('Patient info added Successfully');</script>";
			header('location:add-patient.php');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Add Patient</title>
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
		<script>
			function userAvailability() {
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "check_availability.php",
					data:'clave='+$("#clave").val(),
					type: "POST",
					success:function(data){
						$("#user-availability-status1").html(data);
						$("#loaderIcon").hide();
					},
					error:function (){}
				});
			}
		</script>
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
									<h1 class="mainTitle">Patient | Add Patient</h1>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Patient</span>
									</li>
									<li class="active">
										<span>Add Patient</span>
									</li>
								</ol>
							</div>
						</section>
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Add Patient</h5>
												</div>
												<div class="panel-body">
													<form role="form" name="" method="post">
														<input type="hidden" name="id" value="">
														<div>
															<tr>
																<th colspan="1" class="clave">Clave</th>
																<th><input type="text" class="sinborde" name="clave" value="" onBlur="userAvailability()"></th>
																<th colspan="1" class="nombre">Nombre</th>
																<th colspan="6"><input type="text" class="sinborde" name="nombre" value="" style="width: 500px;"></th>
																<th class="fecha">Fecha</th>
																<th><input type="date" class="fecha" name="fecha" value=""></th>
															</tr> 
															<tr>
																<td class="edad">Edad</td>
																<td><input type="text" class="edad" name="edad" value=""></td>
																<td class="sexo">Sexo</td>
																	<td><select name="sexo" id="sexo">
																		<option value="Masculino">Masculino</option>
																		<option value="Femenino">Femenino</option>
																		</select>
																	</td>
																<td class="tensArt">Tens.Art.</td>
																<td><input type="text" class="tensArt" name="tensArt" value=""></td>
																<td class="frCard">Fr.Card</td>
																<td><input type="text" class="frCard" name="frCard" value=""></td>
																<td class="imc">I.M.C</td>
																<td><input type="text" class="imc" name="imc" value=""></td>
																<td class="hora">Hora</td>
															</tr>
															<tr>
																<td class="peso">Peso</td>
																<td><input type="text" class="peso" name="peso" value=""></td>
																<td class="talla">Talla</td>
																<td><input type="text" class="talla" name="talla" value=""></td>
																<td class="edoCivil">Edo.Civil</td>
																<td><input type="text" class="edoCivil" name="edoCivil" value=""></td>
																<td class="frResp">FrResp</td>
																<td><input type="text" class="frResp" name="frResp" value=""></td>
																<td class="temp">Temp.</td>
																<td><input type="text" class="temp" name="temp" value=""></td>
																<!-- imput para la hora -->
																<td><input type="time" class="hora" name="hora" value=""></td>
															</tr>
														</div>
														<div>
															<td colspan="11" style="height:5px" class="separador"> 
																
															</td>
														</div>
														<div>
															<tr>
																<td colspan="1" class="ahf">A.H.F.</td>
																<td colspan="10"><input type="text" class="ahf" name="ahf" value=""></td>
															</tr>
															<tr>
																<td colspan="1" class="apnp">A.P.N.P</td>
																<td colspan="10"><input type="text" class="apnp" name="apnp" value=""></td>
															</tr>
															<tr>
																<td colspan="1" class="app">A.P.P</td>
																<td colspan="10"><input type="text" class="app" name="app" value=""></td>
															</tr>
															<tr>
																<td colspan="1" class="pActual">P.Actual</td>
																<td colspan="10"><input type="text" class="pActual" name="pActual" value=""></td>
															</tr>
															<tr>
																<td colspan="1" class="eFisica">eFisica</td>
																<td colspan="10"><input type="text" class="eFisica" name="eFisica" value=""></td>
															</tr>
														</div>
														<div>
															<td colspan="11" style="height:5px" class="separador"> 
																
															</td>
														</div>
														<tr>
															<td colspan="2" class="fechaN">Fecha de Nacimiento</td>
															<td colspan="5"><input type="date" class="fechaN" name="fechaN" value=""></td>
															<td colspan="2" class="escolaridad">Escolaridad</td>
															<td colspan="5"><input type="text" class="escolaridad" name="escolaridad" value=""></td>
														</tr>
														<tr>
															<td colspan="2" class="puestoS">Puesto Solicitado</td>
															<td colspan="5"><input type="text" class="puestoS"name="puestoS" value=""></td>
															<td colspan="2" class="lugarOrigen">Lugar de Origen</td>
															<td colspan="5"><input type="text" class="lugarOrigen" name="lugarOrigen" value=""></td>
														</tr>
														<div>
															<td colspan="11" style="height:5px" class="separador"> 
																
															</td>
														</div>
														<tr>
															<td colspan="2" class="analisisCovid">Analisis Covid</td>
															<td colspan="9"><input type="text" class="analisisCovid" name="analisisCovid" value=""></td>
														</tr>
														<tr>
															<td colspan="2" class="indicaciones">Indicaciones</td>
															<td colspan="9"><input type="text" class="indicaciones" name="indicaciones" value=""></td>
														</tr>
														<tr>
															<td class="visitarUFM">Visitar UFM</td>
															<td><input type="text" class="visitarUFM" name="visitarUFM" value=""></td>
															<td colspan="1" class="observaciones">Observaciones</td>
															<td colspan="8"><input type="text" class="observaciones" name="observaciones" value=""></td>
														</tr>
														<div>
															<td colspan="11" style="height:5px" class="separador"> 
																
															</td>
														</div>
														<tr>
															<td class="cirugias">Cirugias</td>
															<td colspan="10"><input type="text" class="cirugias" name="cirugias" value=""></td>
														</tr>
														<tr>
															<td class="traumatismos">Traumatismos</td>
															<td colspan="10"><input type="text" class="traumatismos" name="traumatismos" value=""></td>
														</tr>
														<tr>
															<td class="fracturas">Fracturas</td>
															<td colspan="10"><input type="text" class="fracturas"name="fracturas" value=""></td>
														</tr>
														<tr>
															<td class="luxaciones">Luxaciones</td>
															<td colspan="10"><input type="text" class="luxaciones" name="luxaciones" value=""></td>
														</tr>
														<tr>
															<td class="alergias">Alergias</td>
															<td colspan="10"><input type="text" class="alergias" name="alergias" value=""></td>
														</tr>
														<div>
															<td colspan="11" style="height:5px" class="separador"> 
																
															</td>
														</div>
														<tr>
															<td colspan="2" class="agudezaVisual">Agudeza Visual</td>
															<td colspan="2"><input type="text" class="agudezaVisual" name="agudezaVisual" value=""></td>
															<td colspan="2" class="envioOpto">¿Envio al Optometrista?</td>
															<td colspan="2"><input type="text" class="envioOpto" name="envioOpto" value=""></td>
															<td colspan="2" class="examLab">Examenes de Laboratorio</td>
															<td colspan="2"><input type="text" class="examLab" name="examLab" value=""></td>
														</tr>
														<tr>
															<td colspan="2" class="licenciaLentes">Licencia Indica Uso de Lentes</td>
															<td colspan="2"><input type="text" class="licenciaLentes" name="licenciaLentes" value=""></td>
															<td colspan="2" class="lentGraduadios">¿Usa Lentes Graduadios?</td>
															<td colspan="2"><input type="text" class="lentGraduadios" name="lentGraduadios" value=""></td>
															<td colspan="2" class="lentGraduadios">Tipo de Sangre</td>
															<td colspan="2"><input type="text" class="lentGraduadios" name="tipoSangre" value=""></td>
														</tr>
														<tr>
															<td colspan="2" class="riesgoSalub">Riesgo para la Salub</td>
															<td colspan="2"><input type="text" class="riesgoSalub" name="riesgoSalub" value=""></td>
															<td colspan="2" class="perAbdominal">Perimetro Abdominal</td>
															<td colspan="2"><input type="text" class="perAbdominal" name="perAbdominal" value=""></td>
															<td colspan="2" class="glucosaCapilar">Glucosa Capilar</td>
															<td colspan="2"><input type="text" class="glucosaCapilar" name="glucosaCapilar" value=""></td>
														</tr>
														<div>
															<td colspan="11" style="height:5px" class="separador"> 
																
															</td>
														</div>
														<tr>
															<td colspan="2" class="iras">I.R.A.S</td>
															<td colspan="9"><input type="text" class="iras" name="iras" value=""></td>
														</tr>
														<div>
															<td colspan="11" style="height:5px" class="separador"> 
																
															</td>
														</div>
														<tr>
															<td colspan="2" class="porcentajeOxigeno">Porcentaje de Oxigeno</td>
															<td colspan="9"><input type="text" class="porcentajeOxigeno" name="porcentajeOxigeno" value=""></td>
														</tr>
														<tr>
															<td class="pruevaAplicada">Prueva Aplicada</td>
															<td><input type="text" class="pruevaAplicada" name="pruevaAplicada" value=""></td>
															<td class="FechaAplicacion">Fecha Aplicacion</td>
															<td><input type="date" class="FechaAplicacion" name="FechaAplicacion" value=""></td>
															<td class="horaAplicacion">Hora Aplicacion</td>
															<td><input type="time" class="horaAplicacion" name="horaAplicacion" value=""></td>
															<td class="resultado">Resultado</td>
															<td><input type="text" class="resultado" name="resultado" value=""></td>
														</tr>
														<tr>
															<td class="diagnostico">Diagnostico</td>
															<td><input type="text" class="diagnostico" name="diagnostico" value=""></td>
														</tr>
														<tr>
															<td class="indicacionesFinales">Indicaciones Finales</td>
															<td><input type="text" name="indicacionesFinales" value=""></td>
														</tr>
														<button type="submit" id="submit" name="submit" class="btn">Crear Consulta</button>
																						</form>
																					</div>
																				</div>
																			</div>
																		</div>
																		</div>
																	<div class="col-lg-12 col-md-12">
																	<div class="panel panel-white">
																	</div>
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