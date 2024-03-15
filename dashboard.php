<!-- dashboard.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
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

    
        <section class="dashboard-section">
            <h2>Dashboard</h2>
            <table class="dashboard-table">
                <tr>
                    <th>User Info</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td>[User Name]</td>
                </tr>
                <tr>
                    <td>Current Balance:</td>
                    <td>$5,000</td>
                </tr>
                <tr>
                    <td>Active Investments:</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Earnings from Referrals:</td>
                    <td>$100</td>
                </tr>
            </table>
        </section>

        <!-- Add other dashboard sections and features as needed -->

    </main>

    <!-- Rest of your webpage content goes here -->

</body>
</html>
