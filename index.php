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
