<html>
    <head>
        <title>Job posting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career Finder</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css"> 
    <link rel="stylesheet" type="text/css" href="resources/css/companies.css">
    
    <link rel="icon" type="image/x-icon" href="resources/images/favicon.png">
    <script src="resources/js/login.js"></script>

    <style>
    h4{
        color:#050A30;
  
   }

   #n,#y{
    font-size:20px;
    
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

<div class='containar'>
                <div class='row'>
                <img src='resources/images/R.jfif' width='100%'>
        <h2><br><br>Are you sure you want to delete this job?</h2><br><br>
        <form method='post' action=''>
            <h3><input type='submit' name='confirm_delete' id='y' value='Yes' color='red'>
            <input type='submit' name='confirm_delete' id= 'n' value='No'></h3>
        </form></div>


<?php
if (isset($_GET['id'])) {
    $job_id = $_GET['id'];
    

    
    $db = new mysqli('localhost', 'admin', 'admin123', 'career_find');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    if (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] === 'Yes') {
        // Delete the job 
          $query = "DELETE FROM job_posts WHERE id = ?";
          $stmt = $db->prepare($query);
          $stmt->bind_param("i", $job_id);
          $stmt->execute();
  
          $stmt->close();
          $db->close();
  
          header("Location: listing.php");

      } elseif (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] === 'No') {
          // If the user clicked "No," redirect back to the listings page

   
        header("Location: listing.php");


       
    }

 
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