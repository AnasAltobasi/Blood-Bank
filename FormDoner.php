<?php include 'lang.php';?>
<?php include 'FormDonerback.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Form Be A Doner']?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssf.php?filename=css/main.css">
    <link rel="stylesheet" href="cssf.php?filename=css/skin.css">
    <script src="./script/jquery.min.js"></script>
    <script src="./script/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <link rel="icon" href="img/blood_logo.jpg">
</head>
<body id="wrapper">
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fas fa-sign-out-alt"></i><a href="index.php"><?php echo $expr['Log Out!']?></a></li>
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
                        <li><i class="far fa-user"></i><?php echo $_SESSION['Name'];?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <header>
        <nav class="navbar navbar-inverse1">
            <div class="container">
                    <div class="mahdi">
                        <center>
                   <a>
              <img src="img/blood_logo.jpg" alt="Logo" width="30px" hight="30px" class="image"></a>
                        <a class="navbar-brand" >
                            <h1><?php echo $expr['Blood Bank']?></h1><span><?php echo $expr['Be An Actor For Good']?></span></a> 
                     </center>
                    </div>
         </div>
        </nav>
</header>
<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2><?php echo $expr['Fill out the information in the donation form']?></h2>
            </div>
            <div><center><a href="Afterlogin.php"><button type="button" class="btn btn-primary slide"><?php echo $expr['Return']?> &nbsp; <i class="fa fa-caret-right"></i> </button></a></center></div>
                </div>
    </section>
<div class="form-style-5">
<form role="form" action="#" method="post">
<?php
if(!$check)
{
echo "<strong><div  class='alert alert-danger'><center>$error</center></div></strong>";
}
elseif($Error_flag_NAME==true||$Error_flag_NUI==true||$Error_flag_EM==true||$Error_flag_NU==true||$Error_flag_age==true){
echo " <strong><div  class='alert alert-danger'><center>Try Again You Have A Problem</center></div> <strong>";
}
elseif(isset($_POST["SUP"]))
{
echo " <strong><div class='alert alert-success'><center>Thank You, You Are Now On The List Of Donors</center></div> <strong>";
}                            
?>
<fieldset>
<legend><span class="number">1</span><?php echo $expr['Personal Information']?></legend>
<label for="job"><?php echo $expr['Name']?>:</label>

<input type="text" name="fname" placeholder="<?php echo $expr['Your Full Name']?>*" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']?>">
<?php if($Error_flag_NAME==true){if($Error_array['fname']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['fname']."</center></div><strong>"; }?>
<label for="job"><?php echo $expr['Gender']?>:</label>
<select id="job" name="gender">
<option value="...">...</option>
  <option value="Male"><?php echo $expr['Male']?></option>
  <option value="Female"><?php echo $expr['Female']?></option>
</optgroup>
</select> 
<label for="job"><?php echo $expr['Age']?>:</label>
<input type="text" name="age" class="form-control" placeholder="&nbsp;<?php echo $expr['Age']?>*"  aria-describedby="basic-addon1" value="<?php if(isset($_POST['age'])) echo $_POST['age']?>"/>
<?php if($Error_flag_age==true){if($Error_array['age']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['age']."</center></div><strong>"; }?>

<label for="job"><?php echo $expr['Social Status']?>:</label>
<select id="job" name="socials">
<option value="">...</option>
  <option value="Unmarried"><?php echo $expr['Unmarried']?></option>
  <option value="married"><?php echo $expr['Married']?></option>
</optgroup>
</select> 
<label for="job"><?php echo $expr['Blood Group']?>:</label>
<select name="BG" class="s1">
<option value="">...</option>
<option value="A+"><?php echo $expr['A+']?></option>
<option value="A+"><?php echo $expr['A-']?></option>
<option value="AB+"><?php echo $expr['AB+']?></option>
<option value="AB+"><?php echo $expr['AB-']?></option>
<option value="B+"><?php echo $expr['B+']?></option>
<option value="B+"><?php echo $expr['B-']?></option>
<option value="O+"><?php echo $expr['O+']?></option>
<option value="O-"><?php echo $expr['O-']?></option>
</select> 
</fieldset>
<fieldset>
<legend><span class="number">2</span><?php echo $expr['Contact Info']?></legend>
<label for="job"><?php echo $expr['Number Phone']?>:</label>
<input type="text" name="number" placeholder="<?php echo $expr['Number Phone']?> *" value="<?php if(isset($_POST['number'])) echo $_POST['number']?>">
<?php if($Error_flag_NU==true){if($Error_array['NU']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['NU']."</center></div><strong>"; }?>
<label for="job"><?php echo $expr['Email']?>:</label>
<input type="text" name="email" placeholder="<?php echo $expr['Email']?> *" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
<?php if($Error_flag_EM==true){if($Error_array['EM']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['EM']."</center></div><strong>"; }?>
<fieldset>
<label for="job"><?php echo $expr['City']?>:</label>
<select name="city" class="s1"> 
<option value="">...</option>
<option value="Amman"><?php echo $expr['Amman']?></option>
<option value="Zarqa"><?php echo $expr['Zarqa']?></option>
<option value="Al-Mafraq"><?php echo $expr['Al-Mafraq']?></option>
<option value="Irbad"><?php echo $expr['Irbad']?></option>
<option value="Albalqa"><?php echo $expr['Al-Balqa']?></option>
<option value="Jarash"><?php echo $expr['Jarash']?></option>
<option value="Aqaba"><?php echo $expr['Aqaba']?></option>
<option value="Maan"><?php echo $expr['Maan']?></option>
<option value="Alkarak"><?php echo $expr['Al-Karak']?></option>
<option value="Altafilah"><?php echo $expr['Al-Tafilah']?></option>
<option value="Madaba"><?php echo $expr['Madaba']?></option>
<option value="Ajloun"><?php echo $expr['Ajloun']?></option>
</select> 
</fieldset>
<textarea name="info" placeholder="<?php echo $expr['More Information']?>"></textarea>
</fieldset>
<legend><span class="number">3</span><?php echo $expr['Additional Information']?></legend>
<label><?php echo $expr['If You Are a Person Alone, Fill This Field With One Unit Of Blood ’1’ Or Else (a Group Of People) Fill In The Number Of Units You Want To Donate If Possible.']?>:</label>
<input type="text" name="nu" placeholder="<?php echo $expr['The Number Of Blood Units Just If You Are With Group']?> *" value="<?php if(isset($_POST['nu'])) echo $_POST['nu']?>">
<?php if($Error_flag_NUI==true){if($Error_array['NUI']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['NUI']."</center></div><strong>"; }?>
<label for="job"><?php echo $expr['Fill Out More Information To Be Taken Into Consideration']?>:</label>
<textarea name="info2" placeholder="<?php echo $expr['More Information']?>"></textarea>
<input type="submit" value="<?php echo $expr['Apply']?>" name="SUP"/>
 <?php
if(!$check)
{
echo "<strong><div  class='alert alert-danger'><center>$error</center></div></strong>";
}
elseif($Error_flag_NAME==true||$Error_flag_NUI==true||$Error_flag_EM==true||$Error_flag_NU==true||$Error_flag_age==true){
echo " <strong><div  class='alert alert-danger'><center>Try Again You Have A Problem</center></div> <strong>";
}
elseif(isset($_POST["SUP"]))
{
echo " <strong><div class='alert alert-success'><center>Thank You, You Are Now On The List Of Donors</center></div> <strong>";
}                           
?>
</form>
</div>
    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                <h5><span>&copy;&nbsp;<?php echo $expr['Developed And Design by IT Team']?></span></h5>
                </div>
            </div>
        </div>
    </section>
    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>
        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div>
    </body>
</html>