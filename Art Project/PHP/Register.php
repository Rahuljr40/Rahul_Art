

<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="artgallery";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $uname = $_POST['uname'];
	
	 $password = $_POST['Password'];
	 $Cpassword = $_POST['Cpassword'];
	

	 $sql_query = "INSERT INTO signup (uname,password,cpassword)
	 VALUES (' $uname',' $password ','$cpassword')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Signup successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>