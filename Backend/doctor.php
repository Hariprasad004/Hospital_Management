<?php
//if(isset($_POST['sbtbtn']))
//{
    
    echo $name=$_POST['name'];
    echo $age=$_POST['age'];
    echo $phoneno=$_POST['phoneno'];
    echo $gender=$_POST['gender'];
    echo $address=$_POST['address'];
    echo $special=$_POST['special'];


$conn= new mysqli("localhost:3307","root","","hospital");
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into doctor(name,age,phoneno,gender,address,special) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siisss",$name,$age,$phoneno,$gender,$address,$special);
    $stmt->execute();
    echo "value passed";
    header("location:/Hospital_management/Frontend/admin_doctor.html");
    $stmt->close();
    $conn->close();
}

?>