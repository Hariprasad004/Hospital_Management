<?php
if(isset($_POST['send']))
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=(string)$_POST['phoneno'];
    $msg=$_POST['msg'];
    


$conn= new mysqli("localhost:3307","root","","hospital");
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact(name,email,phoneno,msg) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name,$email,$phoneno,$msg);
    $stmt->execute();
    header("location:/Hospital_management/Frontend/contact.html");
    // echo "reached";
    $stmt->close();
    $conn->close();
}
}
?>