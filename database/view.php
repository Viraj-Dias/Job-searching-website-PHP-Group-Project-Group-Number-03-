<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="resources/css/About.css">
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <link rel="icon" type="image/x-icon" href="resources/images/favicon.png">
    <style>
        .center {
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>

    <nav>
  <div class="logo">
    <a href="index.html"><img src="resources/images/logo.png" width="60%"></a>
  </div>
  <ul class="menu">
    <li><a href="index.html">Home</a></li>
    <li><a href="jobs.html">Jobs</a></li>
    <li><a href="companies.html">companies</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="#">About</a></li>
    <li><a href="login.html" class="btn">Login</a></li>
    <li><a href="register.html" class="btn">Register</a></li>


  </ul>
</nav>

<!-- end of the header -->

<br><br><br><br><br><br>
<h1><center> Part Time Job Applications </center></h1>
<br>
<br>
<table border='1' class='center'>
    <tr>
        <th>Full Name   </th>
        <th>Email  </th>
        <th>Phone Number   </th>
        <th>Upload Resume </th>
        <th>Cover leetter</th>
        <th>Avalability </th>
        <th>Desired salary</th>
        <th>Additional information </th>
        <th>Refer </th>
</tr>
<!-- connection with databse-->
<?php include "database1.php"?>

<!-- get the all data from database to $jobsql-->
<?php
    
        $jobsql = "SELECT * FROM part_time_job;"; 
        $result = mysqli_query($conn, $jobsql);
    
        $checkResult=mysqli_num_rows($result);

        if ($checkResult >0 ){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['Full_name']."</td>";
                echo "<td>" . $row['Email']."</td>";
                echo "<td>" . $row['Phone_number']."</td>";
                echo "<td>" . $row['Upload_resume']."</td>";
                echo "<td>" . $row['Cover_letter']."</td>";
                echo "<td>" . $row['Avalability']."</td>";
                echo "<td>" . $row['Desired_salary']."</td>";
                echo "<td>" . $row['Additional_information']."</td>";
                echo "<td>" . $row['Refer']."</td>";
            }
        }
?>
</table>

<!-- fotter -->

<div class="contenar4">
<div class="jj">
  
  <div class="c3-c1">
    <a href="index.html"><img src="resources/images/logo-footer.png" width="50%"></a>
    <p>CareerFinder.com is a job search website that helps job seekers find job openings across a variety of industries. The website allows job seekers to search for jobs by keyword, industry, location, and job type.</p>
  </div>

  <div class="c3-c2">
    <h3>QUICK LINKS</h3>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="jobs.html">Jobs</a></li>
      <li><a href="companies.html">Companies</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="#">About</a></li>
    </ul>
  </div>

  <div class="c3-c3">
    <h3>JOBS ALERT</h3>
    <input type="text" id="alert-box" placeholder="Enter Yore E-mail Address..">
    <input type="submit" value="Get Alert" id="alert-btn">
  </div>

  <div class="c3-c4">
    <h3>SOCIAL MEDIA</h3>
    <img src="resources/images/linkedin.png">
    <img src="resources/images/facebook.png">
    <img src="resources/images/instagram.png">
    <img src="resources/images/twitter.png">
  </div>
</div>
<footer>
  <hr>
  <p>Copyright © 2023 Caree Finder All Rights Reserved.</p>
</footer>


</body>
</html>