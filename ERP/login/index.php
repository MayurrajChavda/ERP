<?php
    session_start();
    include('../components/connection.php');
    if($_SESSION)
    {
       header('location:/ERP');
    }
    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * from bascom.staff_login where username = '{$username}' and password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $user["username"];
        $_SESSION["password"] = $user["password"];
        header('location:/ERP');
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 m-auto bg-light p-0">
                <p class="m-0 bg-info py-3 ps-5">
                    <img src="../images/logo.png" style="width:200px" alt="">
                </p>
                <form class="form p-5" method="post">
                    <h2 class="mb-3">Sign In</h2>
                    <label for="">Username</label>
                    <input class="form-control border-1 rounded-0 bg-transparent mb-3" type="text" name="username" required>
                    <label for="">Password</label>
                    <input class="form-control border-1 rounded-0 bg-transparent mb-3" type="password" name="password" required>
                    <input class="form-control border-0 rounded-0 btn btn-primary" type="submit" value="Login" name="login">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>