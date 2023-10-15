<?php
    include('../components/header.php');
    if(!$_SESSION){header('location:../login');}
    else{$username = $_SESSION["username"];}
    $id = $_GET['id'];
    $sql = "SELECT * from bascom.time_table where id = {$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time table</title>
</head>
<body>
    <div class="container">
        <p class="fs-2 mt-5 text-white ps-2 bg-secondary">Time table</p>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="d-flex">
                    <input type="text" value="<?php echo $row['title']?>" class="form-control rounded-0">
                    <button class="btn btn-primary rounded-0">Change</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>