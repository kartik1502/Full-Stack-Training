<?php
    session_start();
    include "StudentConnection.php";

    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $subjectOne = $_POST['subjectOne'];
    $subjectTwo = $_POST['subjectTwo'];
    $subjectThree = $_POST['subjectThree'];
    $subjectFour = $_POST['subjectFour'];
    $subjectFive = $_POST['subjectFive'];

    $idSql = "SELECT rollNo FROM marks WHERE rollno = '$rollno'";
    $result = mysqli_query($conn,$idSql);
    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO marks (rollNo,studName,subjectOne,subjectTwo,subjectThree,subjectFour,subjectFive) VALUES ('$rollno','$name','$subjectOne','$subjectTwo','$subjectThree','$subjectFour','$subjectFive')";
        if(mysqli_query($conn,$sql)){

            $_SESSION['add'] = "Student details Added Successfully";
            header("location: AddStudentHtml.php");
            
            // echo '<script>alert("Added");</script>
            // <script>window.location.assign("http://localhost/Assignment_Two/StudentModule/AddStudent.html");</script>';
        }
    }
    else{
        $_SESSION['remove'] = "Student with Roll No:". $rollno ." already present";
        header("location: AddStudentHtml.php");
    }
    mysqli_close($conn);
?>