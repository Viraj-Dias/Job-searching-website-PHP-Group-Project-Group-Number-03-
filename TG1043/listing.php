<html>
    <head>
    <title>Job posting</title>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career Finder</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css"> 
    <link rel="stylesheet" type="text/css" href="resources/css/companies.css">
    <link rel="stylesheet" type="text/css" href="resources/css/login.css">
    <link rel="icon" type="image/x-icon" href="resources/images/favicon.png">
    <script src="resources/js/login.js"></script> 
    
</head>
<style>
    h4{
        color:#050A30;
  
   }

</style>
</head>
<body>
  
<nav>
  <div class="logo">
    <img src="resources/images/logo.png" alt="Logo" id="logo" width="60%">
  </div>
  <ul class="menu">
    <li><a href="index.html">Home</a></li>
    <li><a href="listing.php">Jobs</a></li>
    <li><a href="#">companies</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="login.html" class="btn">Login</a></li>
    <li><a href="register.html" class="btn">Register</a></li>


  </ul>
</nav>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class='containar'>
                <div class='row'>
                <img src='resources/images/R.jfif' width='100%'>

<h2>Find Your Job Here</h2><hr><br>
<h4> NEW JOBS</h4><br><button id='btn'><a href='newjobs.php'>More Details and Apply Here</a></button><br><br>
<h4> PART TIME JOBS</h4><br><button id='btn'><a href='form1.php'>Apply Here</a></button><br><br>
<h4> ADD NEW JOBS</h4><br><button id='btn'><a href='form.php'>Add Your Job Vacancy</a></button><br><br>

</div></div>
  
  <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $cmp_name = $_POST['name'];
    $country = $_POST['country'];
    $description = $_POST['description'];
    $job_type = $_POST['job_type'];
    $response1 = $_POST['response1'];
    $response2 = $_POST['response2'];
    $response3 = $_POST['response3'];
    $response4 = $_POST['response4'];
    $response5 = $_POST['response5'];
    $qualification1 = $_POST['qualification1'];
    $qualification2 = $_POST['qualification2'];
    $qualification3 = $_POST['qualification3'];
    $qualification4 = $_POST['qualification4'];
    $qualification5 = $_POST['qualification5'];
    $salary = $_POST['salary'];
    $contact = $_POST['contact'];
    $web = $_POST['web'];
    $about = $_POST['about'];

    echo $job_type;

$conn = new mysqli('localhost', 'admin', 'admin123', 'career_find');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$posting_date = date("Y-m-d H:i:s");

$insert_query = "INSERT INTO job_posts (title,cmp_name,country, job_description, job_type,response1,response2,response3,response4,response5,qualification1,qualification2,qualification3,qualification4,qualification5,salary,contact, web ,about, post_date)
                 VALUES ('$title','$cmp_name','$country', '$description', '$job_type','$response1','$response2','$response3','$response4','$response5','$qualification1','$qualification2','$qualification3','$qualification4','$qualification5','$salary','$contact','$web','$about', '$posting_date')";

if ($conn->query($insert_query) === TRUE) {
    echo "Job posted successfully!";
    header("Location:listing.php");
    exit;
} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}


$db->close();




}


?>

<div class="contenar4">
    <div class="jj">
      
      <div class="c3-c1">
        <img src="resources/images/logo-footer.png" width="50%">
        <p>CareerFinder.com is a job search website that helps job seekers find job openings across a variety of industries. The website allows job seekers to search for jobs by keyword, industry, location, and job type.</p>
      </div>
    
      <div class="c3-c2">
        <h3>QUICK LINKS</h3>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="listing.php">Jobs</a></li>
          <li><a href="">Companies</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">About</a></li>
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