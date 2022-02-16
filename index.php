<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include './shared/connect.php' ?>
    <?php include './shared/header.php' ?>
    <h1 class="text-center text-primary my-3">Welcome to Our Store</h1>
    <h1 class="text-center text-success mb-4">Shop by Catagory</h1>

    <div class="container">
        <div class="row">
            <!-- Php Code -->
            <?php
            $sql = "Select * from `clothes`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                // $row= mysqli_fetch_assoc($result);
                // echo $row['catagory_name'];
                while ($row = mysqli_fetch_assoc($result)) {
                    $catagory_id = $row['catagory_id'];
                    $catagory_name = $row['catagory_name'];
                    $catagory_desc = $row['catagory_desc'];
                    $catagory_price = $row['catagory_price'];
                    $catagory_image = $row['catagory_image'];
                    echo '
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src=' . $catagory_image . ' class="card-img-top" alt="..." style="object-fit:contain; height:200px; width:200px">
                        <div class="card-body">
                            <h5 class="card-title">' . $catagory_name . '</h5>
                            <p class="card-text">' . substr($catagory_desc, 0, 55) . '...</p>
                            <h6>' . $catagory_price . '/-</h6>
                            <a href="details.php?details.id=' . $catagory_id . '" class="btn btn-primary">Go detail</a>
                        </div>
                    </div>
                </div>
                    ';
                }
            }
            ?>

        </div>
    </div>
</body>

</html>