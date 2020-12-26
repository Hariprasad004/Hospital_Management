
<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="Js/alert.js"></script>
    <link rel="stylesheet" href="Css/styles.css">
    <style type="text/css">
        #submit:hover {
            cursor: pointer;
        }
        
        #submit {
            margin-left: 125px;
        }
        
        body {
            background-image: url(Images/6.jpg);
            height: 150px;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        p {
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            padding-left: 35px;
        }
        
        .container {
            padding-top: 200px;
        }
        
        .card-body {
            background-color: aquamarine;
        }
    </style>
</head>

<body>
    <div class="container" style="width: 400px;margin-top: 50px">
        <div class="card">
            <div class="card-body">
                <form class="form.group" action="forgot.php" method="post">
                    <p><b>Email id:</b><br>
                        <input type="email" name="emailid" value="" class="form.control" id="email" placeholder="Enter Email" required> <br></p>
                        <p><b>Password:</b><br>
                        <input type="password" name="pass" value="" class="form.control" id="pass" placeholder="Enter password" required> <br></p>
                        <p><b>Confrim password</b><br>
                        <input type="password" name="cpass" value="" class="form.control" id="cpass" placeholder="Enter confrim passwod" required> <br></p>
                    <button type="submit" class="btn btn-primary top" name="login_submit" id="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script type=" text/javascript ">
        document.getElementById("submit").onclick = function() {
            var email = document.querySelector('#txt').value;
            if (email == "") {
                showAlert("Enter the valid email", "error");
                return false;
            } else {
                showAlert("Email has been sent", "success");
                return true;
            }
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>
<?php
$db_name = "hospital";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost:3307";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);
//$db = mysqli_select_db($conn,$db_name);
if(isset($_POST['login_submit'])){
    $emailid = $_POST['emailid'];
    $query = "UPDATE signup SET pass='$_POST[pass]',cpass='$_POST[cpass]' where emailid='$_POST[emailid]' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}


?>

