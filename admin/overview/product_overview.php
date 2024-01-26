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
<style>
    body {
        background-image: url(../img/5mqp7trvxov51.jpg);
    }
</style>
<body class="bg-dark">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="./admin/overview/users_overview.php">Users</a></li>
                                <li><a class="dropdown-item" href="./admin/overview/product_overview.php">Products</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Products</h2>
                        <p style="text-align:left;">
                            <button class="btn btn-primary;" data-toggle="modal" data-target="#exampleModal">Add Product</button>
                            <span style="float:right;">
                                <a href="users_overview.php" style="text-align: right;">Go to Users</a>
                            </span>
                        </p>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>