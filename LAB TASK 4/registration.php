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
		<form method="post" action="loginCheck.php" enctype="">
			<fieldset>
				<legend><b>Registration</b></legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="Name" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="Email" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
						<td>User Name</td>
						<td><input type="text" name="Name" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="Password" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
						<td>Confirm Password</td>
						<td><input type="password" name="ConPassword" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
							<td colspan="2">
								<fieldset>
									<legend>Gender</legend>
									<input type="radio" name = "gender">Male
                   					<input type="radio" name = "gender">Female
                    				<input type="radio" name = "gender">Other
								</fieldset>
							</td>
					</tr>
					<tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td colspan="2">
							<fieldset>
								<legend>Date of Birth</legend>
								<input type="number"> / <input type="number"> / <input type="number"><i>(dd/mm/yyy)</i>
							</fieldset>
						</td>
					</tr>
					<tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="" value="Submit">
							<input type="reset" name="" value="Reset">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>