<?php
//connection databace
$host="localhost";
$user="db_blood";
$password="blood@bank";
$dbName="blood bank";
$conn=mysqli_connect($host,$user,$password,$dbName);
$Phone=isset($_POST["PHONE"])? $_POST["PHONE"]: "";
$address=isset($_POST["address"])? $_POST["address"]: "";
$btype=isset($_POST["bloodtype"])? $_POST["bloodtype"]: "";
$message=isset($_POST["information"])? $_POST["information"]: "";
$submit=isset($_POST["SUPMIT"])? $_POST["SUPMIT"]: "";
$error=null;
$check=true;
if(isset($_POST["SUPMIT"])){
if(empty($btype)||empty($address)){
     $error=$expr["Please Fill All Requires In Form Select City And Blood Type"];
     $check = false;
}
else{
$query="INSERT INTO search_blood(PhoneNumber,Governorate,BloodType,ImportantInformation)VALUE('$Phone','$address','$btype','$message')";
$result=mysqli_query($conn,$query);
}
}
?>
