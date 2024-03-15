<!-- withdraw.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Withdraw</title>
    <link rel="stylesheet" href="withdraw.css">
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
        <section class="withdraw-section">
            <h2>Withdraw</h2>
            <!-- Section to display account balance -->
            <div class="account-balance">
                <p>Available Balance: $500.00</p> <!-- Placeholder value, replace with actual balance -->
            </div>
            <!-- Withdraw form -->
            <form action="#" method="post">
                <label for="withdrawAmount">Enter Withdrawal Amount:</label>
                <input type="number" id="withdrawAmount" name="withdrawAmount" min="0" step="0.01" required>
                <button type="submit">Submit Withdrawal</button>
            </form>
        </section>
    </main>
    <!-- Rest of your webpage content goes here -->

</body>
</html>

