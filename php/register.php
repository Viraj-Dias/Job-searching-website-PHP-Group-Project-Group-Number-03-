<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match. Please try again.";
    } else {
        // Hash the password before storing it in the database
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Connect to the database
        $conn = new mysqli("your_host", "your_username", "your_password", "your_database");

        // Check for connection errors
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert user data into the "users" table
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful! You can now log in.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>
