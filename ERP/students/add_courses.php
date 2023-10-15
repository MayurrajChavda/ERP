<?php
    include('../components/connection.php');
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];
    $courses = $data['data'];
    foreach ($courses as $course)
    {
        $sql_insert = "INSERT INTO bascom.student_selected_courses (std_id, course_title) VALUES ({$id},'{$course}')";
        if(mysqli_query($conn, $sql_insert))
        {
            $response = ['message' => 'Course added successfully','status'=>'Success'];
        }else{
            $response = ['message' => 'Course not added','status'=>'Failed'];
        }
        
    }
    echo json_encode($response);
?>