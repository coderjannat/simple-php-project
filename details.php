<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include './shared/connect.php' ?>
    <?php include './shared/header.php' ?>
    <?php
    $id = $_GET['details_id'];
    // echo $id;
    $sql = "Select * from `clothes` where catagory_id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $catagory_id = $row['catagory_id'];
    $catagory_name = $row['catagory_name'];
    $catagory_desc = $row['catagory_desc'];
    $catagory_price = $row['catagory_price'];
    $catagory_image = $row['catagory_image'];
    // echo $catagory_image;
    ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"><?php echo $catagory_name ?></h1>
            <p class="lead"><?php echo $catagory_desc ?></p>
            <hr class="my-4">
            <a class="btn btn-dark btn-lg" href="index.php" role="button">Continue Shopping</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img src=<?php echo $catagory_image?> alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12">
                <h1 class="display-4"><?php echo $catagory_name ?></h1>
            <p class="lead"><?php echo $catagory_desc ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>