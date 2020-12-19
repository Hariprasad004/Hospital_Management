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
