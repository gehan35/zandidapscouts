
<?php 
//create connection
$conn = mysqli_connect('localhost','id19677888_scouts','1gc<X4!/S@A+l+r1','id19677888_sms');

//check connection

if (!$conn) {
    echo "connection failed: " . mysqli_connect_error()."<br>";
    echo "connection error no: " . mysqli_connect_errno();

} else {
   // echo "connected successfuly";
}



 ?>