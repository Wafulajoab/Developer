<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Your Investment Platform</title>
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
    margin: 0 15px;
    font-weight: bold;
}

.dropdown {
    position: relative;
    display: inline-block;

    
}

.dropbtn {
    background-color: #020202;
    color: #fff;
    padding: 8px 20px;
    font-size: 16px;
    font-family:'Times New Roman', Times, serif;
    border: none;
    cursor: pointer;
    border-radius: 50px;
   
    
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
    border-radius: 50px;
}

.dropdown-content a:hover {
    background-color: #ddd;
    
}

.dropdown:hover .dropdown-content {
    display: block;
    border-radius: 50px;
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


   </style>
</head>
<body>

    <header>
        <img id="logo" src="eagles.jpeg" alt="Company Logo">
        
        <nav>
          
            <div class="dropdown">
                <button class="dropbtn">Investments</button>
                <div class="dropdown-content">
                    <a href="dashboard.php">Dashboard</a>
                    <a href="deposit.php">Deposit</a>
                    <a href="invest.php">Invest</a>
                    <a href="active investment.php">Active Investments</a>
                    <a href="matured inv.php">Matured Investments</a>
                    <a href="withdraw.php">Withdraw</a>
                    <a href="referrals.php">Referrals</a>
                </div>
            </div>
         
        </nav>

        <!-- <div class="auth-buttons">
            <a href="login.html" class="login-btn">Login</a>
            <a href="signup.html" class="signup-btn">Sign Up</a>
        </div> -->
    </header>

    <main>
        
        <!-- Your content goes here -->
    </main>

    <!-- Rest of your webpage content goes here -->
 


</body>
</html>
