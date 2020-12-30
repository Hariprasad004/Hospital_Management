<?php
if(isset($_POST['add']))
{
    
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phoneno=$_POST['phoneno'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $description=$_POST['description'];


$conn= new mysqli("localhost:3307","root","","hospital");
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into patient(name,age,phoneno,gender,address,description) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siisss",$name,$age,$phoneno,$gender,$address,$description);
    $stmt->execute();
    header("location:/Hospital_management/Frontend/Admin_patient.html");
    $stmt->close();
    $conn->close();
}
}
?>