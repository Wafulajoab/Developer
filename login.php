<!-- login.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Your Investment Platform</title>
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

.login-container {
    max-width: 360px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 50px;
}



.login-container h2 {
    text-align: center;
}
/* Fading background image animation */
.login-container::before {
    content: "";
    position: absolute;
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

form {
    display: flex;
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
    background-color: #020202;
    color: #fff;
    padding: 8px 20px;
    font-size: 16px;
    font-family:'Times New Roman', Times, serif;
    border: none;
    cursor: pointer;
    border-radius: 50px;
    max-width: 80px;
}

button:hover {
    background-color: #45a049;
}

   </style>
</head>
<br><br>
<body>
<!-- 
    <header>
        <img id="logo" src="eagles.jpeg" alt="Company Logo">
            
        <nav>
            <a href="home.html">Home</a>
            <a href="investment.html">Investments</a>
            <a href="forex training.html">Forex Training</a>
            <a href="about.html">About Us</a>
            <a href="contact.html">Contact</a>
        </nav>

         <div class="auth-buttons">
            <a href="login.html" class="login-btn">Login</a>
            <a href="signup.html" class="signup-btn">Sign Up</a>
            
        </div>
    </header> -->

    <main>
        <div class="login-container">
            <div class="imgcontainer">
                <img src="eagles.jpeg" alt="Avatar" class="avatar" style="border-radius: 50px;">
            </div>
            
            <h2>Login to Your Account</h2>
            <div class="container">
                <label class="username" for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <br>
                    <label class="password" for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <br>
                <button id="buttonMe" type="submit">Login</button>
                <br>
                <script type="text/javascript">
                    document.getElementById("buttonMe").onclick = function(){
                        location.href = "home.php";
                    };
                </script>
                <label>
                    <input type="checkbox" checked="checked" name="remember">
                    <name class="remember">Remember me</name>
                    <br>
                    <a href="signup.php" style="text-align: center;">Create Account</a>
                </label>
            </div>
        </div>
    </main>

    <!-- Rest of your webpage content goes here -->

</body>
</html>
