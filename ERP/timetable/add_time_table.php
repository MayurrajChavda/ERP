<?php
    include('../components/connection.php');

    $title = $_POST['time_table_title'];
    $start_date = $_POST['time_table_start_date'];
    $end_date = $_POST['time_table_end_date'];
    $start_time = $_POST['time_table_start_time'];
    $end_time = $_POST['time_table_end_time'];
    $subjects = $_POST['selected_subjects'];
    $students = $_POST['selected_students'];
    $curr_sub = $_POST['current_subject'];

    $sql_insert_table = "INSERT INTO bascom.time_table(title, start_date, end_date, start_time, end_time, subjects, students, current_sub) VALUES ('{$title}','{$start_date}','{$end_date}','{$start_time}','{$end_time}','{$subjects}','{$students}','{$curr_sub}')";
    
    if (mysqli_query($conn, $sql_insert_table)){
        header('location:../timetable');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>