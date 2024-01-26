<?php 
    require_once("../config/db.php");
    $query = " select * from users ";
    $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" a href="../css/style.css"/>
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">Home</a></li>
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
                        <h2 class="display-6 text-center a">Users</h2>
                        <p style="text-align:left;">
                            <button class="btn btn-primary;" data-toggle="modal" data-target="#exampleModal">Add user</button>
                            <span style="float:right;">
                                <a href="product_overview.php" style="text-align: right;">Go to products</a>
                            </span>
                        </p>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td> User ID </td>
                            <td> User Name </td>
                            <td> User Email </td>
                            <td> User Tel </td>
                            <td> Password </td>
                            <td> Edit  </td>
                            <td> Delete </td>
                        </tr>
                        <?php 
                            while($row=mysqli_fetch_assoc($result)){
                                $UserID = $row['user_id'];
                                $UserName = $row['user_name'];
                                $UserEmail = $row['user_email'];
                                $UserTel = $row['user_tel'];
                                $UserPass = $row['password'];

                        ?>
                        <tr>
                            <td><?php echo $UserID ?></td>
                            <td><?php echo $UserName ?></td>
                            <td><?php echo $UserEmail ?></td>
                            <td><?php echo $UserTel ?></td>
                            <td><?php echo $UserPass ?></td>
                            <td><button class="btn btn-primary;" data-toggle="modal" data-target="#exampleModal">Edit</button></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="UserN" placeholder="Enter name">
                        </div>                            
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" class="form-control" name="UserM" placeholder="Enter email">
                        </div>                            
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="text" class="form-control" name="UserT"placeholder="Enter telephone">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="UserP" placeholder="Password">
                        </div>
                        <input type="submit" name="submit"/>
                    </form>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>