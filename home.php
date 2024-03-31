<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Platform</title>
<style>
    body {
    margin: 0;
    font-family:'Times New Roman', Times, serif;
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

.auth-buttons {
    display: flex;
    align-items: center;
}

.icon{
    top: 50px;
    display: flex;
    margin: 10px;
    text-align: center;
    margin-top: 2rem;
    justify-content: space-between;
    
}
.text{
    width:700px;
    background: rgb(238, 247, 120);
    right: 100px;
    border-radius: 50px;
}
.text h1{
    text-align: center;
    margin-top: 2rem;
    font-weight: bold;
    font-family: 'Times New Roman';
    font-size: 25px;
    text-transform: uppercase;
}
.text p{
    text-align: justify;
    margin-top: 5px;
    line-height: 1.5rem;
}
.image{
    width: 500px;
    height: 50vh;
    padding-top: 50px;
    padding-bottom: 0px;
    background: rgb(102, 102, 238);
    border-radius: 50px;
}
.image2{
    margin-top: 10px;
    width: 50vh;
    height: 40vh;
}

h2{
    font-weight: bold;
    font-family: 'Times New Roman';
    font-size: 1rem;
    text-align: center;
    text-transform: uppercase;
}
h3{
    font-weight: lighter;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 1rem;
    text-align: center;
    text-transform: none;
}
p{
    font-weight: 20%;
    text-align: center;
    text-transform: none;
}

.footer{
    width: 100%;
    background: lavender;
    text-align: justify;
    margin: 5px;
    padding: 0.2rem;
}
.footer a{
    color: rgb(10, 10, 10);
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
</style>
    
    
</head>
<body>

    <header>
        <img id="logo" src="eagles.jpeg" alt="Company Logo">
        
          
        <nav>
            <a href="home.php">Home</a>
            <a href="investment.php">Investments</a>
            <a href="forex training.php">Forex Training</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>

        <!-- <div class="auth-buttons">
            <a href="login.html" class="login-btn">Login</a>
            <a href="signup.html" class="signup-btn">Sign Up</a>
        </div> -->
    </header>
    <div class="icon">
          <div class="image">
            <img src="eagles.jpeg" alt="Avatar" class="avatar" style="border-radius: 50px;">
          </div>
          <div class="text">
                <h1>Welcome to Top Eagle Investments Company</h1>
                <p><br> This is a  Forex based Investment company that is here to offer all Forex Services. 
                    <br>
                    That includes the following;
                    <br>
                    1. Training and Mentorship
                    <br>
                    2. Trade Signals and mark ups
                    <br>
                    3. Investments Services
                    <br>
                    <br>
                      Very much welcomed on Board. Thank you! </p>
          </div>
         
    </div>
    <h2>Make Money Through Forex Investments!</h2>
    <h3>The Future is Here!</h3>
    <footer>
          <div class="footer">
          <p>Company.<strong>All Rights Reserved.</strong>Designed By<a href="#"> @Joab_Job</a></p>      
          </div>
    </footer>

</body>
</html>
