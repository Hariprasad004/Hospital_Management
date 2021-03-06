<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="Js/alert.js"></script>
    <link rel="stylesheet" href="Css/styles.css">
    <style type="text/css">
        #signup:hover {
            cursor: pointer;
        }
        #login{
            margin-left: 139px;
            margin-top: 0;
        }

        #signup {
            margin-left: 125px;
            margin-top: 0;
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
            background-image: url("Images/5.jpg");
            height: 150px;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .card-img-top {
            background-image: url(Images/1.jpg);
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
        
        #txt,
        #password,
        #cpassword {
            width: 250px;
            height: 25px;
        }
        
        #layout {
            padding-top: 0;
            margin-top: 0;
            border-top: 0;
            background-color: rgb(235, 232, 88);
        }
    </style>
</head>

<body>
    <div class="container" style="width: 400px;margin-top: 50px">
        <div class="card">
            <div class="card-img-top">
                <h2><b>Sign Up</b></h2>
            </div>
            <div class="card-body" id="layout">
                <form action="/Hospital_Management/Frontend/signup.php" method="POST" class="form.group">
                    <p><b>Name:</b><br>
                        <input type="name" name="name" value="" class="form.control" id="txt" placeholder="Enter Full Name" required> <br></p>
                    <p><b>Email id:</b><br>
                        <input type="email" name="emailid" class="form.control" id="txt" placeholder="Enter Email" required> <br></p>
                    <p><b>Password:</b><br>
                        <input type="password" minlength="8" name="pass" class="form.control" id="password" placeholder="Enter password" required><br></p>
                    <p><b>Confirm Password:</b><br>
                        <input type="password" minlength="8" name="cpass" class="form.control" id="cpassword" placeholder="Enter Confirm Password" required> <br></p>
                    <button type="submit" class="btn btn-primary top" name="signup" id="signup">Signup</button><br>
                    <a href="login.php" id="login"><b><u>Login</u></b></a>
                </form>
            </div>
        </div>
    </div>
    <script type=" text/javascript ">
        document.getElementById("signup").onclick = function() {
            var password = document.querySelector('#password').value;
            var confirm = document.querySelector('#cpassword').value;
            if (password.length >= 8 && confirm.length >= 8) {
                if (password == confirm) {
                    <!-- showAlert("Signup successful","success"); -->
                    return true;
                } else {
                    showAlert("Password doesn't match", "error");
                    return false;
                }
            }
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php
if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $emailid=$_POST['emailid'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];


$conn= new mysqli("localhost:3307","root","","hospital");
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt =$conn->prepare("select * from signup where emailid= ?");
    $stmt->bind_param("s",$emailid);
	$stmt->execute();
    $stmt_result =$stmt->get_result();
    if($stmt_result->num_rows > 0){
        echo '<script type="text/javascript">showAlert("User already exists","error");
        </script>';
    }
    else{
        $stmt = $conn->prepare("insert into signup(name,emailid,pass,cpass) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name,$emailid,$pass,$cpass);
        $stmt->execute();
        // header("location:/Hospital_management/Frontend/login.html");
        echo '<script type="text/javascript">showAlert("Signup successful, Please login","success");
        </script>';
        // header("location:/Hospital_management/Frontend/login.php");
        $stmt->close();
        $conn->close();
    }
}
}
?>
</body>

</html>


