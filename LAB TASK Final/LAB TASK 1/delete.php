<html>
<head>
    <title>Delete Product</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['id']) && $_SESSION['get'] == 0){
        echo "Wellcome";
    }
    else{
    $Id = $_SESSION['id'];
    $display = 0;
    if(isset($_POST['display'])) $display = 1;
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql = "DELETE FROM products WHERE Id = {$Id};";
    $status = mysqli_query($con, $sql);
    $_SESSION['get'] = 0;
    if($status){
        echo "Data Deleted";
    }else{
        echo "DB insert error!";
    }
}
    #$user = mysqli_fetch_assoc($result);
    
?>
        <form method="post" action="delete.php" enctype="">
            <fieldset>
                <legend><b>Delete PRODUCT</b></legend>
                <table>
                    <?php
                    
                        if(isset($_GET['id'])){
                            $_SESSION['id'] = $_GET['id'];
                        
                        $id = $_SESSION['id'];
                        $_SESSION['get'] = 1;
                        $con = mysqli_connect('localhost', 'root', '', 'product_db');
                        $sql = "select * from products where Id = '{$id}'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $Name = $row["Name"];
                        $buyP = $row['Buying_Price'];
                        $sellP = $row['Selling_Price'];
                        $display = $row['Display'];
                        echo "  <tr>
                                    <td>Name
                                        {$Name}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Buying Price:
                                        {$buyP}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selling Price:
                                        {$sellP}
                                    </td>
                                </tr>";
                        if($display == 1){
                            echo "  <tr>
                                        <td>
                                            Displayable:Yes
                                        </td>
                                    </tr>";
                        }
                        else{
                            echo "  <tr>
                                        <td>
                                            Displayable:No
                                        </td>
                                    </tr>";
                        }}
                        else{
                            echo "  <tr>
                                        <td>
                                            Data Removed
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
                            <input type="submit" name="submit" value="Delete"/>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>