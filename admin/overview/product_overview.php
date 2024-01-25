<?php 

    require_once("../config/db.php");
    $query = "SELECT product_id, product_name, product_price, product_quantity FROM products";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="../css/bootstrap.min.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Products</h2>
                        <a href="users_overview.php">Go to users</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td> Product ID </td>
                            <td> Product Name </td>
                            <td> Product Price </td>
                            <td> Product Quantity </td>
                            <td> Edit  </td>
                            <td> Delete </td>
                        </tr>
                        <?php 
                            while($row=mysqli_fetch_assoc($result)){
                                $ProductID = $row['product_id'];
                                $ProductName = $row['product_name'];
                                $ProductPrice = $row['product_price'];
                                $ProductQuantity = $row['product_quantity'];
                        ?>
                        <tr>
                            <td><?php echo $ProductID ?></td>
                            <td><?php echo $ProductName ?></td>
                            <td>€<?php echo $ProductPrice ?></td>
                            <td><?php echo $ProductQuantity ?></td>
                            <td><a href="#" class="btn btn-pencil">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>        
                        <?php } ?>                                                                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>