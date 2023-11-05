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
<!-- connection with database -->

<?php include "database1.php"?>


<!-- connectioin variable : $conn -->

<!DOCTYPE html>
<html>
<head>
    <title>Part-Time Job Application</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <h1><center>Part-Time Job Application</center></h1>
    <br>
    <form action="" method="post">
        <table class='center'>
<tr>
      <td>  <label for="full_name">Full Name:    </label></td>
       <td> <input type="text" id="full_name" name="full_name" required><br><br></td>
</tr>
<tr>
       <td> <label for="email">Email:</label></td>
       <td> <input type="email" id="email" name="email" required><br><br></td>
</tr>
<tr>
        <td><label for="phone">Phone Number:</label></td>
        <td><input type="tel" id="phone" name="phone" required><br><br></td>
</tr>
<tr>
       <td> <label for="resume">Upload Resume (PDF or Word):</label></td>
       <td> <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required><br><br></td>
</tr>
        <td><label for="cover_letter">Cover Letter:</label><br></td>
        <td><textarea id="cover_letter" name="cover_letter" rows="5" required></textarea><br><br></td>
</tr>
<tr>
        <td><label for="availability">Availability:</label></td>
        <td><input type="text" id="availability" name="availability" required><br><br></td>
</tr>
<tr>
       <td> <label for="desired_salary">Desired Salary:</label></td>
       <td> <input type="text" id="desired_salary" name="desired_salary" required><br><br></td>
</tr>
<tr>
      <td>  <label for="additional_information">Additional Information:</label><br></td>
      <td>  <textarea id="additional_information" name="additional_information" rows="5"></textarea><br><br></td>
</tr>
<tr>
       <td> <label for="refer">Refer:</label><br></td>
       <td> <textarea id="refer" name="refer" rows="5"></textarea><br><br></td>
</tr>
<tr>
       <td> <input type="submit" name="submit" value="Submit Application"></td>
</tr>     
    </form>
</table>

</body>
</html>


<?php
  if (isset($_POST['submit'])) {
    $fullname=$_POST['full_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $resume=$_POST['resume'];
    $cover_letter=$_POST['cover_letter'];
    $availability=$_POST['availability'];
    $desired_salary=$_POST['desired_salary'];
    $additional_information=$_POST['additional_information'];
    $refer=$_POST['refer'];


    $sql = "INSERT INTO part_time_job VALUES ('$fullname', '$email', '$phone', '$resume', '$cover_letter', '$availability', '$desired_salary', '$additional_information', '$refer');";


if (mysqli_query($conn, $sql)) {
    echo "Succes";
  } 
  else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

}

?>

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
      <li><a href="view.php">View part time jobs</a></li>
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