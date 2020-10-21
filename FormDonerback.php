<?php
//connection database
$host="localhost";
$user="db_blood";
$password="blood@bank";
$dbName="blood bank";
$conn=mysqli_connect($host,$user,$password,$dbName);
//getting data
//personal Data
$name=isset($_POST["fname"]) ? $_POST["fname"] : "Man Of Good";
$gen=isset($_POST["gender"]) ? $_POST["gender"] : "";
$age=isset($_POST["age"]) ? $_POST["age"] : "";
$ss=isset($_POST["socials"]) ? $_POST["socials"] : "";
$BGroup=isset($_POST["BG"]) ? $_POST["BG"] : "";
//contact data
$phone=isset($_POST["number"]) ? $_POST["number"] : "";
$email=isset($_POST["email"]) ? $_POST["email"] : "";
$city=isset($_POST["city"]) ? $_POST["city"] : "";
$Massege1=isset($_POST["info"]) ? $_POST["info"] : "";
//additional data
$numberunit=isset($_POST["nu"]) ? $_POST["nu"] : "";
$Massege2=isset($_POST["info2"]) ? $_POST["info2"] : "";
//submit
$Apply=isset($_POST["SUP"]) ? $_POST["SUP"] : "";
$state=1;
//validation
$error = null;
$check = true;
$Error_flag_NAME=false;
$Error_flag_age=false;
$Error_flag_NU=false;
$Error_flag_EM=false;
$Error_flag_NUI=false;
$Error_array=array(
        // register errors
        'fname'=>'',
        'age'=>'',
        'EM'=>'',
        'NU'=>'',
'NUI'=>'');
if(isset($_POST["SUP"])){
    if(empty($name)||empty($age)||empty($phone)||empty($email)||empty($numberunit)||empty($city)||empty($BGroup)||empty($gen)||empty($ss)){
        $error =$expr["Please Fill All Requires In Form"];
        $check = false;
    }
//validation name
if(empty($name)){
$Error_array['fname']=$expr['Name Empty'];
$Error_flag_NAME=true;
}
        elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)&&(!preg_match("/\p{Arabic}/u",$name)))
            {
                $Error_array['fname']=$expr["Only letters"];
                $Error_flag_NAME=true;
            }
            elseif(strlen($name)>50 || strlen($name)<3)
            {
                $Error_array['fname']=$expr['Must Be More Than Three Letters'];
                $Error_flag_NAME=true;
            }
//validetion age
if(empty($age)){
$Error_array['age']=$expr['Age Empty'];
$Error_flag_age=true;
}
elseif($age<18 || $age>65){
    $Error_array['age']=$expr['Age Must Between Just 18-65'];
    $Error_flag_age=true;
}
//validation number phone
if(empty($phone)){
            $Error_array['NU']=$expr["Phone Number Empty"];
            $Error_flag_NU=true;
        }
            elseif(!preg_match('/^[0-9]{10}+$/',$phone))
            {
                $Error_array['NU']=$expr["Invalid Number"];
                $Error_flag_NU=true;
            }
//validation Email
if(empty($email)){
            $Error_array['EM']=$expr['Email Empty'];
            $Error_flag_EM=true;
        }
            elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email))
            {
                $Error_array['EM']=$expr['Invalid Email'];
                $Error_flag_EM=true;
            }
//validation to Number Of Unit
if(!preg_match('/^[0-9]+$/',$numberunit)){
$Error_array['NUI']=$expr['Enter Valid Number'];
$Error_flag_NUI=true;
}
//******************************************************
//Send Data To Data Base
if($check&&$Error_flag_EM==false&&$Error_flag_NAME==false&&$Error_flag_NU==false&&$Error_flag_age==false){
    if('$Apply'){
    $query="INSERT INTO regdoners(Name,Gender,Age,SS,BT,Nphone,Email,Address,ContactInfo,NumberUnit,AdditonalInfo,Status)VALUE('$name','$gen','$age','$ss','$BGroup','$phone','$email','$city','$Massege1','$numberunit','$Massege2','$state')";
    $result=mysqli_query($conn,$query);
    }}}
?>
