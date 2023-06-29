anychart.onDocumentReady(function () {
	var text = document.cookie;
	var array = text.split(";");
	
	var count = <?php
					include("function/connect.php");
					$idUser = $_COOKIE['idUser'];
					$sql = "SELECT * FROM transaction WHERE idUser = $idUser AND type_transaction = 'expense'";
					$result = mysqli_query($con, $sql);
					$i = 0;
					while($row = mysqli_fetch_array($result)){
						$i++;
					}
					echo $i;
				?>;
	alert(count);
	
	//var chart1 = anychart.pie();
	
	//chart1.data(data1);
	//chart1.title("Total cost");
	//chart1.container("pieChart");
	//chart1.draw();
	
	var data = [
		[1, 200, 300000],
		[2, 200, 300000],
		[3, 200, 400000],
		[4, 200, 300000],
		[5, 200, 600000],
		[6, 200, 300000],
		[7, 200, 700000],
		[8, 200, 300000],
		[9, 200, 600000],
		[10, 200, 300000],
		[11, 200, 500000],
		[12, 200, 1300000],
		[13, 200, 300000],
		[14, 200, 800000],
		[15, 200, 300000],
		[16, 200, 600000],
		[17, 200, 300000],
		[18, 200, -300000],
		[19, 200, 300000],
		[20, 200, 500000],
		[21, 200, 300000],
		[22, 200, 600000],
		[23, 200, 300000],
		[24, 200, 600000],
		[25, 200, 300000],
		[26, 200, 700000],
		[27, 200, 300000],
		[28, 200, 800000],
		[29, 200, 300000],
		[30, 200, 1000000]
	];
	
	var dataSet = anychart.data.set(data);
	
	var firstSeriesData = dataSet.mapAs({x: 0, value: 1});
	var secondSeriesData = dataSet.mapAs({x: 0, value: 2});
	
	var chart = anychart.line();
	
	var firstSeries = chart.line(firstSeriesData);
	firstSeries.name("Januari");
	var secondSeries = chart.line(secondSeriesData);
	secondSeries.name("Februari");
	
	chart.yAxis().title("Insights");
	chart.xAxis().title("Day");
	
	firstSeries.normal().stroke("#7b60a2", 2.5);
	secondSeries.normal().stroke("#db7346", 2.5);
	
	chart.yScale().minimum(-1000000);
	chart.yScale().maximum(1000000);
	
	firstSeries.hovered().markers().type("circle").size(4);
	
	chart.legend().enabled(true);
	
	chart.title("Line Chart Insights");
	
	chart.container("mainInsights");
	
	chart.draw();
});