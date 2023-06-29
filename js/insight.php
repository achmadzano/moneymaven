<?php
	include("function/connect.php");
	$idUser = $_COOKIE['idUser'];
	$sql = "SELECT * FROM transaction WHERE id_user = $idUser AND type_transaction = 'expense'";
	$result = mysqli_query($con, $sql);
	$i = 0;
	$category = [];
	$amount = [];
	while($row = mysqli_fetch_array($result)){
		array_push($category, $row['categories']);
		array_push($amount, $row['amount']);
		$i++;
	}
	$newCategory = [];
	$newAmount = [];
	
	for($i = 0; $i < count($category); $i++){
		if(!in_array($category[$i], $newCategory)){
			array_push($newCategory, $category[$i]);
			$tempAmount = $amount[$i];
			for($j = 0; $j < count($category); $j++){
				if($category[$i] == $category[$j] && $i != $j){
					$tempAmount = $tempAmount + $amount[$j];
				}
			}
			array_push($newAmount, $tempAmount);
		}
	}
	$data = [];
	for($i = 0; $i < count($newCategory); $i++){
		array_push($data, [$newCategory[$i], $newAmount[$i]]);
	}
?>
<script>
	var count = <?php echo $i;?>;
	var dataPie = [];
	var data = [];
	<?php
		for($i = 0; $i < count($data); $i++){
			echo "data = ['" . $data[$i][0] . "', " . $data[$i][1] . "];";
			echo "dataPie.push(data);";
		}
	?>
	
	var chart1 = anychart.pie();
	
	chart1.data(dataPie);
	chart1.title("Total cost");
	chart1.container("pieChart");
	chart1.draw();
</script>

<?php
	$sql = "SELECT * FROM transaction WHERE id_user = $idUser";
	$result = mysqli_query($con, $sql);
	$amount = [];
	$date = [];
	$typeTransaction = [];
	while($row = mysqli_fetch_array($result)){
		array_push($amount, $row['amount']);
		array_push($date, $row['date']);
		array_push($typeTransaction, $row['type_transaction']);
	}
	$lastAmount = [];
	$newDate = [];
	for($i = 0; $i < count($amount); $i++){
		$arrDate = explode("-", $date[$i]);
		$curDate = $arrDate[0] . "-" . $arrDate[1];
		if(!in_array($curDate, $newDate)){
			array_push($newDate, $curDate);
			$tempAmount = 0;
			for($j = 0; $j < count($amount); $j++){
				if($date[$i] == $date[$j]){
					if($typeTransaction[$j] == "expense"){
						$tempAmount = $tempAmount - $amount[$j];
					}else{
						$tempAmount = $tempAmount + $amount[$j];
					}
				}
			}
			array_push($lastAmount, $tempAmount);
		}
	}
?>
<script>
	var dataLine = [];
	var data = [];
	<?php
		for($i = 0; $i < count($newDate); $i++){
			$curDate = explode("-", $newDate[$i]);
			for($j = 0; $j < 30; $j++){
				if(($j+1) == ((int)$curDate[0])){
					echo "data = [" . ($j+1) . ", " . $lastAmount[$i] . "];";
				}else{
					echo "data = [" . ($j+1) . ", 0];";
				}
				echo "dataLine.push(data);";
			}
		}
	?>
	var dataSet = anychart.data.set(dataLine);
	
	var firstSeriesData = dataSet.mapAs({x: 0, value: 1});
	
	var chart = anychart.line();
	
	var firstSeries = chart.line(firstSeriesData);
	<?php
		$curMonth = explode("-", $newDate[0]);
		switch((int)$curMonth[1]){
			case 1:
				echo "firstSeries.name('January');";
				break;
			case 2:
				echo "firstSeries.name('February');";
				break;
			case 3:
				echo "firstSeries.name('March');";
				break;
			case 4:
				echo "firstSeries.name('April');";
				break;
			case 5:
				echo "firstSeries.name('May');";
				break;
			case 6:
				echo "firstSeries.name('June');";
				break;
			case 7:
				echo "firstSeries.name('July');";
				break;
			case 8:
				echo "firstSeries.name('August');";
				break;
			case 9:
				echo "firstSeries.name('September');";
				break;
			case 10:
				echo "firstSeries.name('October');";
				break;
			case 11:
				echo "firstSeries.name('November');";
				break;
			case 12:
				echo "firstSeries.name('December');";
				break;
		}
	?>
	
	chart.yAxis().title("Insights");
	chart.xAxis().title("Day");
	
	firstSeries.normal().stroke("#7b60a2", 2.5);
	
	chart.yScale().minimum(-1000);
	chart.yScale().maximum(1000);
	
	firstSeries.hovered().markers().type("circle").size(4);
	
	chart.legend().enabled(true);
	
	chart.title("Line Chart Insights");
	
	chart.container("mainInsights");
	
	chart.draw();
</script>