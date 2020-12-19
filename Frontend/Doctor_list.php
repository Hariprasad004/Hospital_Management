<?php
$db_name = "hospital";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost:3307";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
$query = "select * from doctor";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result)){
    echo "".$row["name"]." ";
    echo "".$row["age"]." ";
    echo "".$row["phoneno"]." ";
    echo "".$row["gender"]." ";
    echo "".$row["address"]." ";
    echo "".$row["special"]."<br>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Details</title>
    <link rel="stylesheet" href="Css/nav.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
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
            background-image: url(Images/21.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div>
        <h1 id="details"><u>Doctor Details</u></h1>
    </div>
</body>

</html>