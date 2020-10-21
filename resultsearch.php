<?php include 'lang.php';?>
<?php include 'searchbloodback.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Result Of Your Search']?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssf.php?filename=css/main.css">
    <link rel="stylesheet" href="cssf.php?filename=css/skin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <link rel="icon" href="img/blood_logo.jpg">
</head>
<body id="wrapper">
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 top-header-links">
                    <ul class="contact_links">
                        <li><i class="far fa-envelope"></i><a href="#">blood.bank.jordan@gmail.com</a></li>
                        <?php foreach ($dictionary as $key=>$lang_dict): ?>
                        <?php if($current_lang==$key) : ?>
                        <li><a href="#"><u><?php echo $lang_dict['name']?></u></a></li>
                        <?php else : ?>
                        <li><a href="lang.php?change=<?php echo $key ?>"><u><?php echo $lang_dict['name']?></u></a></li>
                        <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 social">
                    <ul class="social_links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2><?php echo $expr['Here is the result of finding donors,We wish you well']?></h2>
            </div>
             <div><center><a href="searchblood.php"><button type="button" class="btn btn-primary slide"><?php echo $expr['Return']?> &nbsp; <i class="fa fa-caret-right"></i> </button></a></center></div>
                </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><?php echo $expr['Result Of Your Search']?></h4>
                    </div>
                   
            </div>
        </div>
    </div>
    </section>
<div class="container-fluid ">
<?php if(!$check){echo "<strong><div  class='alert alert-danger'><center>$error</center></div></strong>";}?>
    <div class="table">
<table >
    <tr>
<th>#</th>
<th><?php echo $expr['Name Of Doner']?></th>
<th><?php echo $expr['Blood Type']?></th>
<th><?php echo $expr['#Units']?></th>
<th><?php echo $expr['City']?></th> 
<th><?php echo $expr['Gender']?></th>    
<th><?php echo $expr['Age']?></th>   
<th><?php echo $expr['Number Phone']?></th>
<th><?php echo $expr['Email']?></th>
<th><?php echo $expr['Message']?></th>
<th><?php echo $expr['Contact']?></th>
</tr>
<?php
//connection databace
$host="localhost";
$user="db_blood";
$password="blood@bank";
$dbName="blood bank";
$con=mysqli_connect($host,$user,$password,$dbName);
//نتيجة البحث عن متبرع بالدم بناءا على زمرة الدم والمحافظه 
if(isset($_POST["SUPMIT"])){
$BTYPE=$_POST["bloodtype"];
$ADDRESS=$_POST["address"];
$query="SELECT DISTINCT regdoners.Name,regdoners.BT,regdoners.NumberUnit,regdoners.Address,regdoners.Gender,regdoners.SS,regdoners.Age,regdoners.Nphone,regdoners.Email,regdoners.AdditonalInfo FROM regdoners WHERE regdoners.BT='$BTYPE' AND regdoners.Address='$ADDRESS' AND regdoners.Status=1";
$result=mysqli_query($con,$query);
$num=1;
if($result){
while($row=mysqli_fetch_assoc($result)){
echo"<tr><td>".$num++."</td><td>".$row['Name']."</td><td>".$row['BT']."</td><td>".$row['NumberUnit']." Units"."</td><td>".$row['Address']."</td><td>".$row['Gender']."</td><td>".$row['Age']."</td><td>".$row['Nphone']."</td><td>".$row['Email']."</td><td>".$row['AdditonalInfo']."</td><td>"."&nbsp;<a class='btn btn-success' href='tel:{$row["Nphone"]}'>{$expr['Call Me']}</a>&nbsp;<a href=mailto:{$row["Email"]}><button type='button' class='btn btn-info' >{$expr['Send Email']}</button></a>"."</td></tr>";
}  
echo "</table>";
}
}
?>
</table>
    </div>
        </div>


</body>
</html>
    
