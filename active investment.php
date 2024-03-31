<!-- active-investments.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Active Investments</title>
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

.active-investments-section {
    margin-top: 20px;
    margin-left: 550px;
    
}

.active-investments-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
    
    
}

.investment-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    width: 30%;
    margin-bottom: 20px;
    border-radius: 50px;
    
}

.investment-item h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.investment-item p {
    margin-bottom: 10px;
}

#active-investment-1-countdown,
#active-investment-2-countdown,
#active-investment-3-countdown {
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
