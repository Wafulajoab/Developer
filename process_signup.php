<?php
// Establish database connection (replace these with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eagles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL to insert data into users table
    $sql = "INSERT INTO users (name, phonenumber, username, email, password) VALUES ('$name', '$phonenumber', '$username', '$email', '$hashed_password')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // Account created successfully, display pop-up message and redirect to login page
        echo "<script>alert('Account Created Successfully'); window.location.href = 'login.php';</script>";
        exit(); // Ensure subsequent code is not executed
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Check if all data has been deleted from the table
$sql_check_deleted = "SELECT COUNT(*) AS total FROM users";
$result = $conn->query($sql_check_deleted);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_records = $row['total'];
    if ($total_records == 0) {
        // Delete all records from the table
        $sql_delete_all = "DELETE FROM users";
        if ($conn->query($sql_delete_all) === TRUE) {
            // Reset auto-increment value to 1
            $sql_reset_auto_increment = "ALTER TABLE users AUTO_INCREMENT = 1";
            if ($conn->query($sql_reset_auto_increment) === TRUE) {
                echo "All records deleted and auto-increment value reset successfully";
            } else {
                echo "Error resetting auto-increment value: " . $conn->error;
            }
        } else {
            echo "Error deleting records: " . $conn->error;
        }
    }
}

// Close database connection
$conn->close();
?>
