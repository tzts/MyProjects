<?php
	if(!isset($_SESSION))
	{ session_start(); }
	
	if(!isset($_SESSION["username"]) ||(strcmp($_SESSION["type"],"teacher")!=0)) //apagoreuei auton pou den exei kanei login i exei kanei me alli idiotita
	{
		header("Location:login.php");
	}
	else 
	{
		//$_SESSION["uid"]
		$pinakas=array();
		$pinakas[0]=$_SESSION["uid"];
		for ($i=1; $i<=61; $i++) //kalo einai na arxikopoieitai o pinakas, ws mhdenikos
			{
				$pinakas[$i]=0; 
			}
		foreach ($_POST as $key=>$data)
		{
			if(strcmp($data, "Submit")==0) //gia na min diavazei to submit to foreach
			{
			}
			else
			{
				$pinakas[intval($key)]=1;//me to intval pairnei tis int times toy key
			}
		}
	
		$mysqli=new mysqli("localhost","root","","mng_sys_db");
		//etoimazoume to erotima
		$query1= "SELECT * from teacher_comp where uid=" . $_SESSION["uid"];
		$temp=$mysqli->query($query1);
		
		if($temp->num_rows>0)
		{ 	$query1="DELETE from teacher_comp where uid=" .  $_SESSION["uid"];
			$result=$mysqli->query($query1);
		}
			
		$query2="INSERT INTO teacher_comp VALUES('$pinakas[0]','$pinakas[1]','$pinakas[2]','$pinakas[3]','$pinakas[4]','$pinakas[5]','$pinakas[6]','$pinakas[7]','$pinakas[8]','$pinakas[9]','$pinakas[10]',
			'$pinakas[11]','$pinakas[12]','$pinakas[13]','$pinakas[14]','$pinakas[15]','$pinakas[16]','$pinakas[17]','$pinakas[18]','$pinakas[19]','$pinakas[20]','$pinakas[21]','$pinakas[22]','$pinakas[23]','$pinakas[24]','$pinakas[25]',
			'$pinakas[26]','$pinakas[27]','$pinakas[28]','$pinakas[29]','$pinakas[30]','$pinakas[31]','$pinakas[32]','$pinakas[33]','$pinakas[34]','$pinakas[35]','$pinakas[36]'
			,'$pinakas[37]','$pinakas[38]','$pinakas[39]','$pinakas[40]','$pinakas[41]','$pinakas[42]','$pinakas[43]','$pinakas[44]','$pinakas[45]','$pinakas[46]',
			'$pinakas[47]','$pinakas[48]','$pinakas[49]','$pinakas[50]','$pinakas[51]','$pinakas[52]','$pinakas[53]','$pinakas[54]','$pinakas[55]','$pinakas[56]','$pinakas[57]'
			,'$pinakas[58]','$pinakas[59]','$pinakas[60]','$pinakas[61]')";
		$mysqli->query($query2);
		header("Location:teachers.php");
	}
?>