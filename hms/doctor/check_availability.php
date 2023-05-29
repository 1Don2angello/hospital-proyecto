<?php 
	require_once("include/config.php");
	if(!empty($_POST["clave"])) {
		$clave= $_POST["clave"];
		$result = mysqli_query ($con,"SELECT clave FROM pacientes WHERE clave='$clave'");

		$count = mysqli_num_rows($result);
		if($count > 0){
			echo "<span style='color:red'> clave already exists .</span>";
			echo "<script>$('#submit').prop('disabled',true);</script>";
		}else{
			echo "<span style='color:green'> clave available for Registration .</span>";
			echo "<script>$('#submit').prop('disabled',false);</script>";
		}
	}
?>