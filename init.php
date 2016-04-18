<?php
 $server_name = "localhost";
 $user = "WanSu";
 $pass = "InD!g0";
 $dbname = "userdb";

 $con = mysqli_connect($server_name,$user,$pass,$dbname);

if(!$con)
{
	die("Error in database connection". mysqli_connect_error());
}
else
{
	echo "<h3>Database connection Success Wandy...";
}

?>


