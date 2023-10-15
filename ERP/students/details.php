<?php
    include('../components/header.php');
    if(!$_SESSION){header('location:../login');}
    else{$username = $_SESSION["username"];}
    $id = $_GET['id'];
    $sql = "SELECT * from bascom.students where id = {$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student profile</title>
</head>
<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="m-0 fs-2">Are you sure ?</p>
                <p class="">Course will be deleted permanantly</p>
            </div>
            <div class="modal-footer" id="modal-footer">
                <button type="button" onclick="delete_course()" class="btn rounded-0 btn-danger" data-bs-dismiss="modal" id="deleteButton">Delete</button>
            </div>
            </div>
        </div>
    </div>

    <div id="my_alert" class="position-sticky top-0 z-3"></div>
    <div class="container">
        <div class="accordion my-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item rounded-0">
                <h2 class="accordion-header">
                <button class="accordion-button bg-primary text-white rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Student Details
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <?php 
                if($row)
                {
                    echo '
                        <div class="accordion-body">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-xs-12">
                                <img src="'.$row['image_url'].'" class="w-100" alt="">
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-9 col-sm-12 col-xs-12">
                                <div class="ms-xl-5 ms-lg-4 ms-md-3 ms-sm-0 ms-xs-0">
                                    <p class="fs-3 m-0 fw-bold">'.$row['name'].'</p>
                                    <table>
                                        <tr>
                                            <td class="font-80">Date of Birth</td>
                                            <td class="font-80 w-50">'." ".$row['dob'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="font-80">Gender</td>
                                            <td class="font-80">'." ".($row['gender']=='m'?"Male":"Female").'</td>
                                        </tr>
                                        <tr>
                                            <td class="font-80">Education</td>
                                            <td class="font-80">'." ".$row['education'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="font-80">Personal Phone number</td>
                                            <td class="font-80">'." ".$row['personal_phone'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="font-80">Parent Phone number</td>
                                            <td class="font-80">'." ".$row['parent_phone'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="font-80">Email</td>
                                            <td class="font-80">'." ".$row['email'].'</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
                </div>
            </div>
        </div>

        <div class="accordion my-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item rounded-0">
                <h2 class="accordion-header">
                <button class="accordion-button bg-primary text-white rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Addmission details
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <?php 
                if($row)
                {
                    $sql_courses = "SELECT name from bascom.cources";
                    $result_courses = mysqli_query($conn, $sql_courses);
                
                    echo '
                        <div class="accordion-body">
                            <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 border p-0 mb-2">
                                    <p class="p-2 m-0 text-white bg-primary">Select courses</p>
                                    <div class="p-2" style="height:300px;overflow:auto">';
                    while($row_courses = mysqli_fetch_row($result_courses))
                    {
                        echo 
                            '<p class="mb-2 font-90 all_courses">'.$row_courses[0].'
                            <input class="me-2 float-end" type="checkbox" value="'.$row_courses[0].'"/>
                            </p>';
                    }
                
                    echo '
                            </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button onclick="add_course('.$id.')" class="btn btn-success rounded-0 w-100">Add course</button>
                                <p class="font-90" id="selected_courses"></p>
                            </div>
                            </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <p class="bg-warning text-white py-1 px-2 fs-5">
                                Subjects
                                <button class="float-end border-0 bg-transparent">
                                    <i class="fa-regular text-white fa-pen-to-square fs-4"></i>
                                </button>
                                </p>
                                <div class="list-group rounded-0" id="std_course"></div>
                                </div>
                            </div>
                        </div>';
                }?>
                </div>
            </div>
        </div>

        <div class="accordion my-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item rounded-0">
                <h2 class="accordion-header">
                <button class="accordion-button bg-primary text-white rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Bank details
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <?php 
                if($row)
                {
                    echo '
                        <div class="accordion-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Bank name</th>
                                        <td>'.$row['bank_name'].'</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary rounded-0 float-end">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bank account number</th>
                                        <td>'.$row['bank_account_no'].'</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary rounded-0 float-end">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IFSC Code</th>
                                        <td>'.$row['bank_ifsc_code'].'</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary rounded-0 float-end">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        ';
                }?>
                </div>
            </div>
        </div>

        <div class="accordion my-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item rounded-0">
                <h2 class="accordion-header">
                <button class="accordion-button bg-primary text-white rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    Batch details
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <?php 
                if($row)
                {
                    echo '
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <p></p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                </div>
                            </div>
                        </div>
                        ';
                }?>
                </div>
            </div>
        </div>

        <div class="accordion my-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item rounded-0">
                <h2 class="accordion-header">
                <button class="accordion-button bg-primary text-white rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    Student report
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <?php 
                if($row)
                {
                    echo '
                        <div class="accordion-body">
                            <div class="row">
                            </div>
                        </div>
                        ';
                }?>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
    let courses = document.querySelectorAll('.all_courses>input');
    let selected_courses = document.getElementById('selected_courses');
    let my_alert = document.getElementById('my_alert');
    let selected_courses_arr = [];
    let alert_arr = ["","",""];
    let std_course = document.getElementById('std_course');
    fetch_course(<?php echo $id;?>);

    courses.forEach(function(chkbox){
        chkbox.addEventListener('change',function(){
            if(chkbox.checked){
                selected_courses_arr.push(chkbox.value);
            }else{
                let index = selected_courses_arr.indexOf(chkbox.value);
                if (index > -1) {
                    selected_courses_arr.splice(index, 1);
                }
            }
            selected_courses.innerHTML = selected_courses_arr.join(' , ');
        });
    });

    function add_course(id)
    {
        if(selected_courses_arr.length == 0)
        {
            alert_arr = ["bg-warning","Warning","Please select course first"];
            my_alert.innerHTML = `
            <div class="${alert_arr[0]}">
                <div class="container alert alert-dismissible fade show" role="alert">
                    <strong>${alert_arr[1]} ! </strong>${alert_arr[2]}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <div>
            `;
        }
        else
        {
            fetch('add_courses.php',{
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id:id,
                    data:selected_courses_arr
                })
            })
            .then(response => response.json())
            .then(data => {
                alert_arr = ["bg-success","Success","Course added"];
                my_alert.innerHTML = `
                <div class="${alert_arr[0]}">
                    <div class="container alert text-white alert-dismissible fade show" role="alert">
                        <strong>${alert_arr[1]} ! </strong>${alert_arr[2]}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <div>
                `;

                console.log('Success :', data);
            })
            .catch((error) => {
                console.log('Error :', error);
            });
            fetch_course(id);
            selected_courses.innerHTML = "";
        }
    }

    function fetch_course(id)
    {
        std_course?std_course.innerHTML = "":"";
        fetch('fetch_std_courses.php',{
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({id:id})
        })
        .then(response => response.json())
        .then(data => {
            data.length>0?
            data.map(function(value){
                std_course.innerHTML +=  
                `<p class="list-group-item p-0 border-0 list-group-item-action">
                ${value.course_title}
                <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                class="float-end rounded-0 btn-sm btn border-0 btn-outline-danger" type="button"
                onclick="setDeleteCourse('${value.id}')">
                <i class="fa-solid fa-trash"></i>
                </button>
                </p>`;
            }):'';
        })
        .catch((error) => {
            console.log(error);
        });
    }

    function setDeleteCourse(courseId)
    {
        document.getElementById('deleteButton').setAttribute('data-course-id', courseId);
    }

    function delete_course()
    {
        var courseId = document.getElementById('deleteButton').getAttribute('data-course-id');
        console.log("Deleting course with ID: ", courseId);
        fetch('delete_course.php',{
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({id:courseId})
            })
            .then(response => response.json())
            .then(data => {
                alert_arr = ["bg-danger",data.status,data.message];
                my_alert.innerHTML = `
                <div class="${alert_arr[0]}">
                    <div class="container alert text-white alert-dismissible fade show" role="alert">
                        <strong>${alert_arr[1]} ! </strong>${alert_arr[2]}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <div>
                `;
            })
            .catch((error) => {
                console.log('Error :', error);
            });
            fetch_course(<?php echo $id;?>);
    }
</script>
</html>