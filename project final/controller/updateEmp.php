<?php
    if(isset($_GET['succ'])){
        echo "User Updated";
        unset($_GET);
    }
?>

<!DOCTYPE html>

<head>
    <title>Employee Informations</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="" action="" enctype="">

			<hr><hr>

		<header>
			<div align= "center">
			<h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
			</div>
		</header>

			<hr><hr>

		<nav>
			<div align= "center">
				&ensp;&ensp; 
				<a href="#" >Achivements</a>
				&ensp;&ensp;    
				<a href="#">Contact us</a>
				&ensp;&ensp; 
				<a href="#">Support</a> 
				&ensp;&ensp; 
			</div>
			<div align= "right">
				<a href="../views/Admin.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Employee Information</legend>
				<table width=60% align = "center">
                    <tr>
                        <td >Username</td>
                        <td>Passowrd</td>
                        <td>Email</td>
                        <td>Role</td>
                    </tr>
                    <?php
                        require_once('../models/EmployeeInfo.php');
						$users = allUser();
						foreach($users as $user){
							echo "	<tr><td>{$user['username']}</td>
									<td>{$user['password']}</td>
									<td>{$user['email']}</td>
									<td>{$user['role']}</td>
                                    <td><a href=\"editEmp.php?id={$user['empid']}\">edit</a></td>
                                    <td><a href=\"deleteEmp.php?id={$user['empid']}\">delete</a></td></tr>";
						}
                    ?>
                </table>
			</fieldset>
		</main>

			<br><br><hr><hr>

		<footer>
			<div align= "center">
				<a href="#">FAQ</a> &ensp;&ensp;
				<a href="#">Terms and Conditions</a> &ensp;&ensp;
				<a href="#">Privacy Policy</a> &ensp;&ensp;
				<a href="#">And More</a> &ensp;&ensp; &ensp;&ensp;
			</div>
			<br>
			<div align= "center" >
				<a href="#">&copy; 2023 | Company name </a> &ensp;&ensp;
			</div>
		</footer>

	</form>
	
</body>
</html>