
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_POST['name']) || !isset($_POST['buying_price']) || !isset($_POST['selling_price'])){
        echo "Wellcome";
    }
    else{
    $Id = $_SESSION['id'];
    $Name = $_POST["name"];
    $buyP = $_POST['buying_price'];
    $sellP = $_POST['selling_price'];
    $display = 0;
    if(isset($_POST['display'])) $display = 1;
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql = "UPDATE products SET Name = '{$Name}', Buying_Price= '{$buyP}', Selling_Price = '{$sellP}' WHERE Id = {$Id};";
    $status = mysqli_query($con, $sql);
    
    if($status){
        echo "Updated";
    }else{
        echo "DB insert error!";
    }
}
    #$user = mysqli_fetch_assoc($result);
    
?>
        <form method="post" action="edit.php" enctype="">
            <fieldset>
                <legend><b>Edit PRODUCT</b></legend>
                <table>
                    <?php
                    
                        if(isset($_GET['id'])){
                            $_SESSION['id'] = $_GET['id'];
                        }
                        $id = $_SESSION['id'];
                        $_SESSION['get'] = 0;
                        $con = mysqli_connect('localhost', 'root', '', 'product_db');
                        $sql = "select * from products where Id = '{$id}'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $Name = $row["Name"];
                        $buyP = $row['Buying_Price'];
                        $sellP = $row['Selling_Price'];
                        $display = $row['Display'];
                        echo "  <tr>
                                    <td>Name<br>
                                        <input type=\"text\" name=\"name\" value=\"{$Name}\" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Buying Price<br>
                                        <input type=\"number\" name=\"buying_price\" value=\"{$buyP}\" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selling Price<br>
                                        <input type=\"number\" name=\"selling_price\" value=\"{$sellP}\" >
                                    </td>
                                </tr>";
                        if($display == 1){
                            echo "  <tr>
                                        <td>
                                            <input type=\"checkbox\" name=\"display\" value=\"\" checked>Display
                                        </td>
                                    </tr>";
                        }
                        else{
                            echo "  <tr>
                                        <td>
                                            <input type=\"checkbox\" name=\"display\" value=\"\">Display
                                        </td>
                                    </tr>";
                        }
                            
                    ?>
                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Save"/>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>