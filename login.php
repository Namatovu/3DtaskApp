<?php
$conn=mysqli_connect("localhost","root","","3d");
$u=htmlentities($_POST["Uname"],ENT_QUOTES);
$p=htmlentities($_POST["Password"],ENT_QUOTES);


$sqll="Select * from users where userName='$u' and password='$p'";
$result=mysqli_query($conn,$sqll);

 
 if(mysqli_num_rows($result)==1){
    echo "You have logged insuccessfully";
 }
 else {
    
 }


echo "failed to login successfully";
?>
