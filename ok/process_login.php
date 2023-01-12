<!-- 
  <?php
// include('config.php');
// $userid= $_POST['userid'];
// $password= $_POST['password'];
// // $hash= password_hash($password,PASSWORD_DEFAULT);


// if (!empty($userid) && !empty($password)){
//     echo $hash;
    
//     $query="select * from register where userid = '$userid' and password='$password'";
//     $result = mysqli_query($connect, $query);
//     $count = mysqli_num_rows($result);
//     if($count>0){
//         header('location:index.php');
//     }
//     else {
        
//         header('location:login.php');
//     }
// }
 ?>  -->


<?php
include('config.php');
if (isset($_POST['submit'])) {
    $userid = $_POST['userid'];
    $password = ($_POST['password']);


    $res = mysqli_query($connect,"select * from register where userid='$userid'");

    if (mysqli_num_rows($res)>0) {
        $row = mysqli_fetch_assoc($res);
        $verify = password_verify($password, $row['password']);
        if ($verify == 1) {
            // echo "done";
            $_SESSION['is_login'] = true;
            header('location:index.php');
            die();

        } else {
            echo "invalid input";
            header('location:login.php');
        }
    } else {
        echo "please enter correct userid";
        header('location:login.php');
    }
}
?>

