<?php
$host="localhost"; // biasanya localhost
$username="root";
$password="";
$db="login"; 
 
 
mysqli_connect("$host", "$username", "$password")or die("Failed to connect! Check database");
mysqli_select_db("$db")or die("Contact your administrator fot this!");
 
// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$username=$_POST['username'];
$password=$_POST['password'];
 
// untuk keamanan
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);
 
$sql="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($sql);
$count=mysqli_num_rows($result);
 
if($count==1){
echo "<script>window.location = 'index.php';</script>";
}
else {
echo "Username atau Password yang anda masukkan salah!";
}
?>