<?php
	if(isset($_POST['login_submit'])){
	 $emailid =$_POST['emailid'];
	 $pass=$_POST['pass'];

	$con = mysqli_connect("localhost:3307","root","","hospital");
	if($con->connect_error) {
		die("Failed to connect : ".$con->connect_error);
	}
	else{
// 		$stmt =$con->prepare("select * from signup where emailid= ?");
// 		$stmt->bind_param("s",$emailid);
// 		$stmt->execute();
// 		$stmt_result =$stmt->get_result();
// 	}
// 		if($stmt_result->num_rows > 0){
// 			$data =$stmt_result->fetch_assoc();
// 			if($data['pass']==$pass){
// 				echo "<h2>Login Successful</h2>";
// 				header("location:/Hospital_management/home.html");
// 			} else{
// 				echo "<h2>Invalid email or password</h2>";
// 			}

// 		} else 
// 			$error="<h2>Invalid username or password</h2>";
// }
$query="SELECT * from signup where emailid='$emailid' and pass='$pass'";
$obj=mysqli_num_rows(mysqli_query($con,$query));
echo "$obj";
// $result = mysqli_query($con,$query);
if($obj>0)
{
	
	if($emailid=="admin@gmail.com"){
		header('Location:/Hospital_management/Frontend/Admin_Home.html');
	}
	else{
		header('Location:/Hospital_management/Frontend/Home.html');
	}
}
else
{
	// header('Location:/Hospital_management/Frontend/login.html');
	echo "<script> 
	showAlert('Invalid email or password','error');
	</script>";
}
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="Js/alert.js"></script>
    <link rel="stylesheet" href="Css/styles.css">
    <style type="text/css">
        #login:hover {
            cursor: pointer;
        }
        
        #login {
            margin-left: 125px;
        }
        
        #signup {
            margin-left: 45px;
        }
        
        #forgot {
            margin-left: 130px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }
        
        .top {
            margin-top: 20px;
            align-items: center;
        }
        
        body {
            background-image: url(Images/3.jpg);
            height: 150px;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .card-img-top {
            background-image: url(Images/2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 250px;
            width: 30;
        }
        
        h2 {
            padding-top: 90px;
            text-align: center;
        }
        
        p {
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            padding-left: 35px;
        }
        
        #txt {
            width: 250px;
            height: 25px;
        }
    </style>
</head>

<body>
    <div class="container" style="width: 400px;margin-top: 50px">
        <div class="card">
            <div class="card-img-top">
                <h2><b>Login</b></h2>
            </div>
            <div class="card-body">
                <form class="form.group" action="/Hospital_management/Backend/login.php" method="post">
                    <p><b>Email id:</b><br>
                        <input type="email" name="emailid" value="" class="form.control" id="txt" placeholder="Enter Email" required> <br></p>
                    <p><b>Password:</b><br>
                        <input type="password" name="pass" class="form.control" id="txt" placeholder="Enter password" required><br>
                        <a href="forgot.php" id="forgot">Forgot password?</a> </p>
                    <button type="submit" class="btn btn-primary top" name="login_submit" id="login">Login</button><br>
                    <a href="signup.html" id="signup">Don't have an account? <u>Sign Up</u></a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>