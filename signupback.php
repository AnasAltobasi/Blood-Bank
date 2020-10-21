<?php include 'lang.php';?>
<?php
    $host="localhost";
    $user="db_blood";
$password="blood@bank";
    $dbName="blood bank";
    $conn=mysqli_connect($host,$user,$password,$dbName);
    $Fname=isset($_POST["FNAME"]) ? $_POST["FNAME"] : "";
    $Email=isset($_POST["EM"]) ? $_POST["EM"] : "";
    $PW=isset($_POST["PASS"]) ? $_POST["PASS"] : "";
    $PW2=isset($_POST["PASS_2"]) ? $_POST["PASS_2"] : "";
    $NPhone=isset($_POST["NU"]) ? $_POST["NU"] : "";
    $Gender=isset($_POST["gender"]) ? $_POST["gender"] : "";
    $Age=isset($_POST["age"]) ? $_POST["age"] : "";
    $Massege=isset($_POST["ME"]) ? $_POST["ME"] : "";
    $Send=isset($_POST["SUP"]) ? $_POST["SUP"] : "";
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
$query="SELECT Email FROM sign_up";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
    if(isset($_POST["SUP"])){
        if(empty($Fname)  || empty($Email) || empty($PW) || empty($NPhone)  || empty($PW2) || empty($Gender) || empty($Age))
        {
            $error=$expr["Please Fill All Requires In Form"];
            $check = false;
        }
//Name validation
        if(empty($Fname)){
                $Error_array['FNAME']=$expr['Name Empty'];
                $Error_flag_FNAME=true;
        }
        elseif(!preg_match('/^[_\s[:alpha:]]+$/',$Fname)&&(!preg_match("/\p{Arabic}/u",$Fname)))
            {
                $Error_array['FNAME'] = $expr["Only letters"];
                $Error_flag_FNAME=true;
            }
            elseif(strlen($Fname)>50 || strlen($Fname)<3)
            {
                $Error_array['FNAME']=$expr['Must Be More Than Three Letters'];
                $Error_flag_FNAME=true;
            }
//Email validation
        if(empty($Email)){
            $Error_array['EM']=$expr['Email Empty'];
            $Error_flag_EM=true;
        }
            elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$Email))
            {
                $Error_array['EM']=$expr['Invalid Email'];
                $Error_flag_EM=true;
            }
        while($row=mysqli_fetch_assoc($result)){
        if($row['Email']==$Email){
            $Error_array['EM']=$expr['Email Used'];
            $Error_flag_EM=true;
        }
        }
//Password validation
        if(empty($PW)){
            $Error_array['PASS']=$expr['Password Empty'];
            $Error_flag_PASS=true;
            
        }
            elseif (strlen($PW)<8) 
            {
                $Error_array['PASS']=$expr['Must Be More Than 8 Characters Long'];
                $Error_flag_PASS=true;
            }
            elseif(!preg_match('/[[:digit:]]+/',$PW)) 
            {
                $Error_array['PASS']=$expr['Must Contain At Least One Number'];
                $Error_flag_PASS=true;
            }
            elseif(!preg_match('/[[:upper:]]+/',$PW)) 
            {
                $Error_array['PASS']=$expr['Must Contain At Least One Capital Letter'];
                $Error_flag_PASS=true;
            }
            elseif(preg_match('/[[:blank:]]+/',$PW)) 
            {
                $Error_array['PASS']=$expr['Must Not Contain A Space'];
                $Error_flag_PASS=true;
            }
            elseif ($PW!=$PW2) {
                $Error_array['PASS_2']=$expr['Password Not Match'];
                $Error_flag_PASS2=true;
            }
//NumberPhone validation
        if(empty($NPhone)){
            $Error_array['NU']=$expr['Phone Number Empty'];
            $Error_flag_NU=true;
        }
            elseif(!preg_match('/^[0-9]{10}+$/',$NPhone))
            {
                $Error_array['NU']=$expr['Should Contain 10 Number'];
                $Error_flag_NU=true;
            }
    if($check&&$Error_flag_EM==false&&$Error_flag_FNAME==false&&$Error_flag_NU==false&&$Error_flag_PASS==false&&$Error_flag_PASS2==false){
    if('$Send'){
    $query="INSERT INTO sign_up(FullName,Email,PassWord,ConfirmPassword,NumberPhone,Gender,Age,Masseges)VALUE('$Fname','$Email','$PW','$PW2','$NPhone','$Gender','$Age','$Massege')";
    $result=mysqli_query($conn,$query);
}}}
?>
