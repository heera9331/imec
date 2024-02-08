<?php
session_start();
if(!isset($_SESSION['userid']))
{
	if(!isset($_SESSION['usetype']))
	{
		echo "<script type='text/javascript'>";
			echo "document.location.href='login.php'";
		echo "</script>";
	}
}

?>