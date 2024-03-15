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

// Prepare SQL statement to fetch data from the users table
$sql = "SELECT username, current_balance, active_investments, referral_earnings FROM users";

// Execute SQL statement
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch data from each row and insert it into the user_info table
    while ($row = $result->fetch_assoc()) {
        $username = $row["username"];
        $current_balance = $row["current_balance"];
        $active_investments = $row["active_investments"];
        $referral_earnings = $row["referral_earnings"];

        // Prepare SQL statement to insert data into the user_info table
        $insert_sql = "INSERT INTO user_info (username, current_balance, active_investments, referral_earnings)
                       VALUES ('$username', $current_balance, $active_investments, $referral_earnings)";

        // Execute the insert SQL statement
        if ($conn->query($insert_sql) === TRUE) {
            echo "New record inserted successfully";
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "No records found in the users table";
}

// Close result set
$result->close();

// Close database connection
$conn->close();
?>
