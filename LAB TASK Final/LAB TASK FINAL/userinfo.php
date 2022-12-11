<html>
<head>
	<title>Profile</title>
</head>
<body>
	<table>
        <tr>
            <td colspan="2">Profile</td>
        </tr>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>USER TYPE</td>
        </tr>
        <?php
            session_start();
            require_once('db.php');
            $users=alluser();
            foreach($users as $user){
                echo "<tr>";
                echo "<td>{$user['Id']}</td>";
                echo "<td>{$user['Name']}</td>";
                echo "<td>{$user['Email']}</td>";
                echo "<td>{$user['Type']}</td>";
                echo "</tr>";
            }
            
        ?>
        <tr>
            <td colspan="2"><a href="homeCheck.php">Go Home</td>
        </tr>
    </table>

</body>
</html>