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
    <title>View Records</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Users</h2>
                        <a href="product_overview.php">Go to Products</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td> User ID </td>
                            <td> User Name </td>
                            <td> User Email </td>
                            <td> User Age </td>
                            <td> Edit  </td>
                            <td> Delete </td>
                        </tr>
                        <?php 
                            while($row=mysqli_fetch_assoc($result)){
                                $UserID = $row['user_id'];
                                $UserName = $row['user_name'];
                                $UserEmail = $row['user_lastname'];
                                $UserAge = $row['user_tel'];
                        ?>
                        <tr>
                            <td><?php echo $UserID ?></td>
                            <td><?php echo $UserName ?></td>
                            <td><?php echo $UserEmail ?></td>
                            <td><?php echo $UserAge ?></td>
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