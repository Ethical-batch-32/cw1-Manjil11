

<?php

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email =$_POST['email'];
$comment= $_POST['comment'];
$conn =new mysqli('localhost','root','','furnituredata');
if ($conn->connect_error){
  die('connection failed :'.$conn->connect_error);
}else{
 $stmt =$conn->prepare("insert into furniture(firstname,lastname,email,comment) values(?,?,?,?)");
 $stmt->bind_param("ssss",$firstname, $lastname, $email, $comment);
$stmt->execute();
  header("location:index.php");
$stmt->close();
$conn->close();
}
?>


























