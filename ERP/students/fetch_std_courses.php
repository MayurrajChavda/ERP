<?php
    include('../components/connection.php');
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];
    $courses = "SELECT id,course_title from bascom.student_selected_courses where std_id={$id}";
    $result = mysqli_query($conn, $courses);
    if(mysqli_num_rows($result) > 0)
    {
        echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
    }
    else
    {
        echo json_encode([]);
    }
?>