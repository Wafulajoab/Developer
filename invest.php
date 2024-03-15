<!-- invest.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Invest</title>
    <link rel="stylesheet" href="invest.css">
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
