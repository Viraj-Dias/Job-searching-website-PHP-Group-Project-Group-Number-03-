<!-- create databse and do connection -->
<?php
$hostname = "localhost";
$username = "admin";
$password = "admin123";
$database = "carrer_find";


$conn = mysqli_connect($hostname, $username, $password, $database) or die('Connection Fail');

$sql="CREATE TABLE part_time_jobs (
        Full_name VARCHAR(30),
        Email VARCHAR(30),
        Phone_number VARCHAR(15),
        Upload_resume VARCHAR(100),
        Cover_letter VARCHAR(50),
        Avalability VARCHAR(30),
        Desired_salary int(5),
        Additional_information VARCHAR(30),
        Refer VARCHAR(15)
        )";
    ?>
