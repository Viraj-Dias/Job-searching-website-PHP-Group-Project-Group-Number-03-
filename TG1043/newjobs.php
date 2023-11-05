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

<?php

$db = new mysqli('localhost', 'admin', 'admin123', 'career_find');

$query = "SELECT * FROM job_posts ORDER BY post_date DESC";
$result = $db->query($query);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        

        echo "<h2><u>{$row['job_type']}-{$row['title']},{$row['country']}</u></h2><br>";

        echo "<table> <tr><td>Organization:</td>
                <td>{$row['cmp_name']}</td>
                </tr>
                <tr>
                <td>Country</td>
                <td>{$row['country']}</td>
                <tr>
            </table><hr><br>";
        echo "<h4> What will you do ? </h4><br>";
        echo "<p>{$row['job_description']}</p><hr><br>";

        echo "<h4> Responsibilities</h4><br>";
        echo "<ul><li>{$row['response1']}</li>";
        echo "<li>{$row['response2']}</li>";
        echo "<li>{$row['response3']}</li>";
        echo "<li>{$row['response4']}</li>";
        echo "<li>{$row['response5']}</li></ul><hr><br>";

        echo "<h4>Qualifications</h4><br>";
        echo "<ul><li>{$row['qualification1']}</li>";
        echo "<li>{$row['qualification2']}</li>";
        echo "<li>{$row['qualification3']}</li>";
        echo "<li>{$row['qualification4']}</li>";
        echo "<li>{$row['qualification5']}</li></ul><hr><br>";

        echo "<h4>What will be your salary ?<h4><br>";
        echo "<p><b>{$row['salary']} a year</b></p> <hr><br>";

        echo "<h3 color='#050A30'><a href='application_form.html'>HURRY UP ! APPLY TODAY CLICK HERE</a></h3><br>";
       
        echo "<h4><a href='{$row['web']}'>Visit Careers | {$row['cmp_name']}</a><h4><br>";

        echo "<h4> Contact Us </h4>";
        echo "<p>{$row['contact']}</p><hr><br>";

        echo "<p>{$row['about']}</p>";
        echo "<p>Posted on: {$row['post_date']}</p>";
        echo "<button><a href='delete_job.php?id={$row['id']}'>Delete the job</a></button>";

        
    }
} else {
    echo "<p>No job listings available.</p>";
}




$db->close();

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