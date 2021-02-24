<?php
	if(!isset($_SESSION))
	{ session_start(); }
	
	if(!isset($_SESSION["username"]) ||(strcmp($_SESSION["type"],"admin")!=0)) //apagoreuei auton pou den exei kanei login i exei kanei me alli idiotita
	{
		header("Location:login.php");
	}
	else 
	{
			$id=$_REQUEST[radio];
			$mysqli=new mysqli("localhost","root","","mng_sys_db");
			$query1="SELECT * FROM teacher_comp WHERE uid = ".$id;
			$temp1=$mysqli->query($query1);
			while($row2 = mysqli_fetch_assoc($temp1)) {
				$tl1a = $row2['tl1a'];
				$tl2a = $row2['tl2a'];
				$tl3a = $row2['tl3a'];
				$tl3b = $row2['tl3b'];
				$tl3c = $row2['tl3c'];
				$tl4a = $row2['tl4a'];
				$tl4b = $row2['tl4b'];
				$tl4c = $row2['tl4c'];
				$tl4d = $row2['tl4d'];
				$tl4e = $row2['tl4e'];
				$tl4f = $row2['tl4f'];
				$tl4g = $row2['tl4g'];
				$tl4h = $row2['tl4h'];
				$tl4i  = $row2['tl4i'];
				$tl4j  = $row2['tl4j'];
				$tl4k  = $row2['tl4k'];
				$tl5a  = $row2['tl5a'];
				$tl5b  = $row2['tl5b'];
				$tl5c  = $row2['tl5c'];
				$tl6a  = $row2['tl6a'];
				$tl6b  = $row2['tl6b'];
				$tl6c  = $row2['tl6c'];
				$kd1a  = $row2['kd1a'];
				$kd2a  = $row2['kd2a'];
				$kd2b  = $row2['kd2b'];
				$kd3a  = $row2['kd3a'];
				$kd3b  = $row2['kd3b'];
				$kd3c  = $row2['kd3c'];
				$kd3d  = $row2['kd3d'];
				$kd3e  = $row2['kd3e'];
				$kd3f  = $row2['kd3f'];
				$kd4a  = $row2['kd4a'];
				$kd4b  = $row2['kd4b'];
				$kd4c  = $row2['kd4c'];
				$kd4d  = $row2['kd4d'];
				$kd4e  = $row2['kd4e'];
				$kd4f  = $row2['kd4f'];
				$kd4g  = $row2['kd4g'];
				$kd5a  = $row2['kd5a'];
				$kd5b  = $row2['kd5b'];
				$kd6a  = $row2['kd6a'];
				$kd6b  = $row2['kd6b'];
				$kd6c  = $row2['kd6c'];
				$kc1a  = $row2['kc1a'];
				$kc2a  = $row2['kc2a'];
				$kc2b  = $row2['kc2b'];
				$kc2c  = $row2['kc2c'];
				$kc2d  = $row2['kc2d'];
				$kc2e  = $row2['kc2e'];
				$kc3a  = $row2['kc3a'];
				$kc3b  = $row2['kc3b'];
				$kc3c  = $row2['kc3c'];
				$kc3d  = $row2['kc3d'];
				$kc3e  = $row2['kc3e'];
				$kc4a  = $row2['kc4a'];
				$kc5a  = $row2['kc5a'];
				$kc5b  = $row2['kc5b'];
				$kc6a  = $row2['kc6a'];
				$kc6b  = $row2['kc6b'];
				$kc6c  = $row2['kc6c'];
				$kc6d  = $row2['kc6d'];			
			}
		$tl3 = $tl3a + $tl3b + $tl3c;
		$tl4 = $tl4a + $tl4b + $tl4c + $tl4d + $tl4e + $tl4f + $tl4g + $tl4h + $tl4i + $tl4j + $tl4k;
		$tl5 = $tl5a + $tl5b + $tl5c;
		$tl6 = $tl6a + $tl6b + $tl6c;
		$kd2 = $kd2a + $kd2b;
		$kd3 = $kd3a + $kd3b + $kd3c + $kd3d + $kd3e + $kd3f;
		$kd4 = $kd4a + $kd4b + $kd4c + $kd4d + $kd4e + $kd4f + $kd4g;
		$kd5 = $kd5a + $kd5b;
		$kd6 = $kd6a + $kd6b + $kd6c;
		$kc2 = $kc2a + $kc2b + $kc2c + $kc2d + $kc2e;
		$kc3 = $kc3a + $kc3b + $kc3c + $kc3d + $kc3e;
		$kc5 = $kc5a + $kc5b;
		$kc6 = $kc6a + $kc6b + $kc6c + $kc6d;
		
	}
?>
<html>
	<head>
	<!--Ta scripts-->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);
	function drawChart() 
	
	{
		var data = google.visualization.arrayToDataTable([
		['Category', 'Technology Literacy', 'Knowledge Deepening', 'Knowledge Creation'],
		['Understanding ICT in Education', <?php echo $tl1a;?>, <?php echo $kd1a;?>, <?php echo $kc1a;?> ],
		['Curriculum and Assesment', <?php echo $tl2a;?>, <?php echo $kd2;?>, <?php echo $kc2;?> ],
		['Pedagogy', <?php echo $tl3;?> , <?php echo $kd3;?> , <?php echo $kc3;?>],
		['ICT', <?php echo $tl4;?>, <?php echo $kd4;?>, <?php echo $kc4a;?>],
		['Organization and Administration', <?php echo $tl5;?>, <?php echo $kd5;?>, <?php echo $kc5;?>],
		['Teacher Professional Learning', <?php echo $tl6;?>, <?php echo $kd6;?>, <?php echo $kc6;?>]
		]);
		
		
		var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
		
		chart.draw(data, {title:'Results of Unesco ICT', width: 600, height: 400, min: 0, max: 19, valueLabelsInterval: 3, isStacked: true, backroundColor: 'transparent'}); 
		
		}
</script>
	</head>
	<body>
		<div style="display:block;width:100%;align:center;">
			<div id="chart_div">
				<form id="form2" name="form2" method="post" action="admin.php">
					<button type="submit" id="button" >Back</button>
				</form>
			</div>
		</div>
	</body>
	
</html>
<?php
	//header("Location:teachers.php");
?>