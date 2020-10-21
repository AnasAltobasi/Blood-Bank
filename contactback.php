<?php include 'lang.php';?>
<?php
$name=isset($_POST["cname"]) ? $_POST["cname"] : "";
$email=isset($_POST["cemail"]) ? $_POST["cemail"]: "";
$phone=isset($_POST["cphone"])? $_POST["cphone"]: "";
$address=isset($_POST["caddress"])? $_POST["caddress"]: "";
$subject=isset($_POST["csubject"])? $_POST["csubject"]: "";
$message=isset($_POST["cmessage"])? $_POST["cmessage"]: "";
$submit=isset($_POST["csubmit"])? $_POST["csubmit"]: "";
$Error_array=array(
    // register errors
    'cname'=>'',
    'cemail'=>'',
    'cphone'=>'',
    'caddress'=>'',
    'csubject'=>'');
    $error = null;
    $check = true;
    $Error_flag_phone=false;
    $Error_flag_email=false;
    $Error_flag_name=false;
    $Error_flag_address=false;
    $Error_flag_subject=false;
    $Error_flag_message=false;
//connection databace
    $host="localhost";
    $user="db_blood";
$password="blood@bank";
    $dbName="blood bank";
    $conn=mysqli_connect($host,$user,$password,$dbName);

    //validation
    if(isset($_POST["csubmit"])){
    if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($subject) || empty($message))
    {
        $error=$expr["Please Fill All Requires In Form"];
        $check = false;
    }
    //validation name
        if(empty($name)){
             $Error_array['cname']=$expr["Name Empty"];
             $Error_flag_name=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)&&(!preg_match("/\p{Arabic}/u",$name)))
            {
                $Error_array['cname']=$expr["Only letters"];
                $Error_flag_name=true;
            }
    //validation email
        if(empty($email)){
            $Error_array['cemail']=$expr["Email Empty"];
            $Error_flag_email=true;
        }
    elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email))
            {
                $Error_array['cemail']=$expr["Invalid Email"];
                $Error_flag_email=true;
            }
    
    //validation phone
        if(empty($phone)){
        $Error_array['cphone']=$expr["Phone Number Empty"];
        $Error_flag_phone=true;
        }
    elseif(!preg_match('/^[0-9]{10}$/',$phone))
    {
        $Error_array['cphone']=$expr["Invalid Number"];
        $Error_flag_phone=true;
    }
    //validation City
        if(empty($address)){
        $Error_array['caddress']=$expr["City Empty"];
        $Error_flag_address=true;
        }
    //validation subject
    if(empty($subject)){
        $Error_array['csubject']=$expr["Subject Empty"];
        $Error_flag_subject=true;
    }
    //validation Messages
   if(empty($message)){
        $Error_array['cmessage']=$expr["Message Empty"];
        $Error_flag_message=true;
   }
    //send data to database
    if($check&&$Error_flag_email==false&&$Error_flag_name==false&&$Error_flag_phone==false&&$Error_flag_address==false){
    if('$submit'){
    $query="INSERT INTO contact(Name,Email,Phone,Address,Subject,Message)VALUES('$name','$email','$phone','$address','$subject','$message')";
    $result=mysqli_query($conn,$query);
}
    }
    }
?>
