
<!DOCTYPE html>

<head>
    <title>Display</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="" action="" enctype="">
			<fieldset>
				<legend>Employee Information</legend>
				<table style="border-collapse: collapse;" border="1px">
                    <tr>
                        <td >Name</td>
                        <td>Profit</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                         $con = mysqli_connect('localhost', 'root', '', 'product_db');
                         $sql = "select * from products";
                         $result = mysqli_query($con, $sql);
                         while($row = mysqli_fetch_assoc($result)){
                            /* print_r($row);
                            echo "<br>"; */
                            if($row['Display'] == 0) continue;
                            $Name = $row["Name"];
                            $buyP = $row['Buying_Price'];
                            $sellP = $row['Selling_Price'];
                            $profit = $sellP - $buyP;
                            echo "<tr><td>{$Name}</td>";
                            echo "<td>{$profit}</td>";
                            echo "<td><a href=\"edit.php?id={$row['Id']}\">edit</a></td>";
                            echo "<td><a href=\"delete.php?id={$row['Id']}\">delete</a></td></tr>";
                        }
                    ?>
                </table>
			</fieldset>
	</form>
	
</body>
</html>