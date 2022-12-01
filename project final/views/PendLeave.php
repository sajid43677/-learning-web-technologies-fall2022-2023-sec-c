<?php
    if(isset($_GET['succ'])){
        unset($_GET);
    }
?>

<!DOCTYPE html>

<head>
    <title>Pending Leave Request</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="post" action="../controller/CheckPendLeave.php" enctype="">

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
				<a href="Admin.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Pending Leave Reaquest</legend>
					<ul align="center" type="square">
                    <table height=90% width=60% align = "center">
                        <tr>
                            <td >Employee Name</td>
                            <td>Applied leave date</td>
                            <td>Duration</td>
                            <td>Approval</td>
                        </tr>
                        <?php
                            require_once('../models/LeaveInfo.php');
                            require_once('../models/EmployeeInfo.php');
							$users = allapplicant();
                            foreach($users as $user){
								$user['id'] = $user['empid'];
								$emp = searchUserById($user);
                                echo "<tr><td>{$emp['username']}</td>";
                                echo "<td>".$user['date']."</td><td>".$user['duration']."</td>";
								if($user['approval'] == "pending"){
									echo "<td><a href=\"../controller/CheckPendLeave.php?id={$user['leaveid']}&type=approved\">Approve</a>
									<a href=\"../controller/CheckPendLeave.php?id={$user['leaveid']}&type=rejected\">Reject</a></td></tr>";
								}
								else{
									echo "<td>{$user['approval']}</td></tr>";
								}
        
                            }
                        ?>
                    </table>
					</ul>
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