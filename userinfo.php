<?php
$con = mysqli_connect ('localhost','root');
if($con){
    echo"Connection successful";
}else {
    echo"No Connection";
}
mysqli_select_db($con, 'youtubewebsite');
$user =$_POST['user'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$comment =$_POST['comment'];
$query = $insertQuery = "INSERT INTO userinfo (`User name`, `Email`, `Phone`, `Comment`) VALUES ('$user', '$email', '$phone', '$comment')";

echo "$query";
mysqli_query ($con, $query);
header('location:index.php');
?>