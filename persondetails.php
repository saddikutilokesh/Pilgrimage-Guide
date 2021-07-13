 <?php
$connect= new mysqli('localhost', 'root', '','pilgrims');
if(!$connect)
{
	echo "Not connected to server";
}
if(!mysqli_select_db($connect,'pilgrims'))
{
echo "Database not selected";
}
$name=$_POST['name'];
$age=$_POST['age'];
$state=$_POST['state'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$persons=$_POST['persons'];
$date=$_POST['date'];
$sql="INSERT INTO registration1(name,age,state,email,address,mobile,persons,date)
VALUES('$name','$age','$state','$email','$address','$mobile','$persons','$date')";
if(!mysqli_query($connect,$sql))
{
	echo "Not inserted";
}
else
{
	echo "Inserted";
}


?>