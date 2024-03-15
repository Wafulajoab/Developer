<!-- login.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Your Investment Platform</title>
    <link rel="stylesheet" href="login.css">
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
