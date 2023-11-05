
<?php

$conn = new mysqli('localhost', 'admin', 'admin123');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//create the database
$databaseName = "career_find";
$sql = "CREATE DATABASE $databaseName";


if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();



// connect to the database

$conn = new mysqli('localhost', 'admin', 'admin123', 'career_find');


if ($conn->connect_error) {
    die("Connection to the new database failed: " . $conn->connect_error);
}

// create the job_posts table



$sql = "CREATE TABLE job_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) ,
    cmp_name VARCHAR(50) NOT NULL,
    country VARCHAR(50)NOT NULL,
    job_description VARCHAR(500) ,
    job_type VARCHAR(20) NOT NULL,
    response1 VARCHAR(100),
    response2 VARCHAR(100),
    response3 VARCHAR(100),
    response4 VARCHAR(100),
    response5 VARCHAR(100),
    qualification1 VARCHAR(100),
    qualification2 VARCHAR(100),
    qualification3 VARCHAR(100),
    qualification4 VARCHAR(100),
    qualification5 VARCHAR(100),
    salary VARCHAR(50),
    contact INT,
    web VARCHAR(50),
    about VARCHAR(500),
    post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>




