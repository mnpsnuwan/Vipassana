<?php

session_start();

if(isset($_POST['submit2'])){

	$Pass = $_SESSION['password'];
	$code = $_POST['code'];


	if($code == $Pass){

		?>
		<html>
		<head>
<link rel="stylesheet" type="text/css" href="foget.css">
</head>
		<body>
			<div class="foget-main">
			<div class="foget">
			<form action="Forget_Con3.php" method="POST">

				<table>
					<tr><td>New Password</td><td><input type="text" id="n_pass" name="n_pass"></td></tr>
					<tr><td>Re Entry Password</td><td><input type="text" id="r_pass" name="r_pass"></td></tr>
					<tr><td><input type="submit" id="submit3" name="submit3"></td></tr>


				</table>

			</form>
		</div>
	</div>


		</body>
		</html>

		<?php
	}
	else{

		echo "Your wrong";
	}


	
}
else{

	echo "cant";
}
?>