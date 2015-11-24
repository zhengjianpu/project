<?php
session_start();
include_once('Database.php');
#include_once('Identification.php');
if(isset($_SESSION['userName'])){
	//echo $_SESSION['userName'];
				header ('location: homepage.php');
				//header("Refresh: 0; url=homepage.php");	
			}
			else{
				header ('location: login.html');
				//header("Refresh: 0; url=admin.php");
			}

?>