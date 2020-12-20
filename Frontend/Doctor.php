<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Details</title>
    <link rel="stylesheet" href="Css/nav.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
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
            background-color:darkkhaki;
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
            background-color:aqua;
            font-size: 16px;
            font-weight: bold;
            width: 70px;
            height: 40px;
            color: black;
            box-sizing: border-box;
            border-radius: 8px;
        }
        
        body {
            background-image: url(Images/21.jpg);
            background-repeat: no-repeat;
            background-size: cover;
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
                <li><a href="Home.html">Home</a></li>
                <li><a href="Patient.html">Patients</a></li>
                <li class="active"><a href="#">Doctors</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact Us</a></li>
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
$query = "select * from doctor";
$result = mysqli_query($conn,$query);
echo '<h1 id="details"><u>Doctor Details</u></h1>';
while($row = mysqli_fetch_array($result)){
    echo "<div class='list'>";
    echo "<label>";
    echo "".$row["name"]."<br> ";
    echo "".$row["age"]."<br> ";
    echo "".$row["phoneno"]." <br>";
    echo "".$row["gender"]." <br>";
    echo "".$row["address"]."<br> ";
    echo "".$row["special"]."<br><br>";
    echo "<input type='button' value='Delete' id='submit'>"; 
    echo "</label>";
    echo "</div>";

}
?>
    <!-- <div>
        
    </div> -->
</body>

</html>