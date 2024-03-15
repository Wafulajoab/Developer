<!-- matured-investments.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Matured Investments</title>
    <link rel="stylesheet" href="matured inv.css">
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

        <!-- <div class="auth-buttons">
            <a href="login.html" class="login-btn">Login</a>
            <a href="signup.html" class="signup-btn">Sign Up</a>
        </div> -->
    </header>

    <main>
        <section class="matured-investments-section">
            <h2>Matured Investments</h2>
            <div class="matured-investments-list">
                <!-- Placeholder for matured investments -->
                <div class="investment-item" id="matured-investment-1">
                    <h3>Silver Package</h3>
                    <p>Investment Amount: $100</p>
                    <p>Return Percentage: 30%</p>
                    <p>Start Date: January 20, 2024</p>
                    <p>End Date: January 23, 2024</p>
                    <p>Actual Return: $30</p>
                    <div class="investment-buttons">
                        <button onclick="reinvest(100, 'Silver')">Reinvest</button>
                        <button onclick="withdraw(30)">Withdraw</button>
                    </div>
                </div>

                <!-- Add more matured investment items as needed -->

            </div>
        </section>
    </main>

    <script>
        // Placeholder data for matured investments
        const maturedInvestments = [
            { packageName: 'Silver', returnPercentage: 30, investmentAmount: 100, startDate: new Date('2024-01-20'), endDate: new Date('2024-01-23') },
            // Add more matured investments as needed
        ];

        // Display matured investments
        maturedInvestments.forEach((investment, index) => {
            displayMaturedInvestment(investment, index + 1);
        });

        function displayMaturedInvestment(investment, index) {
            const maturedInvestmentsList = document.querySelector('.matured-investments-list');

            const investmentItem = document.createElement('div');
            investmentItem.className = 'investment-item';
            investmentItem.id = `matured-investment-${index}`;

            investmentItem.innerHTML = `
                <h3>${investment.packageName} Package</h3>
                <p>Investment Amount: $${investment.investmentAmount}</p>
                <p>Return Percentage: ${investment.returnPercentage}%</p>
                <p>Start Date: ${investment.startDate.toDateString()}</p>
                <p>End Date: ${investment.endDate.toDateString()}</p>
                <p>Actual Return: $${(investment.investmentAmount * (investment.returnPercentage / 100)).toFixed(2)}</p>
                <div class="investment-buttons">
                    <button onclick="reinvest(${investment.investmentAmount}, '${investment.packageName}')">Reinvest</button>
                    <button onclick="withdraw(${(investment.investmentAmount * (investment.returnPercentage / 100)).toFixed(2)})">Withdraw</button>
                </div>
            `;

            maturedInvestmentsList.appendChild(investmentItem);
        }

        function reinvest(amount, packageName) {
            // Placeholder logic for reinvesting
            alert(`Reinvest ${amount} in ${packageName} package.`);
            // You can implement the actual logic for reinvesting here
        }

        function withdraw(amount) {
            // Placeholder logic for withdrawal
            alert(`Withdraw $${amount}`);
            // You can implement the actual logic for withdrawal here
        }
    </script>

    <!-- Rest of your webpage content goes here -->

</body>
</html>
