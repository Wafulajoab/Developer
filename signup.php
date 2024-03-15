<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Your Investment Platform</title>
    <link rel="stylesheet" href="signup.css">
    
</head>
<body>

    <!-- <header>
        <img id="logo" src="eagles.jpeg" alt="Company Logo">
        
         <nav>
            <a href="home.php">Home</a>
            <a href="investment.php">Investments</a>
            <a href="forex training.php">Forex Training</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>

        <div class="auth-buttons">
            
            <a href="login.php" class="login-btn">Login</a>
            <a href="signup.php" class="signup-btn">Sign Up</a>
            
        </div> 
    </header> -->
<main>
<div class="signup-container">
    <h2>Create an Account</h2>
    <form method="post" action="process_signup.php">


        <!-- Add your signup form fields here -->
        <label for="name">Name:</label>
        <input type="text" placeholder="Enter your official name" id="name" name="name" required>

        <label for="phonenumber">Phonenumber:</label>
        <input type="text" placeholder="Enter your official phone number" id="phonenumber" name="phonenumber" required>

        <label for="username">Username:</label>
        <input type="text" placeholder="Enter your username" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" placeholder="Enter your email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" placeholder="Enter your password" id="password" name="password" required>

        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" placeholder="Confirm your password" id="confirmpassword" name="confirmpassword" required>

        <button type="submit" class="signup-btn">Register</button>

    </form>
</div>

    </main>

    <!-- Rest of your webpage content goes here -->

</body>
</html>
