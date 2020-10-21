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
    $Email=isset($_POST["email"]) ? $_POST["email"] : "";
    $Password=isset($_POST["pass"]) ? $_POST["pass"] : "";
if(empty($Email) || empty($Password)){
    $error=$expr["Please Enter Email And Password"];
    $check = false;
}
else{
    $query=" SELECT * FROM sign_up WHERE Email='$Email'";
    $result=mysqli_query($conn,$query);
    if($row=mysqli_fetch_assoc($result)){
        $db_password = $row['PassWord'];
        $_SESSION['Name']=$row['FullName'];
        $_SESSION['ID']=$row['ID'];
        if($Password == $db_password){
            header('Location: Afterlogin.php');
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
