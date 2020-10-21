<?php
//Grtting Data From User Form
if(!isset($_SESSION)){session_start();}
$id=$_SESSION["ID"];
$namee=isset($_POST["fullname"]) ? $_POST["fullname"] : "";
$message=isset($_POST["message"]) ? $_POST["message"] : "";
$email=isset($_POST["Email"]) ? $_POST["Email"] : "";
$phone=isset($_POST["phonenum"]) ? $_POST["phonenum"] : "";
$age=isset($_POST["Birthday"]) ? $_POST["Birthday"] : "";
$pw1=isset($_POST["pass1"]) ? $_POST["pass1"] : "";
$pw2=isset($_POST["pass2"]) ? $_POST["pass2"] : "";
$submit=isset($_POST["sup"]) ? $_POST["sup"] : "";
$submit2=isset($_POST["sremove"]) ? $_POST["sremove"] : "";
//connection to data Base
$host="localhost";
$user="db_blood";
$password="blood@bank";
$dbName="blood bank";
$conn=mysqli_connect($host,$user,$password,$dbName);
//Variable Here
$error = null;
$check = true;
$Error_flag_FNAME=false;
    $Error_flag_EM=false;
    $Error_flag_PASS=false;
    $Error_flag_PASS2=false;
    $Error_flag_NU=false;
    $Error_array=array(
        // register errors
        'FNAME'=>'',
        'EM'=>'',
        'PASS'=>'',
        'PASS_2'=>'',
        'NU'=>'');
//*********/ 
$query="SELECT * FROM sign_up WHERE ID='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if($submit){
if($pw1!=$row['PassWord']){
$error = $expr['Invalid Password'];
$check = false;
}
if(!preg_match('/^[_\s[:alpha:]]+$/',$namee)&&(!preg_match("/\p{Arabic}/u",$namee))){
    $Error_array['FNAME'] = $expr["Only letters"];
    $Error_flag_FNAME=true;
}
elseif(strlen($namee)>50 || strlen($namee)<3){
     $Error_array['FNAME']=$expr['Must Be More Than Three Letters'];
     $Error_flag_FNAME=true;
}
if(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email)){
        $Error_array['EM']=$expr['Invalid Email'];
        $Error_flag_EM=true;
}
if(empty($pw1)){
    $Error_array['PASS_2']=$expr['Password Empty'];
    $Error_flag_PASS2=true;
}
if ($pw2 != null){
if(empty($pw2)){
    $Error_array['PASS']=$expr['Password Empty'];
    $Error_flag_PASS=true;
}
elseif (strlen($pw2)<8) {
$Error_array['PASS']=$expr['Must Be More Than 8 Characters Long'];
$Error_flag_PASS=true;
}
elseif(!preg_match('/[[:digit:]]+/',$pw2)) {
$Error_array['PASS']=$expr['Must Contain At Least One Number'];
$Error_flag_PASS=true;
}
elseif(!preg_match('/[[:upper:]]+/',$pw2)) {
$Error_array['PASS']=$expr['Must Contain At Least One Capital Letter'];
$Error_flag_PASS=true;
}
elseif(preg_match('/[[:blank:]]+/',$pw2)){
$Error_array['PASS']=$expr['Must Not Contain A Space'];
$Error_flag_PASS=true;
}}
else{
if($pw2==null){
$pw2=$pw1;
}
}
if(!preg_match('/^[0-9]{10}+$/',$phone)){
$Error_array['NU']=$expr['Should Contain 10 Number'];
$Error_flag_NU=true;
}
elseif($check&&$Error_flag_EM==false&&$Error_flag_FNAME==false&&$Error_flag_NU==false&&$Error_flag_PASS==false&&$Error_flag_PASS2==false){
$query="UPDATE sign_up SET FullName='$namee' , Email='$email' , NumberPhone='$phone' , Age='$age', Masseges='$message',PassWord='$pw2',ConfirmPassword='$pw2' WHERE ID='$id'";
$result2=mysqli_query($conn,$query);
}
}
if(isset($_POST["sremove"]))
{
    $query="DELETE FROM sign_up WHERE ID='$id'";
    $result3=mysqli_query($conn,$query);
    header("Location: logout.php");
}
?>
