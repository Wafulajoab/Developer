<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Top Eagles Investments!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
            background-image: url('eagles.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; /* Added for absolute positioning of buttons */
        }

        .message {
            font-size: 40px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: slideUp 1s ease-in-out forwards, glow 6s infinite alternate;
            opacity: 0;
        }

        @keyframes slideUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 100;
            }
        }

        @keyframes glow {
            0% {
                color: rgb(32, 245, 4);
            }

            25% {
                color: rgb(5, 5, 5);
            }


            50% {
                color: rgb(245, 32, 4);
            }

            75% {
                color: purple;
            }


            100% {
                color: rgb(4, 32, 245);
            }
        }

        .auth-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .login-btn,
        .signup-btn {
            margin-left: 10px;
            padding: 5px 10px;
            background-color: #4CAF50; /* Green background color */
            color: #fff;
            text-decoration: none;
            border-radius: 50px; /* Rounded corners */
        }

        .login-btn:hover,
        .signup-btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }


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
    border-radius: 50px;
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

.invest-section {
    margin-top: 20px;
}

.investment-packages {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    border-radius: 50px;

}

.package {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 50px;
    padding: 20px;
    width: 20%;
}

.package h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.package p {
    margin-bottom: 10px;
}

.package button {
    background-color: #4CAF50;
    color: #fff;
    padding: 8px 12px;
    border: none;
    cursor: pointer;
    border-radius: 50px;
}

.package button:hover {
    background-color: #45a049;
   
}

#silver-countdown,
#bronze-countdown,
#gold-countdown {
    margin-top: 10px;
    font-weight: bold;
}

    </style>
</head>

<body>
    <div class="auth-buttons">
        <a href="login.php" class="login-btn">Login</a>
        <a href="signup.php" class="signup-btn">Sign Up</a>
    </div>

    <div class="message">
        <h1>Welcome to Top Eagles Investments!</h1>
    </div>
</body>

</html>
