<?php
//if(isset($_POST['sbtbtn']))
//{
    echo $name=$_POST['name'];
    echo $emailid=$_POST['emailid'];
    echo $pass=$_POST['pass'];
    echo $cpass=$_POST['cpass'];


$conn=new mysqli('localhost','root','','hospital');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into signup(name,emailid,pass,cpass,) values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$emailid,$pass,$cpass,);
    $stmt->execute();
    echo "signup successfully...";
    $stmt->close();
    $conn->close();
}

?>