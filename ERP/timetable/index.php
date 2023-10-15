<?php
    include('../components/header.php');
    if(!$_SESSION){header('location:../login');}
    else{$username = $_SESSION["username"];}

    $sql_select_subjects = "SELECT * FROM bascom.cources";
    $sql_select_students = "SELECT * FROM bascom.students";
    $sql_time_table = "SELECT * FROM bascom.time_table order by id desc";

    $result_select_subjects = mysqli_query($conn, $sql_select_subjects);
    $result_select_students = mysqli_query($conn, $sql_select_students);
    $result_time_table = mysqli_query($conn, $sql_time_table);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students information</title>
</head>
<body>

<!-- Add new time table -->

<div class="modal fade" id="addNewTimeTable" tabindex="-1" aria-labelledby="addNewTimeTableLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content rounded-0">
        <form action="add_time_table.php" method="post">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addNewTimeTableLabel">Add new time table</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <table class="table">
                            <tr>
                                <td>Title</td>
                                <td><input type="text" name="time_table_title" class="rounded-0 form-control" required/></td>
                            </tr>
                            <tr>
                                <td>Start Date</td>
                                <td><input type="date" name="time_table_start_date" class="rounded-0 form-control" required/></td>
                            </tr>
                            <tr>
                                <td>End date</td>
                                <td><input type="date" name="time_table_end_date" class="rounded-0 form-control" required/></td>
                            </tr>
                            <tr>
                                <td>Start time</td>
                                <td><input type="time" name="time_table_start_time" class="rounded-0 form-control" required/></td>
                            </tr>
                            <tr>
                                <td>End time</td>
                                <td><input type="time" name="time_table_end_time" class="rounded-0 form-control" required/></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <table class="table">
                            <tr>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn rounded-0 btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select subject
                                        </button>
                                        <ul class="subjects_ul dropdown-menu p-2 rounded-0" style="height:300px;overflow:auto;">
                                            <?php
                                            if (mysqli_num_rows($result_select_subjects) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result_select_subjects))
                                                {
                                                  echo '<li>'.$row['name'].'<input class="float-end" type="checkbox" value="'.$row['name'].'"/></li>';
                                                }
                                              } else {
                                                echo '<li><a class="dropdown-item" href="#">No subject</a></li>';
                                              }
                                            ?>
                                            
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <textarea type="text" class="font-80 w-100 bg-light p-2" id="selected_subjects" name="selected_subjects" readonly></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn rounded-0 btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select students
                                        </button>
                                        <ul class="students_ul dropdown-menu p-2 rounded-0" style="height:300px;overflow:auto;">
                                            <?php
                                            if (mysqli_num_rows($result_select_students) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result_select_students))
                                                {
                                                  echo '<li>'.$row['name'].'<input class="float-end" type="checkbox" value="'.$row['name'].'"/></li>';
                                                }
                                              } else {
                                                echo '<li><a class="dropdown-item" href="#">No subject</a></li>';
                                              }
                                            ?>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <textarea type="text" class="font-80 w-100 bg-light p-2" id="selected_students" name="selected_students" readonly></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn rounded-0 btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Current subject
                                        </button>
                                        <ul class="dropdown-menu rounded-0" id="current_subject_ul">
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <input class="form-control rounded-0 font-80" placeholder="Current subject" id="current_subject" name="current_subject" readonly/>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="rounded-0 btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="rounded-0 btn btn-primary">Save table</button>
            </div>
        </form>
        </div>
    </div>
</div>



    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3 d-flex justify-content-between align-items-start">
                <p class="fs-2 m-0">Time table</p>
                <button class="btn btn-success rounded-0" name="add_new" data-bs-toggle="modal" data-bs-target="#addNewTimeTable">Add new</button>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3 d-flex justify-content-end align-items-start">
                <input class="rounded-0 form-control" placeholder="Search by keyword"/>
                <button class="btn btn-primary rounded-0">Search</button>
            </div>
        </div>
        <div style="max-width:100%;overflow:auto">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th class="bg-primary text-white" scope="col">Batch name</th>
                    <th class="bg-primary text-white" scope="col">Current subject</th>
                    <th class="bg-primary text-white" scope="col">Time</th>
                    <th class="bg-primary text-white" scope="col">Duration</th>
                    <th class="bg-primary text-white" scope="col">Subjects</th>
                    <th class="bg-primary text-white" scope="col">Status</th>
                    <th class="bg-primary text-white text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (mysqli_num_rows($result_time_table) > 0) {
                        while($row = mysqli_fetch_assoc($result_time_table))
                        {
                            echo '
                                <tr>
                                    <td>'.$row['title'].'</td>
                                    <td>'.$row['current_sub'].'</td>
                                    <td>'.$row['start_time'].' to '.$row['end_time'].'</td>
                                    <td>'.$row['start_date'].' to '.$row['end_date'].'</td>
                                    <td>'.$row['subjects'].'</td>
                                    <td class="text-success fw-bold">'.$row['status'].'</td>
                                    <td><a class="btn btn-sm btn-danger rounded-0 px-4 float-end" href="view.php?id='.$row['id'].'">View</a></td>
                                </tr>
                            ';
                        }
                        } else {
                        echo '
                        <tr>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                        </tr>
                        ';
                        }

                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    let subjects_ul = document.querySelectorAll('.subjects_ul>li>input');
    let students_ul = document.querySelectorAll('.students_ul>li>input');

    let selected_sub = document.getElementById('selected_subjects');
    let selected_std = document.getElementById('selected_students');
    let current_subject_ul = document.getElementById('current_subject_ul');
    let current_subject = document.getElementById('current_subject');

    let subject_list = [];
    let student_list = [];

    subjects_ul.forEach(function(chkbox){
        chkbox.addEventListener('change',function(){
            if(chkbox.checked){
                subject_list.push(chkbox.value);
            }else{
                let index = subject_list.indexOf(chkbox.value);
                if (index > -1) {
                    subject_list.splice(index, 1);
                }
            }
            selected_sub.innerHTML = subject_list.join(' , ');
            getCurrentSubjects();
        });
    });

    students_ul.forEach(function(chkbox){
        chkbox.addEventListener('change',function(){
            if(chkbox.checked){
                student_list.push(chkbox.value);
            }else{
                let index = student_list.indexOf(chkbox.value);
                if (index > -1) {
                    student_list.splice(index, 1);
                }
            }
            selected_std.innerHTML = student_list.join(' , ');
        });
    });

    function getCurrentSubjects()
    {
        current_subject_ul.innerHTML = "";
        if(subject_list.length>0)
        {
            subject_list.map(function(value){
                current_subject_ul.innerHTML += `<li><a class="dropdown-item">${value}<input class="float-end" onchange="curr_sub(this)" value="${value}" type="radio" name="subject"/></a></li>`;
            });
        }
        else
        {
            current_subject_ul.innerHTML = '<li><a class="dropdown-item" href="#">No subject selected</a></li>';
        }
    }
    function curr_sub(elem)
    {
        current_subject.value = elem.value;
    }
    getCurrentSubjects();
</script>
</html>