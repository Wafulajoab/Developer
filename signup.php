<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Your Investment Platform</title>
    <style>
        
body {
    margin: 0;
    font-family:'Times New Roman', Times, serif;
}

/* Fading background image animation */
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('eagles.jpeg'); /* Replace with your image URL */
    background-size: cover;
    background-position: center;
    z-index: -1;
    animation: fadeBackground 8s infinite alternate;
}

@keyframes fadeBackground {
    0% {
        opacity: 0.1;
    }
    100% {
        opacity: 0.1;
    }
}

header {
    position: fixed; /* Set position to fixed */
    top: 0; /* Position at the top of the viewport */
    left: 0; /* Position at the left of the viewport */
    width: 100%; /* Take up full width of the viewport */
    background-color: #072bf5;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: left;
    z-index: 1000; /* Ensure the navigation bar appears above other content */
}

/* Adjustments for logo and nav */
#logo {
    width: 70px; /* Adjust the size as needed */
    height: auto;
    border-radius: 50px;
}

nav {
    display: flex;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 15px;
    font-weight: bold;
}

.auth-buttons {
    display: flex;
    align-items: center;
}
.login-btn,
.signup-btn {
    background-color: #4CAF50;
    color: #fff;
    padding: 8px 12px;
    margin-right: 30px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    border-radius: 50px;
}

.login-btn:hover,
.signup-btn:hover {
    background-color: #45a049;
}

.signup-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 50px;
}

.signup-container h2 {
    text-align: center;
}

form {
    display:flex;
    flex-direction: column;

}

label {
    margin-bottom: 8px;
}

input {
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 50px;
}

button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
    border-radius: 50px;
}

button:hover {
    background-color: #45a049;
}
/* Fading background image animation */
.signup-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('eagles.jpeg'); /* Replace with your image URL */
    background-size: cover;
    background-position: center;
    z-index: -10;
    animation: fadeBackground 5s infinite;
}

@keyframes fadeBackground {
    0% {
        opacity: 0.1;
    }
    100% {
        opacity: 0.1;
        
    }
}
    </style>
    
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
