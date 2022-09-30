<?php
    session_start();
    include "StudentConnection.php";

    $rollNo = $_GET['id'];
    if($rollNo != 0){
        $sql = "DELETE FROM marks WHERE rollNo = '$rollNo'";
        if(mysqli_query($conn,$sql)){
        
            $_SESSION['remove'] = "Student deleted Successfully";
            header("location: RemoveStudentHtml.php");
        }
    }
    else{
        $_SESSION['add'] = "Student not deleted";
        header("location: RemoveStudentHtml.php");
    }
    mysqli_close($conn);
?>