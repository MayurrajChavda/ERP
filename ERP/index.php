<?php
    include('components/header.php');
    if(!$_SESSION){header('location:./login');}
    else{$username = $_SESSION["username"];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $username;?></title>
</head>
<body>
    
</body>
</html>