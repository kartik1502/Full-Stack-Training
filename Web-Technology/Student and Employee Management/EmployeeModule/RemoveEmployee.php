<?php
    session_start();
    include "Employeeconnection.php";

    $empId = $_GET['id'];
    if($empId != 0){
        $sql = "DELETE FROM worker WHERE empId = '$empId'";
        if(mysqli_query($conn,$sql)){
        
            $_SESSION['remove'] = "Employee deleted Successfully";
            header("location: RemoveEmployeeHtml.php");
        }
    }
    else{
        $_SESSION['add'] = "Employee not deleted";
        header("location: RemoveEmployeeHtml.php");
    }
    mysqli_close($conn);
?>