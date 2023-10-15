<?php
    include('../components/connection.php');
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];
    $course_delete = "DELETE FROM bascom.student_selected_courses WHERE id={$id}";
    if(mysqli_query($conn, $course_delete))
    {
        $response = ['message' => 'Course deleted successfully','status'=>'Success'];
    }else{
        $response = ['message' => 'Course not deleted','status'=>'Failed'];
    }
    echo json_encode($response);
?>