<?php
	if(isset($_POST['login'])){
	echo $emailid =$_POST['emailid'];
	echo $pass=$_POST['pass'];

	$con = mysqli_connect("localhost","root","","hospital");
	if($con->connect_error) {
		die("Failed to connect : ".$con->connect_error);
	}
	else{
		$stmt =$con->prepare("select * from signup where emailid= ?");
		$stmt->bind_param("s",$emailid);
		$stmt->execute();
		$stmt_result =$stmt->get_result();
	}
		if($stmt_result->num_rows > 0){
			$data =$stmt_result->fetch_assoc();
			if($data['pass']===$pass){
				$error= "<h2>Login Successful</h2>";
				header("location:/Hospital_management/home.html");
			} else{
				$error="<h2>Invalid email or password</h2>";
			}

		} else 
			$error="<h2>Invalid username or password</h2>";
}
$query="SELECT * from signup where emailid='$emailid' and pass='$pass'";
$obj=mysqli_num_rows(mysqli_query($con,$query));
if($obj>0)
{
	//DASHBOARDPAGE
	header('Location:home.html');
}
else
{
	echo "<h2>Invalid username or password <br> <a href='login.html'>CLICK HERE TO GO BACK</a></h2>";
}
}
?>