<?php  
 require "init.php";  
 $name = $_POST["name"];  
 $email = $_POST["email"];  
 $pass = $_POST["pass"];
  
 $query = "select * from userinfo where email like '".$email."';";
 $result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
	$response = array();
	$code = "req_false";
	$message = "User Already Exist ..";
	array_push($response, array("code"=>$code,"message"=>$message));
	echo json_encode(array("server_response"=>$response));
}
else
{
$query = "insert into userinfo values('".$name."','".$email."','".$pass."');";
$result = mysqli_query($con,$query);
	if(!$result)
	{
	$response = array();
	$code = "reg_false";
	$message = "Some server error occured. Try again ..";
	array_push($response, array("code"=>$code,"message"=>$message));
	echo json_encode(array("server_response"=>$response));
	}
	else
	{
	$response = array();
        $code = "reg_true";
        $message = "Your Registration Success, Thank You ..";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
	}
}
mysqli_close($con);
