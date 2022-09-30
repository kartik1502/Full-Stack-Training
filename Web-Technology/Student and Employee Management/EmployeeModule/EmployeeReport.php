<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/cute-clipart/64/e.png" type="image/x-icon">
    <link rel="stylesheet" href="StyleEmployee.css">
    <link rel="stylesheet" href="StyleFromControl.css">
    <link rel="stylesheet" href="EmployeeTable.css">
    <link href="http://fonts.cdnfonts.com/css/gistesy" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/ojero" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/avecrig" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>Employee Module | Arya Solutions</title>
</head>
<!-- <style>
    body{
        height: 950px;
    }
</style>
<body> -->
    <h1>Arya Solutions</h1>
    <nav>
        <a href="#"><button class="nav-btn">Employee Module</button></a>
        <a href="AddEmployeeHtml.php"><button class="nav-btn">Add Employee</button></a>
        <a href="UpdateEmployeeHtml.php"><button class="nav-btn">Update Data</button></a>
        <a href="EmployeeReport.php"><button class="nav-btn">Report</button></a>
        <a href="RemoveEmployeeHtml.php"><button class="nav-btn">Remove Employee</button></a>
        <a href="QueryEmployee.php"><button class="nav-btn">Query Employee</button></a> 
        <a href="../index.html" class="last" style="margin-left:14.21%;"><button class="nav-btn">Home</button></a>       
    </nav>
    <?php
        session_start(); 
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
<?php
    include "Employeeconnection.php";
    $sql = "SELECT * FROM worker";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){?>
            <table class="table">
        <button type="button" onclick="tableToCSV()" class="export-btn">Export CSV</button>
        <tr class="row">
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Employee</th>
            <th>Dearness Allowance</th>            
            <th>House Rent Allowance</th>
            <th>Medical Allowance</th>
            <th>Insurance</th>
            <th>Net Salary</th>         
        </tr>
    <?php
        while($row = mysqli_fetch_assoc($result)){ 
            $baseSalary = $row['baseSalary'];
            $dearnessAllowance = 0.8 * $baseSalary;
            $houseRentAllowance = 0.15 * $baseSalary;
            $medicalAllowance = 0.12 * $baseSalary;
            $insurance = 0.1 * $baseSalary;
            $netSalary = $baseSalary + $houseRentAllowance + $medicalAllowance - $insurance;
?>

   <tr class="row">
        <td><?php echo $row['empId'];?></td>
        <td><?php echo $row['empName'];?></td>
        <td><?php echo $row['baseSalary'];?></td>
        <td><?php echo $dearnessAllowance;?></td>
        <td><?php echo $houseRentAllowance;?></td>
        <td><?php echo $medicalAllowance;?></td>
        <td><?php echo $insurance;?></td>
        <td><?php echo $netSalary;?></td>
    </tr>

<?php
        }
    }
    else{
        $_SESSION['removeReport'] = "No Employee have been added!!!";
    }
    mysqli_close($conn);
?>
</table>
<script type="text/javascript">
        function tableToCSV() {
            // Variable to store the final csv data
            var csv_data = [];
            // Get each row data
            var rows = document.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
                // Get each column data
                var cols = rows[i].querySelectorAll('td,th');
                // Stores each csv row data
                var csvrow = [];
                for (var j = 0; j < cols.length; j++) {
                    // Get the text data of each cell
                    // of a row and push it to csvrow
                    csvrow.push(cols[j].innerHTML);
                }
                // Combine each column value with comma
                csv_data.push(csvrow.join(","));
            }
            // Combine each row data with new line character
            csv_data = csv_data.join('\n');
            // Call this function to download csv file 
            downloadCSVFile(csv_data);
        }
 
        function downloadCSVFile(csv_data) {
            // Create CSV file object and feed
            // our csv_data into it
            CSVFile = new Blob([csv_data], {
                type: "text/csv"
            });
            // Create to temporary link to initiate
            // download process
            var temp_link = document.createElement('a');
            // Download csv file
            temp_link.download = "Employee Report.csv";
            var url = window.URL.createObjectURL(CSVFile);
            temp_link.href = url;
            // This link should not be displayed
            temp_link.style.display = "none";
            document.body.appendChild(temp_link);
            // Automatically click the link to
            // trigger download
            temp_link.click();
            document.body.removeChild(temp_link);
        }
    </script>
</body>
</html>
