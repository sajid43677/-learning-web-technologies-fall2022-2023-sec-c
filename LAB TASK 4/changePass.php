<html>
<head>
	<title>FORM</title>
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION["validate"])){
			echo $_SESSION["validate"];
			session_destroy();
		}
	?>
		<form method="post" action="changePassCheck.php" enctype="">
			<fieldset>
				<legend><b>LOGIN</b></legend>
				<table>
					<tr>
						<td>Current password:</td>
						<td><input type="text" name="Password" value="" ></td>
					</tr>
					<tr>
						<td>New Password:</td>
						<td><input type="password" name="NewPassword" value="" ></td>
					</tr>
                    <tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="ConPassword" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="" value="Submit">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>