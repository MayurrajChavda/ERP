<?php 
    include('../components/header.php');
    if(!$_SESSION){header('location:../login');}
    else{$username = $_SESSION["username"];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="bg-light py-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <p class="fs-5 m-0">Counsellor</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex justify-content-end align-items-start">
                    <input type="month" class="rounded-0 form-control">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 d-flex bg-info p-3 align-items-center">
                <i class="fa-solid fa-chalkboard-user text-white bg-primary fs-2 p-4 rounded-circle"></i>
                <div class="ms-3 flex-grow-1">
                    <p class="m-0 text-white fs-3" style="border-bottom:1px dashed white;">Students</p>
                    <p class="m-0 text-white fs-4 border-light border-bottom">25</p>
                    <a href="" class="text-decoration-none">
                        <p class="m-0 text-white text-end">
                            View details
                            <i class="fa-solid fa-angles-right"></i>
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 d-flex bg-warning p-3 align-items-center">
                <i class="fa-solid fa-check text-white bg-secondary fs-2 p-4 rounded-circle"></i>
                <div class="ms-3 flex-grow-1">
                    <p class="m-0 text-white fs-3" style="border-bottom:1px dashed white;">Complete</p>
                    <p class="m-0 text-white fs-4 border-light border-bottom">52</p>
                    <a href="" class="text-decoration-none">
                        <p class="m-0 text-white text-end">
                            View details
                            <i class="fa-solid fa-angles-right"></i>
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 d-flex bg-primary p-3 align-items-center">
                <i class="fa-solid fa-book text-white bg-info fs-2 p-4 rounded-circle"></i>
                <div class="ms-3 flex-grow-1">
                    <p class="m-0 text-white fs-3" style="border-bottom:1px dashed white;">Total batch</p>
                    <p class="m-0 text-white fs-4 border-light border-bottom">11</p>
                    <a href="" class="text-decoration-none">
                        <p class="m-0 text-white text-end">
                            View details
                            <i class="fa-solid fa-angles-right"></i>
                        </p>
                    </a>
                </div>
            </div>

        </div>
    </div>



    <div class="container p-0">
        <div class="accordion mt-5" id="accordionExample">
            <div class="accordion-item border-0 rounded-0">
                <p class="accordion-header m-0">
                    <button class="accordion-button text-white bg-danger rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        My Weekly Time Table
                    </button>
                </p>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div style="max-width:100%;overflow:auto">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width:calc(100%/8);">
                                            <p class="text-center">Time</p>
                                        </th>
                                        <th scope="col" style="width:calc(100%/8);" class="bg-primary">
                                            <p class="text-center text-white m-0">Monday</p>
                                            <p class="text-center text-white m-0 fw-light" style="font-size:80%">Oct 9,2023</p>
                                        </th>
                                        <th scope="col" style="width:calc(100%/8);" class="bg-primary border-start">
                                            <p class="text-center text-white m-0">Tuesday</p>
                                            <p class="text-center text-white m-0 fw-light" style="font-size:80%">Oct 10,2023</p>
                                        </th>
                                        <th scope="col" style="width:calc(100%/8);" class="bg-primary border-start">
                                            <p class="text-center text-white m-0">Wednesday</p>
                                            <p class="text-center text-white m-0 fw-light" style="font-size:80%">Oct 11,2023</p>
                                        </th>
                                        <th scope="col" style="width:calc(100%/8);" class="bg-primary border-start">
                                            <p class="text-center text-white m-0">Thursday</p>
                                            <p class="text-center text-white m-0 fw-light" style="font-size:80%">Oct 12,2023</p>
                                        </th>
                                        <th scope="col" style="width:calc(100%/8);" class="bg-primary border-start">
                                            <p class="text-center text-white m-0">Friday</p>
                                            <p class="text-center text-white m-0 fw-light" style="font-size:80%">Oct 13,2023</p>
                                        </th>
                                        <th scope="col" style="width:calc(100%/8);" class="bg-primary border-start">
                                            <p class="text-center text-white m-0">Saturday</p>
                                            <p class="text-center text-white m-0 fw-light" style="font-size:80%">Oct 14,2023</p>
                                        </th>
                                        <th scope="col" style="width:calc(100%/8);" class="bg-primary border-start">
                                            <p class="text-center text-white m-0">Sunday</p>
                                            <p class="text-center text-white m-0 fw-light" style="font-size:80%">Oct 15,2023</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">08:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">09:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">10:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">11:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">12:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">13:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">14:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">15:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">16:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size:90%">17:00 AM</th>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                        <td>
                                            <p class="m-0 text-center" style="font-size:80%">Javascript</p>
                                            <p class="m-0 text-center" style="font-size:80%">08:00 AM - 09:00 AM</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>