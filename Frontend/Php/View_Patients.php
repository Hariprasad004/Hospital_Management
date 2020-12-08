<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect');
}
$sql = 'SELECT * from patient';

// mysqli_select_db('hms');
$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not get data');
}
while($row = mysqli_fetch_assoc($retval))
{
    echo "ID          :{$row['patientid']}  <br> ".
         "NAME 		  : {$row['name']} <br> ".
         "AGE		  : {$row['age']} <br> ".
         "PHONE NUM	  : {$row['phoneno']} <br> ".
         "GENDER	  : {$row['gender']} <br> ".
         "ADDRESS	  : {$row['address']} <br> ".
         "DESCRIPTION : {$row['description']} <br> ".
         '<button type="submit" name="delete">Delete</button>'.
         "--------------------------------<br>";
} 

mysqli_close($conn);
?>
