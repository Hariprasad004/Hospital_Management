<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect');
}
$sql = 'SELECT * from patients';

// mysql_select_db('hms');
$retval = mysqli_query($conn,$sql );
if(! $retval )
{
  die('Could not get data');
}
while($row = mysqli_fetch_assoc($retval))
{
    echo "ID          :{$row['id']}  <br> ".
         "NAME 		  : {$row['name']} <br> ".
         "EMAIL		  : {$row['email']} <br> ".
         "<button type='submit' name='delete' id='submit'>Delete</button>".
         "--------------------------------<br>";
} 

mysqli_close($conn);
?>
