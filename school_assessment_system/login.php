<?php
ob_start();
session_start();

unset ($msg);
$username = $_POST['username'];
$password = $_POST ['pass'];
//travaei pass kai username
//$type = $_POST ['type'];
$mysqli = new mysqli("localhost","root","","mng_sys_db");
//syndeomaste  me  thn vash 

if (mysqli_connect_errno())
{
  printf("Connect failed: %s\n",mysqli_connect_error());
  exit();
  }//error message 
  $query = "SELECT * FROM users where username='$username' and pass='$password'";
  //query gia na  tsekaroume  sthn vash mas  ta stoixeia  pou eisagontai sthn forma
  $temp = $mysqli->query ($query);
  //auto eei oti sto temp apothikeuse  to query pou trexoume  xrhsimopoiwntas  thn sundesh mysqli
  if  ($temp->num_rows==0)
 
 {
    header('Location: home.php');
	//redirect kanei to header	
  }
  else
  {
   $record = $temp->fetch_array(MYSQL_NUM);
   //to apotelesma  tou query  mou to epistrefei  se morfh pinaka  sthn metavlhth id
    session_regenerate_id();//kanei refresh to existence  tou xrhsth sto systhma 
	$_SESSION['uid'] = $record[0];
	$_SESSION['name'] = $record[1];
	$_SESSION['surname'] = $record[2];
	$_SESSION['username'] = $record[3];
	$_SESSION['pass'] = $record[4];
	//einai  apothikeumenes  metavlhtes  gia oso  diarkei to session
   if ($record[5] == 1)
   {
      $_SESSION['type'] = 'teacher';
      header('Location: teachers.php');
	}
	elseif ($record[5] == 2)
	{
	  $_SESSION['type'] = 'principal';
	  header('Location: principal.php');
	}
	else 
	{
	 $_SESSION['type'] = 'admin';
	 header('Location: admin.php');
    }
	}

	$mysqli->close();
  
  //$username = mysql_real_escape_string($username);
  
?>