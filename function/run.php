<?php
	include("connect.php");
	if(ISSET($_POST['createEmailPassword'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		
		if($password == $confirmPassword){
			$hashPassword = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO user (email, password, amount) values ('$email', '$hashPassword', 0)";
			if(mysqli_query($con, $sql)){
				$sql = "SELECT * FROM user ORDER BY id_user DESC LIMIT 1";
				$result = mysqli_query($con, $sql);
				while($row = mysqli_fetch_array($result)){
					$idUser = $row['id_user'];
				}
				setcookie('idUser', $idUser, time() + (60 * 60 * 24 * 5), '/');
				echo "<script>document.location = '../register/step1.php';</script>";
			}
		}else{
			echo "<script>alert('Register gagal!! Password tidak sama!!');document.location = 'javascript:history.back(0);'</script>";
		}
	}
	if(ISSET($_POST['createMonthlyIncome'])){
		$idUser = $_POST['idUser'];
		$incomeSource = $_POST['incomeSource'];
		$amount = $_POST['amount'];
		$frequency = $_POST['frequency'];
		$nextDeposit = $_POST['nextDeposit'];
		
		$sql = "INSERT INTO user_income (id_user, income_source, amount, frequency, next_deposit) values ($idUser, '$incomeSource', $amount, '$frequency', '$nextDeposit')";
		if(mysqli_query($con, $sql)){
			setcookie('idUser', $idUser, time() + (60 * 60 * 24 * 5), '/');
			echo "<script>document.location = '../register/step2.php';</script>";
		}
	}
	if(ISSET($_POST['createYourBills'])){
		$idUser = $_POST['idUser'];
		$billSource = $_POST['billSource'];
		$amount = $_POST['amount'];
		$frequency = $_POST['frequency'];
		$nextBillDue = $_POST['nextBillDue'];
		
		$sql = "INSERT INTO user_bills (id_user, bill_source, amount, frequency, next_bill_due) values ($idUser, '$billSource', $amount, '$frequency', '$nextBillDue')";
		if(mysqli_query($con, $sql)){
			setcookie('idUser', $idUser, time() + (60 * 60 * 24 * 5), '/');
			echo "<script>document.location = '../register/step3.php';</script>";
		}
	}
	if(ISSET($_POST['createSpendingCategories'])){
		$idUser = $_POST['idUser'];
		$categories = $_POST['categories'];
		$amount = $_POST['amount'];
		$frequency = $_POST['frequency'];
		$nextDeposit = $_POST['nextDeposit'];
		
		$sql = "INSERT INTO user_spending_categories (id_user, categories, amount, frequency, next_deposit) values ($idUser, '$categories', $amount, '$frequency', '$nextDeposit')";
		if(mysqli_query($con, $sql)){
			setcookie('idUser', $idUser, time() + (60 * 60 * 24 * 5), '/');
			echo "<script>document.location = '../register/step4.php';</script>";
		}
	}
	if(ISSET($_POST['createGoals'])){
		$idUser = $_POST['idUser'];
		$goalName = $_POST['goalName'];
		$goalTargetAmount = $_POST['goalTargetAmount'];
		$goalDueDate = $_POST['goalDueDate'];
		
		$sql = "INSERT INTO user_goals (id_user, goal_name, goal_target_amount, goal_due_date) values ($idUser, '$goalName', $goalTargetAmount, '$goalDueDate')";
		if(mysqli_query($con, $sql)){
			setcookie('idUser', $idUser, time() + (60 * 60 * 24 * 5), '/');
			echo "<script>document.location = '../register/congrats.php';</script>";
		}
	}
	if(ISSET($_POST['sukses'])){
		echo "<script>document.location = '../login.php';</script>";
	}
	if(ISSET($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user";
		$result = mysqli_query($con, $sql);
		$check = false;
		
		if($email == "" || $password == ""){
			echo "<script>alert('Fill your Email/Password!!');document.location = '../login.php';</script>";
		}
		
		while(($row = mysqli_fetch_array($result)) && !$check){
			if(($row['email'] == $email) && (password_verify($password, $row['password']))){
				$idUser = $row['id_user'];
				$email = $row['email'];
				$amount = $row['amount'];
				$check = true;
			}
		}
		if($check){
			$name = explode("@", $email);
			setcookie('name', $name[0], time() + (60 * 60 * 24 * 5), '/');
			setcookie('idUser', $idUser, time() + (60 * 60 * 24 * 5), '/');
			setcookie('amount', $amount, time() + (60 * 60 * 24 * 5), '/');
			setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
			
			echo "<script>alert('Welcome " . $name[0] . "!!');document.location = '../dashboard.php';</script>";
		}else{
			echo "<script>alert('Wrong Email/Password!!');document.location = 'javascript:history.back(0);'</script>";
		}
	}
	if(ISSET($_POST['addTransactions'])){
		$type = $_POST['type'];
		$note = $_POST['note'];
		$categories = $_POST['category'];
		$amount = $_POST['amount'];
		$idUser = $_POST['idUser'];
		
		date_default_timezone_set('Asia/Jakarta');
		$date = date("d-m-Y", time());
		
		if($type == "" || $note == "" || $categories == "" || $amount == ""){
			echo "<script>alert('Check again!!');document.location = 'javascript:history.back(0);'</script>";
		}else{
			$sql = "INSERT INTO transaction (id_user, type_transaction, note, categories, amount, date) values ($idUser, '$type', '$note', '$categories', $amount, '$date')";
		
			if(mysqli_query($con, $sql)){
				setcookie('idUser', $idUser, time() + (60 * 60 * 24 * 5), '/');
				
				$sql2 = "SELECT * FROM user WHERE id_user = $idUser";
				$result2 = mysqli_query($con, $sql2);
				
				while($row = mysqli_fetch_array($result2)){
					$amountNow = $row['amount'];
				}
				
				if($type == "expense"){
					$amountNow = $amountNow - $amount;
					
				}else{
					$amountNow = $amountNow + $amount;
				}
				
				$sql2 = "UPDATE user SET amount = $amountNow WHERE id_user = $idUser";
				
				if(mysqli_query($con, $sql2)){
					setcookie('amount', $amountNow, time() + (60 * 60 * 24 * 5), '/');
					echo "<script>alert('Transaction added!!');document.location = '../dashboard.php';</script>";
				}else{
					echo "<script>alert('Check again!!');document.location = 'javascript:history.back(0);'</script>";
				}
			}else{
				echo "<script>alert('Check again!!');document.location = 'javascript:history.back(0);'</script>";
			}
		}
	}
?>