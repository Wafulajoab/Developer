<!-- invest.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Invest</title>
 <style>
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

    <header>
        <img id="logo" src="eagles.jpeg" alt="Company Logo">
        
        <nav>
          
            <div class="dropdown">
                <button class="dropbtn">Investment</button>
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

        <div class="auth-buttons">
            <a href="login.php" class="login-btn">Login</a>
            <a href="signup.php" class="signup-btn">Sign Up</a>
        </div>
    </header>

    <main>
        <section class="invest-section">
            <h2>Invest</h2>
            <div class="investment-packages">
                <div class="package" id="silver-package">
                    <h3>Silver Package</h3>
                    <p>30% return - 3 days</p>
                    <p>Investment Amount: $100</p>
                    <button onclick="invest('Silver', 30, 3, 100)">Invest Now</button>
                    <div id="silver-countdown"></div>
                </div>
                <div class="package" id="bronze-package">
                    <h3>Bronze Package</h3>
                    <p>50% return - 5 days</p>
                    <p>Investment Amount: $200</p>
                    <button onclick="invest('Bronze', 50, 5, 200)">Invest Now</button>
                    <div id="bronze-countdown"></div>
                </div>
                <div class="package" id="gold-package">
                    <h3>Gold Package</h3>
                    <p>100% return - 7 days</p>
                    <p>Investment Amount: $500</p>
                    <button onclick="invest('Gold', 100, 7, 500)">Invest Now</button>
                    <div id="gold-countdown"></div>
                </div>
            </div>
        </section>
    </main>

    <script>
        function invest(packageName, returnPercentage, durationDays, investmentAmount) {
            // Placeholder logic to check if the balance allows the investment
            const availableBalance = 1000; // Replace with the actual available balance
            if (investmentAmount > availableBalance) {
                alert("Insufficient funds. Please deposit more to invest.");
                return;
            }

            // Placeholder logic for handling investment
            alert(`You have invested $${investmentAmount} in the ${packageName} package!`);

            // Calculate the end date for the countdown
            const endDate = new Date();
            endDate.setDate(endDate.getDate() + durationDays);

            // Start the countdown
            startCountdown(packageName, endDate);
        }

        function startCountdown(packageName, endDate) {
            const countdownElement = document.getElementById(`${packageName.toLowerCase()}-countdown`);

            function updateCountdown() {
                const currentDate = new Date();
                const timeDifference = endDate - currentDate;

                if (timeDifference <= 0) {
                    countdownElement.innerHTML = "Investment matured!";
                } else {
                    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                    countdownElement.innerHTML = `Countdown: ${days}d ${hours}h ${minutes}m ${seconds}s`;
                }
            }

            // Update countdown every second
            setInterval(updateCountdown, 1000);

            // Initial update
            updateCountdown();
        }
    </script>

    <!-- Rest of your webpage content goes here -->

</body>
</html>
