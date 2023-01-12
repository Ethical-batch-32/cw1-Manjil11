<?php
// include('config.php');
//   $fullname = $_POST['fullname'];
//   $email = $_POST['email'];
//   $userid = $_POST['userid'];
//   $password = ($_POST['password']);

// // $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
// $hash= password_hash($password,PASSWORD_DEFAULT);
// $connect =mysqli_connect('localhost','root','','furnituredata');
// if ($connect->connect_error){
//   die('connection failed :'.$connect->connect_error);
// }else{
//  $stmt =$connect->prepare("insert into register(fullname,email,userid,password) values(?,?,?,?)");
//  $stmt->bind_param("ssis",$fullname,$email,$userid,$hash);
//    header("location:login.php");
// }
// $stmt->execute();
// $stmt->close();
// $conn->close();
?> 



<?php
include('config.php');
if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $userid = $_POST['userid'];
$password = ($_POST['password']);
if(mysqli_num_rows(mysqli_query($connect,"select * from register where userid='$userid'"))>0){
    // echo 'username already exist';
}else{
  $password= password_hash($_POST['password'],PASSWORD_DEFAULT);

    mysqli_query($connect, "insert into register(fullname,email,userid,password) values('$fullname','$email','$userid','$password') ");
    // echo "Registration Successfully!"; 
    header('location:login.php');
}
}
?>


