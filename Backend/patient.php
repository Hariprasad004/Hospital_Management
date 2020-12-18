<?php
if(isset($_POST['add']))
{
    
    echo $name=$_POST['name'];
    echo $age=$_POST['age'];
    echo $phoneno=$_POST['phoneno'];
    echo $gender=$_POST['gender'];
    echo $address=$_POST['address'];
    echo $description=$_POST['description'];


$conn= new mysqli("localhost:3307","root","","hospital");
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into patient(name,age,phoneno,gender,address,description) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siisss",$name,$age,$phoneno,$gender,$address,$description);
    $stmt->execute();
    echo "value passed";
    header("location:/Hospital_management/Frontend/patient.html");
    $stmt->close();
    $conn->close();
}
}
?>