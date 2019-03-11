<?php
$conn=mysqli_connect("localhost","root","","3d");

    $fname=$_POST["fName"];
    $lname=$_POST["lName"];
    $uname=$_POST["Uname"];
    $email=$_POST["mail"];
    $pass=$_POST["Password"];

    $sql="INSERT INTO users(firstName,lastName,userName,email,password) VALUES('$fname',
    ' $lname','$uname','$email','$pass')";
    $res=mysqli_query($conn,$sql);
    if($res==1){
        echo "you have successfully registered";
        header("location: index.html", FALSE);
    } else{
        echo "registration failed";
    }





?>