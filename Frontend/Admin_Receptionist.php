<?php
$db_name = "hospital";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost:3307";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
$query = "select * from signup";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result)){
    echo "".$row["name"]." <br>";
    echo "".$row["emailid"]."<br>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionists</title>
    <link rel="stylesheet" href="Css/nav.css">
    <style type="text/css">
        p {
            padding: 150px 75px;
            font: outline;
            font-size: 25px;
            font-weight: bold;
        }
        
        #details {
            text-align: center;
            text-shadow: 0 1px 0 black;
            font-style: italic;
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
    <div>
        <h1 id="details"><u>Receptionists Details</u></h1>
    </div>
</body>

</html>