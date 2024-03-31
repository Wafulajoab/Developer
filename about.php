<!-- about-us.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Investment Platform</title>
    <style>
        /* investment-styles.css */

body {
    margin: 0;
    font-family:'Times New Roman', Times, serif;
}

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
    background-color: #072bf5;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: left;
}

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
    margin: 15px;
    font-weight: bold;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #4CAF50;
    color: #fff;
    padding: 8px 12px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #333;
    padding: 12px 16px;
    display: block;
    text-decoration: none;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
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
    margin-left: 15px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    border-radius: 50px;
}

.login-btn:hover,
.signup-btn:hover {
    background-color: #45a049;
}

.main {
    padding: 20px;
    
}

/* Add styles for the About Us section */
.about-us-section {
    margin: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 50px;
    color: #333;
    max-width: 800px;
    padding-left: 50px;
    
}

.about-us-section h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.about-us-section h3 {
    font-size: 20px;
    margin-top: 15px;
    margin-bottom: 10px;
}

.about-us-section p {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
    
}

/* ... (Other styles) */

    </style>
</head>
<body>

    <header>
        <img id="logo" src="eagles.jpeg" alt="Company Logo">
        
        <nav>
            <a href="home.php">Home</a>
            <a href="investment.php">Investment</a>
            <a href="forex training.php">Forex Training</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>

        <!-- <div class="auth-buttons">
            <a href="login.html" class="login-btn">Login</a>
            <a href="signup.html" class="signup-btn">Sign Up</a>
        </div> -->
    </header>

    <main style="width: 50%; margin: 0 auto;">
        <section class="about-us-section">
            <h2>About Us</h2>
            <p>Welcome to Top Eagles Investment Platform, where we strive to provide you with the best investment opportunities. Our team is dedicated to ensuring your financial success through secure and reliable investment options.</p>
<br>
            <h3>Our Mission</h3>
            <p>At our Investment Platform, our main mission is to empower individuals to achieve their financial goals by offering transparent and efficient investment solutions.</p>
<br>
            <h3>Our Team</h3>
            <p>Meet the talented individuals behind our Investment Platform who are committed to delivering excellence in the world of investments. We combine expertise, innovation, and a client-centric approach to ensure your satisfaction.</p>
        </section>
    </main>

    <!-- Rest of your webpage content goes here -->

</body>
</html>
