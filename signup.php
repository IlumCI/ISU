<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Perform further processing, e.g., store data in a database
    
    // For this example, just print the data
    echo "Username: $username<br>";
    echo "Email: $email<br>";
    echo "Password: $password<br>";
}
?>
