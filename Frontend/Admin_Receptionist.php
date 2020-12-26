<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionists</title>
    <link rel="stylesheet" href="Css/nav.css">
    <style type="text/css">
        label {
            font-size: 20px;
            font-weight: bold;
        }
        .list{
            padding:20px;
            border: 5px solid black;
            border-radius: 10px;
            margin-top:10px;
            text-align: center;
            background-color:tan;
        }
        #details {
            text-align: center;
            text-shadow: 0 1px 0 black;
            font-style: italic;
        }

        #submit:hover {
            cursor: pointer;
        }
        
        #submit {
            /* margin-left: 20px; */
            background-color:orange;
            font-size: 16px;
            font-weight: bold;
            width: 70px;
            height: 40px;
            color: white;
            box-sizing: border-box;
            border-radius: 8px;
        }
        
        body {
            background-image: url(Images/25.jpg);
        }
    </style>
</head>

<body>
    <div class="navbar">
        <nav>
            <div class="logo">
                <h3 style="color: Yellow;">HOSPITAL MANAGEMENT</h3>
            </div>
            <ul class="menu-area">
                <li><a href="Admin_Home.html">Home</a></li>
                <li><a href="Admin_Patient.html">Patients</a></li>
                <li><a href="Admin_Doctor.html">Doctors</a></li>
                <li class="active"><a href="#">Receptionists</a></li>
                <li><a href="Admin_About.html">About</a></li>
                <li><a href="Admin_Contact.html">Contact Us</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </nav>
    </div>

<?php
$db_name = "hospital";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost:3307";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
$query = "select * from signup";
$result = mysqli_query($conn,$query);
if(isset($_REQUEST['submit'])){
    $sql = "DELETE FROM signup WHERE rid= {$_REQUEST['rid']}";
    if(mysqli_query($conn,$sql)){
        echo "<script> location.reload(true)</script>";
        header("refresh:0");
    }
    else{
        echo "Error unable to delete record";
    }
}
echo '<h1 id="details"><u>Receptionists Details</u></h1><br>';
while($row = mysqli_fetch_array($result)){
    if($row["name"]!='admin'){
    echo "<div class='list'>";
    echo "<label>";
    echo "".$row["name"]." <br>";
    echo "".$row["emailid"]."<br><br>";
    echo '<form action="" method="POST"><input type="hidden" name="emailid" value='.$row['emailid'].'>
    <input type="submit" value="Delete" id="submit" name="submit"></form>'; 
    echo "</label>";
    echo "</div>";
    }
}


?>
</body>

</html>