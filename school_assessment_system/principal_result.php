<?php
//1.if teacher has prodvided, 2.db connection, 3.Retrieve data(SELECT WHERE uid=[SESSION["uid"]])
session_start();
if(!isset($_SESSION["username"]) ||(strcmp($_SESSION["type"],"principal")!=0) ) //apagoreuei auton pou den exei kanei login i exei kanei me alli idiotita
	{
		header("Location:home.php");
	}
	else
	{
		$conn= new mysqli("localhost","root","","mng_sys_db");//mysqli Object-Oriented
		$query1="SELECT * FROM school_comp";
		if($temp=$conn->query($query1))
		{
			if($temp->num_rows>0)
			{	
				$array2=array();
				$array2=$temp->fetch_array(MYSQLI_NUM);
				$aa=$ab=$ac=$ba=$bb=$ca=$cb=$da=$ea=$fa=$fb=0;
				for ($i=1; $i<=2; $i++)//lm1 vriskei to athroisma tis kathe katigorias
				{
					$aa+= $array2[$i];
				}
				for ($i=3; $i<=8; $i++)//tl4
				{
					$ab+= $array2[$i];
				}
				for ($i=9; $i<=12; $i++)//tl5
				{
					$ac+= $array2[$i];
				}
				for ($i=13; $i<=19; $i++)//tl6
				{
					$ba+= $array2[$i];
				}
				for ($i=20; $i<=23; $i++)//kd2
				{
					$bb+= $array2[$i];
				}
				for ($i=24; $i<=28; $i++)//kd3
				{
					$ca+= $array2[$i];
				}
				for ($i=29; $i<=37; $i++)//kd4
				{
					$cb+= $array2[$i];
				}
				for ($i=38; $i<=40; $i++)//kd4
				{
					$da+= $array2[$i];
				}
				for ($i=41; $i<=44; $i++)//kd4
				{
					$ea+= $array2[$i];
				}
				for ($i=45; $i<=50; $i++)//kd4
				{
					$fa+= $array2[$i];
				}
				for ($i=51; $i<=54; $i++)//kd4
				{
					$fb+= $array2[$i];
				}
			}
			else
			{
				echo "No profile has been submitted<br>";
				?>
				<a href="principal_new.php">Submit your Profile</a><!--me auto to tropo mporoume na eisagoyme html mesa sti php-->
				<?php
			}
		}
	} ?>
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
	['Category', 'TL', 'KD', 'KC'],
  	['Leadership and Management', <?php echo $aa;?>, <?php echo $ab;?>, <?php echo $ac;?>, ],
	[' Use of ICT in the curriculum', <?php echo $ba;?>, <?php echo $bb;?>, , ],
	['Teaching and Learning ', <?php echo $ca;?> , <?php echo $cb;?>, ,],
	['Assessment of digital capability', <?php echo $da;?>, , , ],
	['Professional Development', <?php echo $ea;?>, , , ],
	['Resources', <?php echo $fa;?>, <?php echo $fb;?>, , ]
	]);
	
	
	var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
	
	chart.draw(data, {width: 600, height: 400, min: 0, max: 19, valueLabelsInterval: 3, isStacked: true, backroundColor: 'transparent'}); 
	
	}
</script>
	</head>
	<body>
		<div id="chart_div"> CHART </div> 
		<form class="form" id="form1" name="form1" method="post" action="teachers.php">
		 <button type="submit" id="button" >Back to Evaluation</button>
		</form>
	</body>
	
</html>
<?php
	//header("Location:teachers.php");
?>