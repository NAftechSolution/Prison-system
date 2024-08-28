<?php
session_start();
error_reporting(1);
include("../admin/database/connect.php");
include("../admin/database/connect2.php");

$logo = "logo.jpeg";


//admin
$sql = "SELECT * FROM admin_users";
$result = $conn->query($sql);
$row_no_users = mysqli_num_rows($result);
$username = $_SESSION["admin-username"];
$stmt = $dbh->query("SELECT * FROM admin_users where username='$username'");
$row_admin = $stmt->fetch();
// it return number of rows in the table.
$admin_fullname=$row_admin['fullname'];  
$admin_photo=$row_admin['photo'];  

//visitors fetch
$sql1 = "SELECT * FROM visit_list";
$result1 = $conn->query($sql1);
$row_no_visitors = mysqli_num_rows($result1);

//prisons fetch
$sql2 = "SELECT * FROM prison_list";
$result2 = $conn->query($sql2);
$row_no_prisons = mysqli_num_rows($result2);

//read data from each row
$sql3 = "SELECT * FROM inmates";
$result3 = $conn->query($sql3);
$rowaccess = $result3->fetch_assoc();
$inmate_id = $rowaccess["InmateID"];
$date_created = $rowaccess["DateOfAdmission"];
$inmate_code = $rowaccess["IdentificationNumber"];
$inmate_name = $rowaccess["FullName"];
$inmate_photo=$rowaccess['Photo'];  

//warden
$username = $_SESSION["warden-username"];
$stmt1 = $dbh->query("SELECT * FROM tbl_warden where txtusername='$username'");
$row_warden = $stmt1->fetch();
$warden_fullname=$row_warden['fullname'];  
$warden_photo=$row_warden['photo'];

//fetch data:
//cell
$sql4 = "SELECT name FROM cell_list";
$result4 = $conn->query($sql4);

//crimes
$sql5 = "SELECT name FROM crime_list";
$result5 = $conn->query($sql5);