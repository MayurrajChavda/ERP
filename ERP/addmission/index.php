<?php
    include('../components/header.php');
    $status_alert = false;
    if(!$_SESSION){header('location:../login');}
    else{$username = $_SESSION["username"];}
    if(isset($_POST["saveuser"]))
    {
        $std_name = $_POST['std_name'];
        $std_dob = $_POST['std_dob'];
        $std_sex = $_POST['std_sex'];
        $std_education = $_POST['std_education'];
        $std_id_num = $_POST['std_id_num'];
        $std_id_type = $_POST['std_id_type'];
        $std_religion = $_POST['std_religion'];
        $std_caste = $_POST['std_caste'];
        $std_mother_tongue = $_POST['std_mother_tongue'];
        $std_country = $_POST['std_country'];
        $std_state = $_POST['std_state'];
        $std_address = $_POST['std_address'];
        $std_zip_code = $_POST['std_zip_code'];
        $std_personal_phone = $_POST['std_personal_phone'];
        $std_parent_phone = $_POST['std_parent_phone'];
        $std_email = $_POST['std_email'];
        $std_img_url = $_POST['std_img_url'];
        $std_bank_name = $_POST['std_bank_name'];
        $std_account_num = $_POST['std_account_num'];
        $std_ifsc_code = $_POST['std_ifsc_code'];
        
        $sql = "INSERT INTO bascom.students (`name`, `dob`, `gender`, `education`, `national_id`, `id_num`, `religion`, `caste`, `mother_tongue`, `country`, `state`, `address`, `zip_code`, `personal_phone`, `parent_phone`, `email`, `bank_name`, `bank_account_no`, `bank_ifsc_code`, `image_url`) VALUES ('{$std_name}','{$std_dob}','{$std_sex}','{$std_education}','{$std_id_num}','{$std_id_type}','{$std_religion}','{$std_caste}','{$std_mother_tongue}','{$std_country}','{$std_state}','{$std_address}','{$std_zip_code}','{$std_personal_phone}','{$std_parent_phone}','{$std_email}','{$std_bank_name}','{$std_account_num}','{$std_ifsc_code}','{$std_img_url}')";

        if(mysqli_query($conn, $sql) or die ("Some error"))
        {
            $status_alert = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addmission</title>
</head>
<body>
    <?php
        if($status_alert)
        {
            echo '
            <div class="bg-success">
                <div class="container alert text-white alert-dismissible fade show" role="alert">
                    <strong>Congratulations!</strong> You should check in on some of those fields below.
                    <button type="button" class="rounded-0 btn-close bg-white p-3 mt-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>';
        }
    ?>
    <form method="post">
    <div class="container">
        <div class="row mt-5 position-sticky top-0 bg-white">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="fs-2">Student Addmission</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-end align-items-start">
                <a href="/ERP" class="btn btn-secondary rounded-0 w-25 me-3">Cancel</a>
                <button type="submit" class="btn btn-success rounded-0 w-25" name="saveuser">Save</button>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <p class="fs-5 px-3 py-2 bg-light">Personal details</p>
                <table class="table w-100">
                    <tr>
                        <td>Name</td>
                        <td>
                            <input class="w-100 border-0" name="std_name" placeholder="Enter full name" type="text" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>
                            <input class="w-100 border-0" name="std_dob" type="date" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input class="me-2" type="radio" value="m" name="std_sex" required/>Male
                            <input class="ms-5 me-2" type="radio" value="f" name="std_sex" required/>Female
                        </td>
                    </tr>
                    <tr>
                        <td>Education</td>
                        <td>
                            <select id="" name="std_education" class="w-100 border-0" required>
                                <option value="">Select Education</option>
                                <option value="SSC">SSC</option>
                                <option value="HSC">HSC</option>
                                <option value="BA">BA</option>
                                <option value="BE">BE</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>ID proof</td>
                        <td class="d-flex">
                            <input class="w-75 border-0" type="text" placeholder="Enter id number" name="std_id_num" required/>
                            <select id="" class="w-25 border-0"name="std_id_type" required>
                                <option value="">Select ID</option>
                                <option value="Adhar card">Adhar card</option>
                                <option value="Pan card">Pancard</option>
                                <option value="College id">College id</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Religion</td>
                        <td>
                            <select id="" name="std_religion" class="w-100 border-0" required>
                                <option value="">Select religion</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Panjabi">Panjabi</option>
                                <option value="Christian">Christian</option>
                                <option value="Jain">Jain</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Caste</td>
                        <td>
                            <select id="" name="std_caste" class="w-100 border-0" required>
                                <option value="">Select caste</option>
                                <option value="General">General</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mother tongue</td>
                        <td>
                            <select id="" name="std_mother_tongue" class="w-100 border-0" required>
                                <option value="">Select mother tongue</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Gujarati">Gujarati</option>
                                <option value="Marathi">Marathi</option>
                                <option value="English">English</option>
                                <option value="Panjabi">Panjabi</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <p class="fs-5 px-3 py-2 bg-light">Contact details</p>
                <table class="table w-100">
                    <tr>
                        <td>Country</td>
                        <td>
                            <select id="" name="std_country" class="w-100 border-0" required>
                                <option value="">Select your country</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="Canada">Canada</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td>
                            <select id="" name="std_state" class="w-100 border-0" required>
                                <option value="">Select state</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Panjab">Panjab</option>
                                <option value="Madhyapradesh">Madhyapradesh</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            <textarea class="w-100 border-0" name="std_address" placeholder="Enter full address" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Zip code</td>
                        <td>
                            <input class="w-100 border-0" name="std_zip_code" type="text" placeholder="Enter zipcode" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Personal Phone</td>
                        <td>
                            <input class="w-100 border-0" name="std_personal_phone" type="text" placeholder="Enter personal phone number" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Perent Phone</td>
                        <td>
                            <input class="w-100 border-0" name="std_parent_phone" type="text" placeholder="Enter parent phone number" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input class="w-100 border-0" name="std_email" type="text" placeholder="Enter your email address" required/>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <p class="fs-5 px-3 py-2 bg-light">Media</p>
                <table class="table w-100">
                    <tr>
                        <td>Upload your photo</td>
                        <td>
                            <input type="file" name="std_img_url" required/>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <p class="fs-5 px-3 py-2 bg-light">Bank details</p>
                <table class="table w-100">
                    <tr>
                        <td>Bank name</td>
                        <td>
                            <input class="w-100 border-0" name="std_bank_name" placeholder="Enter bank name" type="text" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Account number</td>
                        <td>
                            <input class="w-100 border-0" name="std_account_num" placeholder="Enter bank account number" type="text" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>IFSC code</td>
                        <td>
                            <input class="w-100 border-0" name="std_ifsc_code" placeholder="Enter ifsc code" type="text" required/>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </form>
</body>
</html>