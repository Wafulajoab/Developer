<!-- forex-training.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment - Forex Training</title>
<style>

    
body {
    margin: 0;
    font-family:'Times New Roman', Times, serif;
}

/* Fading background image animation */
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
    position: fixed; /* Set position to fixed */
    top: 0; /* Position at the top of the viewport */
    left: 0; /* Position at the left of the viewport */
    width: 100%; /* Take up full width of the viewport */
    background-color: #072bf5;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: left;
    z-index: 1000; /* Ensure the navigation bar appears above other content */
}

/* Adjustments for logo and nav */
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
    display:inline-block;
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
    align-items: center;
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
    /* margin-left: 10px; */
    margin-right: 25px;
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
    margin-left: 20px;
}

/* Add styles for the Forex Training module */
.forex-training-section {
    margin: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 50px;
    margin-left: 20px;
    max-width: 600px;
    align-items: center;
    justify-content: center;
    margin: 30px auto;
    
}

.forex-training-section h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.forex-training-section p {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
}

/* ... (Other styles) */

</style>
</head>

<br><br><br>
<body>

    <header>
        <img id="logo" src="eagles.jpeg" alt="Company Logo">
        
        <nav>
           
            <div class="dropdown">
                <button class="dropbtn">Forex Training</button>
                <div class="dropdown-content">
                    <a href="#section1">Introduction to Forex</a>
                    <a href="#section2">Intermediate Forex Classes</a>
                    <a href="#section3">Advanced Classes</a>
                    <a href="#section4">Trading Psychology</a>
                    <a href="#section5">Risk Management</a>
                    <a href="#section6">Risk Calculation</a>
                    <a href="#section7">Journaling</a>
                </div>
            </div>
         
        </nav>

         <!-- <div class="auth-buttons">
            <a href="login.html" class="login-btn">Login</a>
            <a href="signup.html" class="signup-btn">Sign Up</a>
        </div>  -->
    </header>

    <main>
        <section id="section1" class="forex-training-section">
            <h2>Introduction to Forex For Beginners</h2>
            <p>Click the link to watch the video;</p>
            <p> 1. Full Package Course for Beginners: <a href="https://youtu.be/mEyuQVy3OHc?si=xwHMcTLaVjmtIOeF" target="_blank">Watch Video</a></p>
            <p> 2. Common Trading Terminologies: <a href="https://youtu.be/WiJCR1Nvl6A?si=Lfqrv4bndoy_7c7i" target="_blank">Watch Video</a></p>
            <p> 3. Market Structures: <a href="https://youtu.be/AJNzpaHzaJM?si=zyofLWUN8pBDMUBK" target="_blank">Watch Video</a></p>
            <p> 4. Support and Resistance: <a href="https://youtu.be/nuVv0ZWUfs4?si=N6ncLuNx5-TS3Tzl" target="_blank">Watch Video</a></p>
            <p> 5. Trendlines: <a href="https://youtu.be/BONTuuxhujk?si=2YXoqdTnl9jvbJwQ" target="_blank">Watch Video</a></p>
            <p> 6. Chart Patterns: <a href="https://youtu.be/sWTnFS10tdQ?si=hYy4mTpzn3JYvI59" target="_blank">Watch Video</a></p>
            <p> 7. Introduction To Trading view: <a href="https://youtu.be/Vqrkbcdmuqc?si=Ay4T-sPNNpw-SZOv" target="_blank">Watch Video</a></p>
            <p> 8. Introduction To MT4 and MT5: <a href="https://youtu.be/1OxgLHzSNiY?si=mHsOXzr4e2npuPIl" target="_blank">Watch Video</a></p>
            <p> 9. Comprehensive Full Course For The Beginners: <a href="https://youtu.be/W7IGTX_Peso?si=PAcOiNJF6C5XBu4b" target="_blank">Watch Video</a></p>
            <p> 10. The Does and Don'ts In The Forex Market As A Beginners: <a href="https://youtu.be/hRPGFppusJo?si=dSKsHh3ZhV1tKGNi" target="_blank">Watch Video</a></p>
            <p> 11. Types of Forex Traders: <a href="https://youtu.be/UOVNf9929vs?si=iISbMggAEcVAKNPh" target="_blank">Watch Video</a></p>


        </section>

        <section id="section2" class="forex-training-section">
            <h2>Intermediate Forex Classes</h2>
            <p> 1. Trading Styles: <a href="https://youtu.be/ryLpjPEfKr4?si=GcN_VdokE5hw6kLI" target="_blank">Watch Video</a></p>
            <p> 2. Introduction to Smart Money Concepts: <a href="https://youtu.be/ryLpjPEfKr4?si=GcN_VdokE5hw6kLI" target="_blank">Watch Video</a></p>
            <p> 3. Order Flow Trading Strategy: <a href="https://youtu.be/I-Eun5vshAo?si=Wcp7SzmGTXVksXGa" target="_blank">Watch Video</a></p>
            <p> 4. Supply And Demand Trading Strategy: <a href="https://youtu.be/MWojeFFr674?si=yn1i3ka1AHyz6JJH" target="_blank">Watch Video</a></p>
            <p> 5. Introduction To Liquidity: <a href="https://youtu.be/NmqBchW7P5c?si=0lo9PNGtrrSzAqzb" target="_blank">Watch Video</a></p>
            <p> 6. Types of Liquidity in Forex: <a href="https://youtu.be/9i9_MRP3Wjk?si=e7mJjPEkQUCAohQJ" target="_blank">Watch Video</a></p>
            <p> 7. Imbalance, Break of Market Structure and Liquidity: <a href="https://youtu.be/k2uODEArEKc?si=XFw7-FvK-aHxBkzX" target="_blank">Watch Video</a></p>
            <p> 8. Order Blocks: <a href="https://youtu.be/Y8DkNYhq0X0?si=FNCiE8WXMe3sPbG7" target="_blank">Watch Video</a></p>
            <p> 9. Types of Forex Analysis: <a href="https://youtu.be/Lt3fP2KE0XM?si=FSxe14O7ItsQoAM-" target="_blank">Watch Video</a></p>
            <p> 10. The Four Types of Forex Analysis:<a href="https://youtu.be/9JEMwmmUGYw?si=Jrh0mD9fuBmzKLrX" target="_blank">Watch Video</a></p>
            <p> 11. Fundamental vs Technical Analysis: <a href="https://youtu.be/W3qxwSXJNMk?si=1_O0IAiv4oHObu1o" target="_blank">Watch Video</a></p>
            <p> 12. Types of Fundamental Analysis: <a href="https://youtu.be/96fi2w7SWXQ?si=CJjyrzM5LX5YhmD0" target="_blank">Watch Video</a></p>
            <p> 13. Basics To Must Know In Fundamentals: <a href="https://youtu.be/M3MA-i48eVk?si=0FqGod4r05vo2BeG" target="_blank">Watch Video</a></p>

        </section>

        <section id="section3" class="forex-training-section">
            <h2>Advanced Classes</h2>
            <p> 1. Advanced Order Flow: <a href="https://youtu.be/xej_K-UuIcw?si=IST05U8veocNVw21" target="_blank">Watch Video</a></p>
            <p> 2. Macro and Micro Trends: <a href="https://youtu.be/mWHzvsX9YuY?si=Src80OY3w6q8QTJi" target="_blank">Watch Video</a></p>
            <p> 3. Advanced Liquidity Concept: <a href="https://youtu.be/nwWn85GuiR8?si=c5eaG9KZpBDOdKkC" target="_blank">Watch Video</a></p>
            <p> 4. Anatomy of Price Flip: <a href="https://youtu.be/OlCQYzrvZKg?si=gQ6E232lEfrDgqDy" target="_blank">Watch Video</a></p>
            <p> 5. Real Time Delivery of Price {Imbalance}: <a href="https://youtu.be/Xy3DSieVvQo?si=VI7QdMqx0hI_UKI1" target="_blank">Watch Video</a></p>


        </section>

        <section id="section4" class="forex-training-section">
            <h2>Trading Psychology</h2>
            <p> 1. Trading Psychology Podcast - Ego: <a href="https://youtu.be/Xy3DSieVvQo?si=VI7QdMqx0hI_UKI1" target="_blank">Watch Video</a></p>
            <p> 2. Trading Psychology Strategies: <a href="https://youtu.be/vtmvk5m7wfI?si=IWgOg74uJiCqh8Tz" target="_blank">Watch Video</a></p>
            <p> 3. The Disciplined Trader - Mark Dauglas: <a href="https://youtu.be/b2fpf19HkuA?si=jd5yFV691VpkZrRO" target="_blank">Watch Video</a></p>
            <p> 4. Trading In The zone - Mark Dauglas: <a href="https://youtu.be/KUrjlyxEri0?si=Oo0Ke-CmeAVvQDzj" target="_blank">Watch Video</a></p>
            <p> 5. Market Psychology: <a href="https://youtu.be/zIxyIRyuZ1w?si=v2Li7_4gwpc8KG6-" target="_blank">Watch Video</a></p>
            <p> 6. The Psychology of Money - Morgan Hausel: <a href="https://youtu.be/X3eLHUdXpMc?si=fSpFzNvtA6s6owDd" target="_blank">Watch Video</a></p>
        </section>

        <section id="section5" class="forex-training-section">
            <h2>Risk Management</h2>
            <p> 1. How I Maximize Making Money While Minimizing Risk: <a href="https://youtu.be/YZm1ItLZsJg?si=084QxNpjWLUnVZHz" target="_blank">Watch Video</a></p>
            <p> 2. 2% Risk Management Rule For Trading: <a href="https://youtu.be/LJFZ_Y8EpmA?si=iSxvCfkhk1-nO9eu" target="_blank">Watch Video</a></p>
            <p> 3. Why Risk Management Is King: <a href="https://youtu.be/Rdpm7PZOtwE?si=ZjBaoqY2E-knnEzL" target="_blank">Watch Video</a></p>
        </section>

        <section id="section6" class="forex-training-section">
            <h2>Risk Calculation</h2>
            <p> 1. How to Calculate Lot Size: <a href="https://youtu.be/PW2IScj_OuA?si=DRm7TkyuuKunw9pX" target="_blank">Watch Video</a></p>
            <p> 2. Position Sizing In Forex Trading Guide: <a href="https://youtu.be/7f2bpEwiJCY?si=lgX4TmSlYkibldUv" target="_blank">Watch Video</a></p>
            <p> 3. Risk Management And Position Sizing: <a href="https://youtu.be/q5UiDAk1740?si=oB4pHdM5_V4CctMf" target="_blank">Watch Video</a></p>
        </section>

        <section id="section7" class="forex-training-section">
            <h2>Journaling</h2>
            <p> 1. My Excel Spreadsheet Trading Journal: <a href="https://youtu.be/CVJ6Sx7Y29w?si=pO7uMAFpOPBskG3j" target="_blank">Watch Video</a></p>
            <p> 2. How to Create a Day Trading Tracker in Google Sheets: <a href="https://youtu.be/fv1h4p2lfvQ?si=BKSe_S2bxliVqIh1" target="_blank">Watch Video</a></p>
            <p> 3. Simple Portfolio Tracker In Google Sheets: <a href="https://youtu.be/oNJeIQKA0J4?si=iAl1He1TLSRcdfjz" target="_blank">Watch Video</a></p>
            <p> 4. The Significance of Journaling: <a href="https://youtu.be/BfNVw53REiA?si=7WfA7Pkcy0yBY-Wa" target="_blank">Watch Video</a></p>
        </section>
    </main>

    <!-- Rest of your webpage content goes here -->

</body>
</html>
