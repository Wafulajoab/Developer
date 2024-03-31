<!-- contact.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Investment Platform</title>
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

/* Add styles for the Contact section */
.contact-section {
    margin: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 50px;
    color: #333;
}

.contact-section h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.contact-section p {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
}

form {
    max-width: 600px;
    margin-bottom: 20px;
}

form label {
    display: block;
    font-size: 16px;
    margin-bottom: 5px;
}

form input,
form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

form button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 50px;
}

form button:hover {
    background-color: #45a049;
}

.contact-info {
    max-width: 600px;
}

.contact-info h3 {
    font-size: 20px;
    margin-top: 15px;
    margin-bottom: 10px;
}

.contact-info p {
    font-size: 16px;
    color: #666;
    margin-bottom: 10px;
}

/* ... (Other styles) */

 </style>
</head>

<header style="position: fixed; top: 0; left: 0; right: 0; background-color: blue; padding: 10px;">
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

<br><br><br>

<body>

  

    <main style="width: 50%; margin: 0 auto;">
      
        <section class="contact-section">
            <h2>Contact Us</h2>
       

        <div>
            <p>If you have any questions or inquiries, feel free to reach out to us using the contact form below or through the provided contact information.</p>

            <form action="#" method="post" style="width: 50%; margin: 0 auto;">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            
                <button type="submit">Submit</button>
            </form>
            

            <div class="contact-info">
                <h3>Contact Information</h3>
                <p>Email: topeaglesinv@gmail.com</p>
                <p>Phone: +2547 456 789</p>
                <p>Address: 123 Investment Street, Cityville</p>
            </div>
        </section>
    </main>

    <!-- Rest of your webpage content goes here -->

</body>
</html>
