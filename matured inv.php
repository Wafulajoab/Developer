<!-- matured-investments.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Matured Investments</title>
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
    border-radius: 50px;
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

/* Add these styles for the new sections */
.matured-investments-section {
    margin-top: 20px;
}

.matured-investments-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
}

.matured-investments-list .investment-item {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 50px;
    padding: 20px;
    width: 30%;
    margin-bottom: 20px;
    transition: transform 0.3s;
    position: relative;
}

.matured-investments-list .investment-item h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #333;
}

.matured-investments-list .investment-item p {
    margin-bottom: 10px;
    color: #666;
}

.matured-investments-list .investment-item:hover {
    transform: scale(1.03);
}

.matured-investments-list .investment-item:after {
    content: "";
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #ddd;
}

.investment-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

.investment-buttons button {
    padding: 10px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
}

.investment-buttons button:nth-child(1) {
    background-color: #4CAF50;
    color: #fff;
}

.investment-buttons button:nth-child(2) {
    background-color: #ff3333;
    color: #fff;
}

.investment-buttons button:hover {
    filter: brightness(90%);
}

/* Adjustments for both Active and Matured Investments */
.investment-item {
    position: relative;
}

.investment-item:after {
    content: "";
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #ddd;
}

/* Rest of your CSS styles */

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
