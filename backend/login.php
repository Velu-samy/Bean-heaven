<?php
$con = mysqli_connect("localhost","root","","test");

$n=$_POST['ppo'];
$p=$_POST['poped'];



$sql="SELECT * FROM logind WHERE uname='$n' AND  upassword = '$p'";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_row($result);

if($row>0){
    header("Location:../frontend/dashboard.php");
    


}
else
{
    echo "invalid password or username";
}







?>
