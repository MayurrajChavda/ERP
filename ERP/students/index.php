<?php
    include('../components/header.php');
    if(!$_SESSION){header('location:../login');}
    else{$username = $_SESSION["username"];}
    $sql = "SELECT * from bascom.students order by id desc";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students information</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="fs-2">Students</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-end align-items-start">
                <input class="rounded-0 form-control" placeholder="Search by keyword"/>
            </div>
        </div>
        <div style="max-width:100%;overflow:auto">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Education</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            <?php
                while($row = mysqli_fetch_row($result))
                {
                    echo
                    '<tr>
                        <th scope="row">'.$row[1].'</th>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td>'.$row[15].'</td>
                        <td>'.$row[16].'</td>
                        <td><a href="details.php?id='.$row[0].'">Edit</a></td>
                    </tr>';
                }
            ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>