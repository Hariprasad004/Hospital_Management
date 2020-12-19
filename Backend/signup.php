<?php
if(isset($_POST['signup']))
{
    echo $name=$_POST['name'];
    echo $emailid=$_POST['emailid'];
    echo $pass=$_POST['pass'];
    echo $cpass=$_POST['cpass'];


$conn= new mysqli("localhost:3307","root","","hospital");
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into signup(name,emailid,pass,cpass) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name,$emailid,$pass,$cpass);
    $stmt->execute();
    // header("location:/Hospital_management/Frontend/signup.html");
    echo '<script type="text/javascript">showAlert("Signup successful","success");
    return false; 
    </script>';
    // header("location:/Hospital_management/Frontend/login.html");
    $stmt->close();
    $conn->close();
}
}
?>