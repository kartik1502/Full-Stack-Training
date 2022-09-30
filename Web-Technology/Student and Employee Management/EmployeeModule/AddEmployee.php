<?php
    session_start();
    include "Employeeconnection.php";

    $empId = $_POST['empId'];
    $empName = $_POST['empName'];
    $baseSalary = $_POST['baseSalary'];
    echo $empId;
    echo $empName;
    echo $baseSalary;
    $idSql = "SELECT * FROM worker WHERE empId = '$empId'";
    $result = mysqli_query($conn,$idSql);
    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO worker (empId,empName,baseSalary) VALUES ('$empId','$empName','$baseSalary')";
        if(mysqli_query($conn,$sql)){
            $_SESSION['add'] = "Employee details Added Successfully";
            header("location: AddEmployeeHtml.php");
            
            // echo '<script>alert("Added");</script>
            // <script>window.location.assign("http://localhost/Assignment_Two/StudentModule/AddStudent.html");</script>';
        }
    }
    else{
        $_SESSION['remove'] = "Employee with Employee ID:". $empId ." already present";
        header("location: AddEmployeeHtml.php");
    }
    mysqli_close($conn);
?>