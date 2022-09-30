<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/cute-clipart/64/s.png" type="image/x-icon">
    <link rel="stylesheet" href="StyleStudent.css">
    <link rel="stylesheet" href="StyleFromControl.css">
    <link rel="stylesheet" href="StudentTable.css">
    <link href="http://fonts.cdnfonts.com/css/gistesy" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/ojero" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>Student Module | Arya Solutions</title>
</head>
<!-- <style>
    body{
        height: 950px;
    }
</style> -->
<?php 
session_start();?>
<body>
    <h1>Arya Solutions</h1>
    
    <nav>
        <a href="#"><button class="nav-btn">Student Module</button></a>
        <a href="AddStudentHtml.php"><button class="nav-btn">Add Student</button></a>
        <a href="UpdateStudentHtml.php"><button class="nav-btn">Update Data</button></a>
        <a href="StudentReport.php"><button class="nav-btn">Report</button></a>
        <a href="RemoveStudentHtml.php"><button class="nav-btn">Remove Student</button></a>
        <a href="QueryStudent.php"><button class="nav-btn">Query Student</button></a> 
        <a href="../index.html" class="last"><button class="nav-btn">Home</button></a>       
    </nav>
    <!-- <div class="alert" id="disable">
    <svg class="wrong" id="toggle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M12,23 C5.92486775,23 1,18.0751322 1,12 C1,5.92486775 5.92486775,1 12,1 C18.0751322,1 23,5.92486775 23,12 C23,18.0751322 18.0751322,23 12,23 Z M12,21 C16.9705627,21 21,16.9705627 21,12 C21,7.02943725 16.9705627,3 12,3 C7.02943725,3 3,7.02943725 3,12 C3,16.9705627 7.02943725,21 12,21 Z M12,13.4142136 L8.70710678,16.7071068 L7.29289322,15.2928932 L10.5857864,12 L7.29289322,8.70710678 L8.70710678,7.29289322 L12,10.5857864 L15.2928932,7.29289322 L16.7071068,8.70710678 L13.4142136,12 L16.7071068,15.2928932 L15.2928932,16.7071068 L12,13.4142136 Z"/>
</svg><p>hi
            </p>
           
            </div> -->
            
    <?php
        if(isset($_SESSION['add'])){?>
            <div class="alertAdd" id="disable">
                    <svg class="wrong" id="toggle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12,23 C5.92486775,23 1,18.0751322 1,12 C1,5.92486775 5.92486775,1 12,1 C18.0751322,1 23,5.92486775 23,12 C23,18.0751322 18.0751322,23 12,23 Z M12,21 C16.9705627,21 21,16.9705627 21,12 C21,7.02943725 16.9705627,3 12,3 C7.02943725,3 3,7.02943725 3,12 C3,16.9705627 7.02943725,21 12,21 Z M12,13.4142136 L8.70710678,16.7071068 L7.29289322,15.2928932 L10.5857864,12 L7.29289322,8.70710678 L8.70710678,7.29289322 L12,10.5857864 L15.2928932,7.29289322 L16.7071068,8.70710678 L13.4142136,12 L16.7071068,15.2928932 L15.2928932,16.7071068 L12,13.4142136 Z"/>
                    </svg>
                <p>     
                    <?php
                        if(isset($_SESSION['add'])){
                            echo $_SESSION['add'];
                            unset($_SESSION['add']);
                        }
                    ?>
                </p>
            </div>
    <?php } ?>
    <!-- <div class="alert">
        <p>Students Added Successfully</p>
    </div> -->
    <?php
        if(isset($_SESSION['removeReport'])){?>
            <div class="alertRemove" id="disable">
                <svg class="wrong" id="toggle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12,23 C5.92486775,23 1,18.0751322 1,12 C1,5.92486775 5.92486775,1 12,1 C18.0751322,1 23,5.92486775 23,12 C23,18.0751322 18.0751322,23 12,23 Z M12,21 C16.9705627,21 21,16.9705627 21,12 C21,7.02943725 16.9705627,3 12,3 C7.02943725,3 3,7.02943725 3,12 C3,16.9705627 7.02943725,21 12,21 Z M12,13.4142136 L8.70710678,16.7071068 L7.29289322,15.2928932 L10.5857864,12 L7.29289322,8.70710678 L8.70710678,7.29289322 L12,10.5857864 L15.2928932,7.29289322 L16.7071068,8.70710678 L13.4142136,12 L16.7071068,15.2928932 L15.2928932,16.7071068 L12,13.4142136 Z"/>
                </svg>
                <p>     
                    <?php
                        if(isset($_SESSION['removeReport'])){
                            echo $_SESSION['removeReport'];
                            unset($_SESSION['removeReport']);}?>
            </p>
            </div>
    <?php } ?>
    <form action="" method="post" class="form-control" style="height:180px;">
       <table>
            <tr>
                <td><label class="label">Student Name  :</label></td>
                <td><input name="name" id="name" class="input" type="text"></td>
            </tr>
            <tr></tr><tr><br></tr>
            <tr>
                <td><input type="submit" value="Submit" class="submit-btn" name="submit"></td>
                <td></td>
                <td><input type="reset" value="Reset" class="reset-btn"></td>
            </tr>
       </table>
    </form>
    <?php
        include "StudentConnection.php";

        if(isset($_POST['submit'])){
            $Name = $_POST['name'];
            $firstChar = substr($Name,0,1);
            $sql = "SELECT * from marks WHERE studName LIKE '$firstChar%'";
            $sqlReult = mysqli_query($conn,$sql);
                if(mysqli_num_rows($sqlReult) > 0){?>
                    <table class="table">
        <tr class="row">
            <th>Roll No</th>
            <th>Student Name</th>
            <th>Subject I</th>
            <th>Subject II</th>            
            <th>Subject III</th>
            <th>Subject IV</th>
            <th>Subject V</th>            
        </tr>
        <?php
                    while($row = mysqli_fetch_assoc($sqlReult)){?>
            <tr class="row">
                <td><?php echo $row['rollNo'];?></td>
                <td><?php echo $row['studName'];?></td>
                <td><?php echo $row['subjectOne'];?></td>
                <td><?php echo $row['subjectTwo'];?></td>
                <td><?php echo $row['subjectThree'];?></td>
                <td><?php echo $row['subjectFour'];?></td>
                <td><?php echo $row['subjectFive'];?></td>
            </tr>
           
    <?php
                        }
                    }
                    else{
                        $_SESSION['removeReport'] = "No Student have been added!!!";
                    }
                }
    ?>
    </table> 
</body>
<script>
    const targetDiv = document.getElementById("disable");
    const btn = document.getElementById("toggle");
    btn.onclick = function () {
        if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };
</script>
</html>