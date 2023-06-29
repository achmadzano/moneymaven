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
    <link rel="stylesheet" href="css/transaction.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	
	<!----===== Javascript ===== -->
	

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
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Overview</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="transaction.php">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="insights.php">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Insights</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="function/logout.php">
                        <i class='bx bx-log-out icon'></i>
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
        <div class="head">
            <div >ADD Transactions</div>
		<form class="form_transaction" name = "transaction" method = "POST" action = "function/run.php">
            <div>
                <button class="green-button" type="submit" name="addTransactions">Save</button>
            </div>
        </div>
        
        <!-- CODING NYA MULAI DISINI BUAT BIKIN FITUR2 NYA -->
        <div  class="container-transaction">
			<input type = "text" name = "idUser" value = "<?php echo $_COOKIE['idUser'];?>" hidden/>
            <div class="type">
                <div>
					<label for="typeExpense" >EXPENSE</label>
                    <input type="radio" name="type" id="typeExpense" value="expense">
                </div>
                <div>
                    <label for="typeIncome">INCOME</label>
                    <input type="radio" name="type" id="typeIncome" value="income">
                </div>
            </div>
            <div class="note">
                    <label for="">Note :</label>
                    <input type="text" class="styled-input"  name="note">
            </div>
             <div class="category">
                <div>
					<input type="radio" name="category" id="foodanddrinks" value="Food & Drinks">
                    <label for="foodanddrinks" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: blue;"></div> 
                        <div>Food & Drinks</div> 
                    </label>
                </div>
                <div>
					<input type="radio" name="category" id="vehicies" value="vehicies">
                    <label for="vehicies" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: yellow;"></div> 
                        <div>Vehicies</div> 
                    </label>
                </div>
                <div>
					<input type="radio" name="category" id="invesment" value="invesment">
                    <label for="invesment" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: pink;"></div> 
                        <div>Invesment</div> 
                    </label>
                </div>
                <div>
					<input type="radio" name="category" id="shopping" value="shopping">
                    <label for="shopping" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: purple"></div> 
                        <div>Shopping</div> 
                    </label>
                </div>
                <div>
					<input type="radio" name="category" id="entertainment" value="entertainment">
                    <label for="entertainment" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: green"></div> 
                        <div>Entertainment</div> 
                    </label>
                </div>
                <div>
                    <input type="radio" name="category" id="income" value="income">
					<label for="income" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: orange"></div> 
                        <div>Income</div> 
                    </label>
                </div>
                <div>
					<input type="radio" name="category" id="housing" value="housing">
                    <label for="housing" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: red"></div> 
                        <div>Housing</div> 
                    </label>
                </div>
                <div>
					<input type="radio" name="category" id="hobbies" value="hobbies">
                    <label for="hobbies" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: deepskyblue"></div> 
                        <div>Hobbies</div> 
                    </label>
                </div>
                <div>
					<input type="radio" name="category" id="other" value="other">
                    <label for="other" style="display: flex; gap: 10px; justify-items: center;"> 
                        <div style="width: 20px; height: 25px; border-radius: 10px; background-color: gray"></div> 
                        <div>Other</div> 
                    </label>
                </div>
            </div>
            <div class="amount">
                    <label for="">Amount : </label>
                    <input type="text" class="styled-input" name = "amount">
            </div>
        </form>
        </div>
    </section>
    <script src="js/click.js"></script>
	<script src = 'js/transaction.js'></script>
</body>

</html>