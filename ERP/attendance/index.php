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
    <title>Attendance</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5 position-sticky top-0 bg-white">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <p class="fs-2 m-0">Student attendance</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 d-flex justify-content-end align-items-start">
                <input type="date" class="rounded-0 form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4">
                <div class="bg-warning p-3">
                    <p class="m-0 fs-4 text-white">Web development</p>
                    <p class="m-0 fs-6 text-white mt-3">Time : 08:00 am to 09:00 pm</p>
                    <p class="m-0 fs-6 text-white">Subject : Javascript</p>
                    <div class="dropdown text-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select topic
                        </a>
                        <ul class="dropdown-menu border-0" style="height:300px;overflow:auto">
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                        </ul>
                    </div>
                    <table class="w-100 text-white my-3">
                        <tr>
                            <td>Student</td>
                            <td>Present</td>
                            <td>Absent</td>
                            <td>Leave</td>
                        </tr>
                        <tr>
                            <td>Pooja</td>
                            <td><input type="radio" name="std1" checked></td>
                            <td><input type="radio" name="std1"></td>
                            <td><input type="radio" name="std1"></td>
                        </tr>
                        <tr>
                            <td>Priya</td>
                            <td><input type="radio" name="std2" checked></td>
                            <td><input type="radio" name="std2"></td>
                            <td><input type="radio" name="std2"></td>
                        </tr>
                        <tr>
                            <td>Chirag</td>
                            <td><input type="radio" name="std3" checked></td>
                            <td><input type="radio" name="std3"></td>
                            <td><input type="radio" name="std4"></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger border-0 rounded-0 px-5">Save</button>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4">
                <div class="bg-warning p-3">
                    <p class="m-0 fs-4 text-white">Web development</p>
                    <p class="m-0 fs-6 text-white mt-3">Time : 08:00 am to 09:00 pm</p>
                    <p class="m-0 fs-6 text-white">Subject : Javascript</p>
                    <div class="dropdown text-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select topic
                        </a>
                        <ul class="dropdown-menu border-0" style="height:300px;overflow:auto">
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                        </ul>
                    </div>
                    <table class="w-100 text-white my-3">
                        <tr>
                            <td>Student</td>
                            <td>Present</td>
                            <td>Absent</td>
                            <td>Leave</td>
                        </tr>
                        <tr>
                            <td>Pooja</td>
                            <td><input type="radio" name="std1" checked></td>
                            <td><input type="radio" name="std1"></td>
                            <td><input type="radio" name="std1"></td>
                        </tr>
                        <tr>
                            <td>Priya</td>
                            <td><input type="radio" name="std2" checked></td>
                            <td><input type="radio" name="std2"></td>
                            <td><input type="radio" name="std2"></td>
                        </tr>
                        <tr>
                            <td>Chirag</td>
                            <td><input type="radio" name="std3" checked></td>
                            <td><input type="radio" name="std3"></td>
                            <td><input type="radio" name="std4"></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger border-0 rounded-0 px-5">Save</button>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4">
                <div class="bg-warning p-3">
                    <p class="m-0 fs-4 text-white">Web development</p>
                    <p class="m-0 fs-6 text-white mt-3">Time : 08:00 am to 09:00 pm</p>
                    <p class="m-0 fs-6 text-white">Subject : Javascript</p>
                    <div class="dropdown text-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select topic
                        </a>
                        <ul class="dropdown-menu border-0" style="height:300px;overflow:auto">
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                        </ul>
                    </div>
                    <table class="w-100 text-white my-3">
                        <tr>
                            <td>Student</td>
                            <td>Present</td>
                            <td>Absent</td>
                            <td>Leave</td>
                        </tr>
                        <tr>
                            <td>Pooja</td>
                            <td><input type="radio" name="std1" checked></td>
                            <td><input type="radio" name="std1"></td>
                            <td><input type="radio" name="std1"></td>
                        </tr>
                        <tr>
                            <td>Priya</td>
                            <td><input type="radio" name="std2" checked></td>
                            <td><input type="radio" name="std2"></td>
                            <td><input type="radio" name="std2"></td>
                        </tr>
                        <tr>
                            <td>Chirag</td>
                            <td><input type="radio" name="std3" checked></td>
                            <td><input type="radio" name="std3"></td>
                            <td><input type="radio" name="std4"></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger border-0 rounded-0 px-5">Save</button>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4">
                <div class="bg-warning p-3">
                    <p class="m-0 fs-4 text-white">Web development</p>
                    <p class="m-0 fs-6 text-white mt-3">Time : 08:00 am to 09:00 pm</p>
                    <p class="m-0 fs-6 text-white">Subject : Javascript</p>
                    <div class="dropdown text-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select topic
                        </a>
                        <ul class="dropdown-menu border-0" style="height:300px;overflow:auto">
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                        </ul>
                    </div>
                    <table class="w-100 text-white my-3">
                        <tr>
                            <td>Student</td>
                            <td>Present</td>
                            <td>Absent</td>
                            <td>Leave</td>
                        </tr>
                        <tr>
                            <td>Pooja</td>
                            <td><input type="radio" name="std1" checked></td>
                            <td><input type="radio" name="std1"></td>
                            <td><input type="radio" name="std1"></td>
                        </tr>
                        <tr>
                            <td>Priya</td>
                            <td><input type="radio" name="std2" checked></td>
                            <td><input type="radio" name="std2"></td>
                            <td><input type="radio" name="std2"></td>
                        </tr>
                        <tr>
                            <td>Chirag</td>
                            <td><input type="radio" name="std3" checked></td>
                            <td><input type="radio" name="std3"></td>
                            <td><input type="radio" name="std4"></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger border-0 rounded-0 px-5">Save</button>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4">
                <div class="bg-warning p-3">
                    <p class="m-0 fs-4 text-white">Web development</p>
                    <p class="m-0 fs-6 text-white mt-3">Time : 08:00 am to 09:00 pm</p>
                    <p class="m-0 fs-6 text-white">Subject : Javascript</p>
                    <div class="dropdown text-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select topic
                        </a>
                        <ul class="dropdown-menu border-0" style="height:300px;overflow:auto">
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                        </ul>
                    </div>
                    <table class="w-100 text-white my-3">
                        <tr>
                            <td>Student</td>
                            <td>Present</td>
                            <td>Absent</td>
                            <td>Leave</td>
                        </tr>
                        <tr>
                            <td>Pooja</td>
                            <td><input type="radio" name="std1" checked></td>
                            <td><input type="radio" name="std1"></td>
                            <td><input type="radio" name="std1"></td>
                        </tr>
                        <tr>
                            <td>Priya</td>
                            <td><input type="radio" name="std2" checked></td>
                            <td><input type="radio" name="std2"></td>
                            <td><input type="radio" name="std2"></td>
                        </tr>
                        <tr>
                            <td>Chirag</td>
                            <td><input type="radio" name="std3" checked></td>
                            <td><input type="radio" name="std3"></td>
                            <td><input type="radio" name="std4"></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger border-0 rounded-0 px-5">Save</button>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4">
                <div class="bg-warning p-3">
                    <p class="m-0 fs-4 text-white">Web development</p>
                    <p class="m-0 fs-6 text-white mt-3">Time : 08:00 am to 09:00 pm</p>
                    <p class="m-0 fs-6 text-white">Subject : Javascript</p>
                    <div class="dropdown text-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select topic
                        </a>
                        <ul class="dropdown-menu border-0" style="height:300px;overflow:auto">
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                        </ul>
                    </div>
                    <table class="w-100 text-white my-3">
                        <tr>
                            <td>Student</td>
                            <td>Present</td>
                            <td>Absent</td>
                            <td>Leave</td>
                        </tr>
                        <tr>
                            <td>Pooja</td>
                            <td><input type="radio" name="std1" checked></td>
                            <td><input type="radio" name="std1"></td>
                            <td><input type="radio" name="std1"></td>
                        </tr>
                        <tr>
                            <td>Priya</td>
                            <td><input type="radio" name="std2" checked></td>
                            <td><input type="radio" name="std2"></td>
                            <td><input type="radio" name="std2"></td>
                        </tr>
                        <tr>
                            <td>Chirag</td>
                            <td><input type="radio" name="std3" checked></td>
                            <td><input type="radio" name="std3"></td>
                            <td><input type="radio" name="std4"></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger border-0 rounded-0 px-5">Save</button>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-4">
                <div class="bg-warning p-3">
                    <p class="m-0 fs-4 text-white">Web development</p>
                    <p class="m-0 fs-6 text-white mt-3">Time : 08:00 am to 09:00 pm</p>
                    <p class="m-0 fs-6 text-white">Subject : Javascript</p>
                    <div class="dropdown text-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select topic
                        </a>
                        <ul class="dropdown-menu border-0" style="height:300px;overflow:auto">
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                            <li>
                                <p class="dropdown-item">Introduction
                                    <input type="checkbox" class="ms-2">
                                </p>
                            </li>
                        </ul>
                    </div>
                    <table class="w-100 text-white my-3">
                        <tr>
                            <td>Student</td>
                            <td>Present</td>
                            <td>Absent</td>
                            <td>Leave</td>
                        </tr>
                        <tr>
                            <td>Pooja</td>
                            <td><input type="radio" name="std1" checked></td>
                            <td><input type="radio" name="std1"></td>
                            <td><input type="radio" name="std1"></td>
                        </tr>
                        <tr>
                            <td>Priya</td>
                            <td><input type="radio" name="std2" checked></td>
                            <td><input type="radio" name="std2"></td>
                            <td><input type="radio" name="std2"></td>
                        </tr>
                        <tr>
                            <td>Chirag</td>
                            <td><input type="radio" name="std3" checked></td>
                            <td><input type="radio" name="std3"></td>
                            <td><input type="radio" name="std4"></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger border-0 rounded-0 px-5">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>