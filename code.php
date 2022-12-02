<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM search WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: search_edit.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: search_edit.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['id']);

    $school = mysqli_real_escape_string($con, $_POST['school']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $faculty = mysqli_real_escape_string($con, $_POST['faculty']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $degree = mysqli_real_escape_string($con, $_POST['degree']);
    $month = mysqli_real_escape_string($con, $_POST['month']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $available = mysqli_real_escape_string($con, $_POST['available']);

    $query = "UPDATE search SET school='$school', location='$location', faculty='$faculty', course='$course', degree='$degree', month='$month', year='$year', available='$available' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: search_edit.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: search_edit.php");
        exit(0);
    }

}


// if(isset($_POST['save_student']))
// {
//     $name = mysqli_real_escape_string($con, $_POST['name']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $phone = mysqli_real_escape_string($con, $_POST['phone']);
//     $course = mysqli_real_escape_string($con, $_POST['course']);

//     $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

//     $query_run = mysqli_query($con, $query);
//     if($query_run)
//     {
//         $_SESSION['message'] = "Student Created Successfully";
//         header("Location: student-create.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Student Not Created";
//         header("Location: student-create.php");
//         exit(0);
//     }
// }

?>