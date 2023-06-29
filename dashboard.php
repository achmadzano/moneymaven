<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="moneymaven2.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="font/fontawesome/fontawesome.min.css" />

    <!----===== Boxicons CSS ===== -->
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>MoneyMaven</title>
  </head>
  <body>
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="image/moneymaven2.png" alt="" />
          </span>

          <div class="text logo-text">
            <span class="name"><?php echo $_COOKIE['name'];?></span>
            <span class="profession"><?php echo '$' . $_COOKIE['amount'];?></span>
          </div>
        </div>

        <i class="bx bx-chevron-right toggle"></i>
      </header>

      <div class="menu-bar">
        <div class="menu">
          <ul class="menu-links">
            <li class="nav-link">
              <a href="dashboard.php">
                <i class="bx bx-home-alt icon"></i>
                <span class="text nav-text">Overview</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="transaction.php">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="text nav-text">Transactions</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="insights.php">
                <i class="bx bx-pie-chart-alt icon"></i>
                <span class="text nav-text">Insights</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="bottom-content">
          <li class="">
            <a href="function/logout.php">
              <i class="bx bx-log-out icon"></i>
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
      <div class="text">Dashboard</div>
      <!-- CODING NYA MULAI DISINI BUAT BIKIN FITUR2 NYA -->
      <div class="row p-4">
        <div class="col-lg-4">
          <div class="card dim-card py-4">
            <div class="card-body text-center">
              <div class="row">
                <div
                  class="col-lg-2 d-flex align-items-center justify-content-center"
                >
                  <a href="javascript:void(0)">
                    <div class="circle-chev">
                      <span class="fa fa-arrow-left"></span>
                    </div>
                  </a>
                </div>
                <div class="col-lg-8">
                  <h5 class="title-head">IN MY POCKET</h5>
                  <h1 class="title my-3"><?php echo '$' . $_COOKIE['amount'];?></h1>
                  <p class="mt-0 desc">-$38/day for 19 days</p>
                  <div class="d-flex justify-content-center mt-4">
                    <a href="insights.php">
                      <div class="btn-green">
                        <span class="text-button"> See your Insights </span>
                      </div>
                    </a>
                  </div>
                  <div class="d-flex justify-content-center mt-5">
                    <a href="javascript:void(0)">
                      <div class="circle-disabled"></div>
                    </a>
                    <a href="javascript:void(0)">
                      <div class="circle ml-1"></div>
                    </a>
                  </div>
                </div>
                <div
                  class="col-lg-2 d-flex align-items-center justify-content-center"
                >
                  <div class="circle-chev-disabled">
                    <span class="fa fa-arrow-right"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card py-4 dim-card card-notification">
            <div class="card-body pt-4 text-center">
              <h1 class="fa fa-bell text-bell"></h1>
              <div class="d-flex justify-content-center">
                <p class="mt-3 desc-notification" style="width: 70%">
                  New notifications will appear as they become available.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card dim-card border-radius">
            <div class="card-header bg-dark py-4 d-flex align-items-center">
              <span class="title-card text-yellow"> UPCOMING BILLS </span>
              <a href="javascript:void(0)" class="title-arrow">
                <span> > </span>
              </a>
            </div>
            <div class="card-body pt-4 text-center">
              <table class="table">
				<?php
					include("function/connect.php");
					include("function/function.php");
					$idUser = $_COOKIE['idUser'];
					$sql = "SELECT * FROM user_bills WHERE id_user = $idUser";
					$result = mysqli_query($con, $sql);
					$billNexDue = date("Y-m-d", time());
					while($row = mysqli_fetch_array($result)){
						$billSource = $row['bill_source'];
						$billAmount = $row['amount'];
						$billFrequency = $row['frequency'];
						$billNextDue = $row['next_bill_due'];
					}
					$curMonth = explode("-", $billNextDue);
					$intMonth = (int) $curMonth[1];
					date_default_timezone_set('Asia/Jakarta');
					$billNextDue = strtotime($billNextDue);
					$date = strtotime(date("Y-m-d", time()));
					$nowMonth = explode("-", $date);
					if($billNextDue < $date){
						$intMonth++;
					}
					$month = month($intMonth);
				?>
                <tr>
                  <td style="width: 12%" class="text-left">
                    <div class="text-center">
                      <div><?php echo $month;?></div>
                      <div class="pt-2"><?php echo $curMonth[2];?></div>
                    </div>
                  </td>
                  <td style="width: 100%" class="text-left">
                    <span class="pl-3"><?php echo $billSource;?> </span>
                  </td>
                  <td style="width: 100%"><?php echo '$' . $billAmount . '.00';?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row py-2 px-4">
        <div class="col-lg-12">
          <div class="card dim-card-list border-radius">
            <div class="card-header bg-dark py-4 d-flex align-items-center">
              <span class="title-card text-green"> NEXT PAYCHECK </span>
              <a href="javascript:void(0)" class="title-arrow">
                <span> > </span>
              </a>
            </div>
            <div class="card-body pt-4 text-center">
              <table class="table">
				<?php
					$sql = "SELECT * FROM user_income WHERE id_user = $idUser";
					$result = mysqli_query($con, $sql);
					$incomeNextDeposit = date("Y-m-d", time());
					while($row = mysqli_fetch_array($result)){
						$incomeSource = $row['income_source'];
						$incomeAmount = $row['amount'];
						$incomeFrequency = $row['frequency'];
						$incomeNextDeposit = $row['next_deposit'];
					}
					$curMonth = explode("-", $incomeNextDeposit);
					$intMonth = (int) $curMonth[1];
					date_default_timezone_set('Asia/Jakarta');
					$incomeNextDeposit = strtotime($incomeNextDeposit);
					$date = strtotime(date("Y-m-d", time()));
					$nowMonth = explode("-", $date);
					if($incomeNextDeposit < $date){
						$intMonth++;
					}
					$month = month($intMonth);
				?>
                <tr>
                  <td style="width: 12%" class="text-left">
                    <div class="text-center" style="color: #3d4645">
                      <div><?php echo $month;?></div>
                      <div class="pt-2"><?php echo $curMonth[2];?></div>
                    </div>
                  </td>
                  <td style="width: 100%" class="text-left">
                    <span class="pl-3" style="color: #3d4645"><?php echo $incomeSource;?></span>
                  </td>
                  <td style="width: 100%"><?php echo '$' . $incomeAmount . '.00';?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-4 px-4">
        <div class="col-lg-4">
          <div class="card dim-card-list-3 border-radius">
            <div class="card-header bg-dark py-4 d-flex align-items-center">
              <span class="title-card text-lightblue"> GOALS </span>
              <a href="javascript:void(0)" class="title-arrow">
                <span> > </span>
              </a>
            </div>
			<?php
				$sql = "SELECT * FROM user_goals WHERE id_user = $idUser";
				$result = mysqli_query($con, $sql);
				$goalDueDate = date("Y-m-d", time());
				while($row = mysqli_fetch_array($result)){
					$goalName = $row['goal_name'];
					$goalTargetAmount = $row['goal_target_amount'];
					$goalDueDate = $row['goal_due_date'];
				}
				$curMonth = explode("-", $goalDueDate);
				$intMonth = (int) $curMonth[1];
				date_default_timezone_set('Asia/Jakarta');
				$goalDueDate = strtotime($goalDueDate);
				$date = strtotime(date("Y-m-d", time()));
				$nowMonth = explode("-", $date);
				$month = month($intMonth);
				
				$sql = "SELECT * FROM transaction WHERE id_user = $idUser";
				$result = mysqli_query($con, $sql);
				$goals = 0;
				while($row = mysqli_fetch_array($result)){
					$typeTransaction = $row['type_transaction'];
					$transactionAmount = $row['amount'];
					if($typeTransaction == 'expense'){
						$goals = $goals - $transactionAmount;
					}else{
						$goals = $goals + $transactionAmount;
					}
				}
			?>
            <div class="card-body pt-4 text-center">
              <div class="d-flex justify-content-between">
                <div class="text-left">
                  <h1 class="title my-3"><?php echo '$'. $goals;?></h1>
                  <p class="mt-0 desc">Total saved in <?php echo $month;?></p>
                </div>
                <div class="text-right">
                  <h1 class="title-price-right my-3"><?php echo '$' . ((int)$goalTargetAmount - (int)$_COOKIE['amount']);?></h1>
                  <p class="mt-0 desc">left to save in 1 goal</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card dim-card-list-3 border-radius">
            <div class="card-header bg-dark py-4 d-flex align-items-center">
              <span class="title-card text-white"> NET INCOME </span>
              <a href="javascript:void(0)" class="title-arrow">
                <span> > </span>
              </a>
            </div>
            <div class="card-body pt-4 text-center">
              <div class="d-flex justify-content-between">
                <div class="text-left">
				  <?php
					$sql = "SELECT * FROM transaction WHERE id_user = $idUser";
					$result = mysqli_query($con, $sql);
					$expense = 0;
					$income = 0;
					$nowDate = date("Y-m-d", time());
					$arrDate = explode("-", $nowDate);
					$arrNowDate = explode("-", $nowDate);
					while($row = mysqli_fetch_array($result)){
						$date = $row['date'];
						$arrDate = explode("-", $date);
						if($arrNowDate[1] == $arrDate[1]){
							if($row['type_transaction'] == "expense"){
								$expense = $expense + $row['amount'];
							}else{
								$income = $income + $row['amount'];
							}
						}
					}
					$nowMonth = month((int)$arrDate[1]);
					$netIncome = $incomeAmount - $billAmount - $expense;
					if($_COOKIE['amount'] < 0){
						$netIncome = 0;
					}
				  ?>
                  <h1 class="title my-3"><?php echo '$' . $netIncome;?></h1>
                  <p class="mt-0 desc">So far in <?php echo $nowMonth;?></p>
                </div>
                <div class="text-right">
                  <h1 class="title-price-right my-3">$0</h1>
                  <p class="mt-0 desc">vs. this time last month</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card dim-card-list-3 border-radius">
            <div class="card-header bg-dark py-4 d-flex align-items-center">
              <span class="title-card text-purple"> SPENDING AND BUDGETS </span>
              <a href="javascript:void(0)" class="title-arrow">
                <span> > </span>
              </a>
            </div>
			<?php
				$sql = "SELECT * FROM transaction WHERE id_user = $idUser";
				$result = mysqli_query($con, $sql);
				$expense = 0;
				$income = 0;
				$nowDate = date("Y-m-d", time());
				$arrDate = explode("-", $nowDate);
				$arrNowDate = explode("-", $nowDate);
				while($row = mysqli_fetch_array($result)){
					$date = $row['date'];
					$arrDate = explode("-", $date);
					if($arrNowDate[1] == $arrDate[1]){
						if($row['type_transaction'] == "expense"){
							$expense = $expense + $row['amount'];
						}else{
							$income = $income + $row['amount'];
						}
					}
				}
				$nowMonth = month((int)$arrDate[1]);
			?>
            <div class="card-body pt-4 text-center">
              <div class="d-flex justify-content-between">
                <div class="text-left">
                  <h1 class="title my-3"><?php echo '$' . $expense;?></h1>
                  <p class="mt-0 desc">Total spend in <?php echo $nowMonth;?></p>
                </div>
                <div class="text-right">
                  <h1 class="title-price-right my-3"><?php echo '$' . $_COOKIE['amount'];?></h1>
                  <p class="mt-0 desc">left in 1 budget</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <script src="js/dashboard.js"></script>
  </body>
</html>
