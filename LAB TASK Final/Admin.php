<html>
<head>
	<title>Admin</title>
</head>
<body>
	<?php
        session_start();
        echo "<h1>Wellcome {$_SESSION['Name']}</h1>";
    ?>
    <a href="adprofile.php">Profile</a>
    <a href="changepass.php">Change Password</a><br>
    <a href="logout.php">Change Password</a><br>

</body>
</html>