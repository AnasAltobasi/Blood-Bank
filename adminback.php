<?php
$host="localhost";
$user="db_blood";
$pass="blood@bank";
$dbName="blood bank";
$conn=mysqli_connect($host,$user,$pass,$dbName);
$error = null;
$check = true;
$Error_flag_ERROR=false;
$Error_array=array(
// register errors
    'ERROR'>='');
if(isset($_POST['Sub'])){
    $NU=isset($_POST["UserName"]) ? $_POST["UserName"] : "";
    $Password=isset($_POST["PassAdmin"]) ? $_POST["PassAdmin"] : "";
if(empty($NU) || empty($Password)){
    $error=$expr["Please Enter Email And Password"];
    $check = false;
}
else{
$query=" SELECT * FROM admin WHERE Username='$NU'";
$result=mysqli_query($conn,$query);
if($row=mysqli_fetch_assoc($result)){
    $db_password = $row['Password'];
    $_SESSION['Name']=$row['Username'];
    $_SESSION['ID']=$row['ID'];
if($Password == $db_password){
        header('Location: Afterlogin2.php');
}
else{
    $Error_array['ERROR']=$expr["Incorrect Password"];
    $Error_flag_ERROR=true;
}
}
    else{
        $Error_array['ERROR']=$expr["Please Ckeck Your Email And PassWord"];
        $Error_flag_ERROR=true;
    } 
  }
}
?>
