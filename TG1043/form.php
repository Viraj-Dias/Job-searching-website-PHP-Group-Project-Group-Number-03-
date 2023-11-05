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

   .contenar6{
        margin-left:10%;
        margin-right:20%;

   }
  
   td{
    width:500px;
}

.new{
    margin-left:30%;
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
    <li><a href="#">Jobs</a></li>
    <li><a href="#">companies</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="login.html" class="btn">Login</a></li>
    <li><a href="register.html" class="btn">Register</a></li>


  </ul>
</nav>
        
        
        <form class="form" action="listing.php" method="POST">
        <h1>ADD NEW JOB</h1><br><br>
        <div class="new">
        <div class="contenar6">
       
            
         Company Name:
        <input type="text" name="name" id="name" required><br><br>
        
        Job Title:
        <input type="text" name="title" id="title" required><br><br>
        
        Country:
        <input type="text" name="country" id="country" required><br><br>
        
        Job Type:
        <select name="job_type" id="job_type" required>
            <option value="Software_Developer">Software Developer</option>
            <option value="Full_Stack_Developer">Full Stack Developer</option>
            <option value="Back_End_Developer">Back End Developer</option>
            <option value="UIUX_Designer">UI/UX Designer</option>
        </select><br><br>
       
        Job Description:
        <textarea name="description" id="description" required></textarea><br><br>
        
       Responsibilities:<br>
        <textarea name="response1" id="response1" cols="50" required></textarea><br>
        <textarea name="response2" id="response2" cols="50" required></textarea><br>
        <textarea name="response3" id="response3" cols="50" required></textarea><br>
        <textarea name="response4" id="response4" cols="50" required></textarea><br>
        <textarea name="response5" id="response5" cols="50" required></textarea><br><br>
        
        Qualifications:<br>
        <textarea name="qualification1" id="qualification1" cols="50" required></textarea><br>
        <textarea name="qualification2" id="qualification2" cols="50" required></textarea><br>
        <textarea name="qualification3" id="qualification3" cols="50" required></textarea><br>
        <textarea name="qualification4" id="qualification4" cols="50" required></textarea><br>
        <textarea name="qualification5" id="qualification5" cols="50" required></textarea><br><br>
        
        Salary Range:
        <input type="salary" name="salary" id="salary" required><br><br>
        
        Contact:
        <input type="text" name="contact" id="contact" required><br><br>
        
        Company Website:
        <input type="text" name="web" id="web" required><br><br>
        
        About:
        <textarea name="about" id="about" cols="50" rows="4"required></textarea><br><br>
        

        <input type="submit" value="Post Job" id="btn" >
        
    </form>
        </div>
</div>
        
      

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
          <li><a href="">Jobs</a></li>
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


       