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
    <link rel="stylesheet" href="css/insights.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	
	<!----===== PHP coding ===== -->
	<?php
		
	?>
	
	<!----===== Javacripts ===== -->
	<script src = "https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js"></script>
	
    <title>MoneyMaven</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="image/moneymaven2.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"><?php echo $_COOKIE['name'];?></span>
                    <span class="profession"><?php echo '$' . $_COOKIE['amount'];?></span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Overview</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="transaction.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="insights.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Insights</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="function/logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
				<li class="">
                    <a href="settings.php">
                        <i class='bx bx-cog icon' ></i>
                        <span class="text nav-text">Settings</span>
                    </a>
                </li>
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Insights</div>
        <!-- CODING NYA MULAI DISINI BUAT BIKIN FITUR2 NYA -->
		
		<div id="pieChart" style="height: 300px; max-width: 920px; margin: 0px auto;">
		</div>
		<div id="mainInsights" style="height: 300px; max-width: 920px; margin: 0px auto;">
		</div>
		<?php include("js/insight.php");?>
    </section>
	
    
    
	<script src="js/click.js"></script>
    

</body>
</html>