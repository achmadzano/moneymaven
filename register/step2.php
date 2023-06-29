<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="moneymaven2.png">
    <link rel="manifest" href="/site.webmanifest">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/setup2.css">

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>MoneyMaven</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../image/moneymaven2.png" alt="">
                </span>
        </header>
    </nav>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../image/moneymaven2.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Achmad Fauzan</span>
                    <span class="profession">$100</span>
                </div>
            </div>

            <!-- <i class='bx bx-chevron-right toggle'></i> -->
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <!-- <a href="dashboard.html"> -->
                            <!-- <i class='bx bx-home-alt icon' ></i> -->
                            <span class="text nav-text">Overview</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <!-- <a href="transaction.html">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i> -->
                            <span class="text nav-text">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <!-- <a href="insights.html">
                            <i class='bx bx-pie-chart-alt icon' ></i> -->
                            <span class="text nav-text">Insights</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="login.html">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Add your bills 2/4</div>
        <!-- CODING NYA MULAI DISINI BUAT BIKIN FITUR2 NYA -->
            <!-- <div class="text">Dashboard</div> -->
            <section class="container forms">
                <div class="form login">
                    <div class="form-content">
                        <header>Add a bill</header>
                        <form name = "bill" method = "POST" action = "../function/run.php">
                            <div class="field input-field">
								<input type = "text" name = "idUser" value = "<?php echo $_COOKIE['idUser']; ?>" hidden/>
                                <input type="text" name = "billSource" placeholder="Merchant Name" class="input">
                            </div>
    
                            <div class="field input-field">
                                <input type="text" name = "amount" placeholder="Amount" class="input">
                                <!-- <i class='bx bx-hide eye-icon'></i> -->
                            </div>

                            <div class="field input-field">
                                <select placeholder="Frequency (daily, weekly, monthly)" class="input" name = "frequency">
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                </select>
                                <!-- <i class='bx bx-hide eye-icon'></i> -->
                            </div>
                            
                            <div class="field input-field">
                                <input type="date" placeholder="Next till due" class="input" name = "nextBillDue">
                                <!-- <i class='bx bx-hide eye-icon'></i> -->
                            </div>
                            <!-- <div class="form-link">
                                <a href="#" class="forgot-pass">Forgot password?</a>
                            </div> -->
    
                            <div class="field button-field">
                                <button type="submit" name = "createYourBills">Save</button>
                            </div>
                        </form>
    
                        <!-- <div class="form-link">
                            <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                        </div> -->
                    </div>
    
                    <!-- <div class="line"></div>
    
                    <div class="media-options">
                        <a href="#" class="field facebook">
                            <i class='bx bxl-facebook facebook-icon'></i>
                            <span>Login with Facebook</span>
                        </a>
                    </div>
    
                    <div class="media-options">
                        <a href="#" class="field google">
                            <img src="google.png" alt="" class="google-img">
                            <span>Login with Google</span>
                        </a>
                    </div> -->
    
                </div>

    </section>
    
    

    <script src="js/setup2.js"></script>

</body>
</html>