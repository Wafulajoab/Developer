<!-- active-investments.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Active Investments</title>
    <link rel="stylesheet" href="active investment.css">
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
<!-- 
        <div class="auth-buttons">
            <a href="login.html" class="login-btn">Login</a>
            <a href="signup.html" class="signup-btn">Sign Up</a>
        </div> -->
    </header>

    <main>
        <section class="active-investments-section">
            <h2>Active Investments</h2>
            <div class="active-investments-list">
                <!-- Placeholder for active investments -->
                <div class="investment-item" id="active-investment-1">
                    <h3>Silver Package</h3>
                    <p>Investment Amount: $100</p>
                    <p>Return Percentage: 30%</p>
                    <p>Start Date: January 20, 2024</p>
                    <div id="active-investment-1-countdown"></div>
                    <p>Expected Return: $<span id="active-investment-1-return"></span></p>
                </div>

                <!-- Add more investment items as needed -->

            </div>
        </section>
    </main>

    <script>
        // Placeholder data for active investments
        const activeInvestments = [
            { packageName: 'Silver', returnPercentage: 30, durationDays: 3, investmentAmount: 100, startDate: new Date('2024-01-20') },
            // Add more active investments as needed
        ];

        // Display active investments
        activeInvestments.forEach((investment, index) => {
            displayActiveInvestment(investment, index + 1);
        });

        function displayActiveInvestment(investment, index) {
            const countdownElement = document.getElementById(`active-investment-${index}-countdown`);
            const returnElement = document.getElementById(`active-investment-${index}-return`);

            const endDate = new Date(investment.startDate);
            endDate.setDate(endDate.getDate() + investment.durationDays);

            function updateCountdown() {
                const currentDate = new Date();
                const timeDifference = endDate - currentDate;

                if (timeDifference <= 0) {
                    countdownElement.innerHTML = "Investment matured!";
                    // Calculate expected return
                    const expectedReturn = investment.investmentAmount * (investment.returnPercentage / 100);
                    returnElement.innerHTML = expectedReturn.toFixed(2);
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
