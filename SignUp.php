<?php include 'lang.php';?>
<?php include 'signupback.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Sign Up']?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
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
                <div class="col-md-6 col-sm-6 col-xs-12 top-header-links">
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
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="social_links">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
              </button>
              <a href="index.php">
              <img src="img/blood_logo.jpg" alt="Logo" width="30px" hight="30px" class="image"></a>
                        <a class="navbar-brand" href="index.php">
                            <h1><?php echo $expr['Blood Bank']?></h1><span><?php echo $expr['Be An Actor For Good']?></span></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><?php echo $expr['HOME']?></a></li>
                            <li><a href="faq.php"><?php echo $expr['FAQ']?></a></li>
                            <li><a href="contact.php"><?php echo $expr['Contact']?></a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php echo $expr['Login']?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php"><span><?php echo $expr['Login As Doners']?></span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="admin.php"><span><?php echo $expr['Login As Admin']?></span></a></li>
                            </ul>
                            </li>                            
                            <li class="active"><a href="SignUp.php"><?php echo $expr['Sign Up']?></a></li>
                            <li><a href="searchblood.php"><?php echo $expr['Search For Blood']?></a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </nav>
    </header>
        <!--/.nav-ends -->
    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2><?php echo $expr['Join With us and create your own account now']?></h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><?php echo $expr['Sign Up']?></h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;"><?php echo $expr['HOME']?><span class="sep"> / </span><span class="current"><?php echo $expr['Sign Up']?></span></div>
                </div>
            </div>
        </div>
    </section>
    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2><span><?php echo $expr['Sign Up With Us']?></span></h2>
                        <p class="subheading"><?php echo $expr['Dear donor You have a set of information that you must fill in accurately and carefully while adhering to the terms for each requirement.Thank you']?></p>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fas fa-heartbeat feature_icon"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['Support everyone who needs']?> <span><?php echo $expr['Blood2']?></span> <?php echo $expr['by donating.']?></h4>
                            <p><?php echo $expr['Your Blood group may be more expensive than you think.']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fas fa-vial feature_icon"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['Who can donate blood?']?></h4>
                            <p><?php echo $expr['The age of the donor is between 18 and 65 years,The weight of the donor is at least 50 kg,The donor must be healthy when donating Blood.']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fas fa-syringe feature_icon"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['Things to watch out for before donating']?><span> <?php echo $expr['Blood']?> </span>:</h4>
                            <ul class="aboutul">
                        <li> <i class="fa fa-check"></i> <?php echo $expr['Blood hemoglobin test.']?></li>
                        <li> <i class="fa fa-check"></i> <?php echo $expr['Eat iron-rich food.']?></li>
                        <li> <i class="fa fa-check"></i> <?php echo $expr['Do not eat fatty foods.']?></li>
                        <li> <i class="fa fa-check"></i> <?php echo $expr['Drink a lot of water.']?></li>
                        <li> <i class="fa fa-check"></i> <?php echo $expr['Not taking aspirin.']?></li>
                        <li> <i class="fa fa-check"></i> <?php echo $expr['Sleeping well.']?></li>
                        <li> <i class="fa fa-check"></i> <?php echo $expr['Take someone with you.']?></li>
                    </ul>
                    <hr>
                        </div>
                    </div>
                </div>
                <!--forms-right-icons-->
                <div class="col-md-6 col-sm-12">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><?php echo $expr['Create A New Account']?></h3>
                                <p><?php echo $expr['Fill out your details']?></p>
                            </div>
                            <div class="form-top-right">
                                <i class="fas fa-sign-in-alt"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="SignUp.php" method="post" class="login-form">
                            <?php
                                if(!$check)
                                {
                                    echo "<strong><div  class='alert alert-danger'><center>$error</center></div></strong>";
                                }
                                elseif($Error_flag_FNAME==true||$Error_flag_PASS2==true||$Error_flag_PASS==true||$Error_flag_EM==true||$Error_flag_NU==true){
                                    echo "<strong><div  class='alert alert-danger'><center>".$expr['Try Again You Have A Problem']."</center></div> <strong>";
                                }
                                elseif(isset($_POST["SUP"]))
                                {
                                    echo "<strong><div class='alert alert-success'><center>".$expr['Your Account Has Been Created']."</center></div> <strong>";
                                }
                                ?>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" name="FNAME" class="form-control" placeholder="<?php echo $expr['Your Full Name']?>" 
                                           value="<?php if(isset($_POST['FNAME'])) echo $_POST['FNAME']?>" aria-describedby="basic-addon1"/>
                                </div>
                                <?php if($Error_flag_FNAME==true){if($Error_array['FNAME']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['FNAME']."</center></div><strong>"; }?>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                    <input type="text" name="EM" class="form-control" placeholder="<?php echo $expr['Email']?>" aria-describedby="basic-addon1" 
                                           value="<?php if(isset($_POST['EM'])) echo $_POST['EM']?>"/>
                                </div>
                                 <?php if($Error_flag_EM==true){if($Error_array['EM']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['EM']."</center></div><strong>"; }?>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fas fa-key"></i></span>
                                    <input type="password" name="PASS" class="form-control" placeholder="<?php echo $expr['Password']?>" aria-describedby="basic-addon1" 
                                           value="<?php if(isset($_POST['PASS'])) echo $_POST['PASS']?>"/>
                                </div>
                                 <?php if($Error_flag_PASS==true){if($Error_array['PASS']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['PASS']."</center></div></strong>"; }?>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fas fa-key"></i></span>
                                    <input type="password" name="PASS_2" class="form-control" placeholder="<?php echo $expr['Confirm Password']?>" aria-describedby="basic-addon1" value="<?php if(isset($_POST['PASS_2'])) echo $_POST['PASS_2'];?>"/>
                                </div>
                                <?php if($Error_flag_PASS2==true){if($Error_array['PASS_2']!=null) echo " <strong><div class='alert alert-danger'><center>". $Error_array['PASS_2']."</center></div><strong>";}?>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fas fa-phone-volume"></i></span>
                                    <input type="tel" name="NU" class="form-control" placeholder="<?php echo $expr['Phone No']?>" aria-describedby="basic-addon1" 
                                           value="<?php if(isset($_POST['NU'])) echo $_POST['NU']?>"/>
                                </div>
                                <?php if($Error_flag_NU==true){if($Error_array['NU']!=null)echo "<div class='alert alert-danger'><center>".$Error_array['NU']."</center></div>";}?>
                                    <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fas fa-universal-access"></i></span>
                                    <input type="date" name="age" class="form-control" placeholder="&nbsp;<?php echo $expr['Birthday']?>" aria-describedby="basic-addon1" value="<?php if(isset($_POST['age'])) echo $_POST['age']?>"/>
                                </div>
                                <div class="input-group form-control">
                                <span class="input-group-addon" id="basic-addon1"><i class="fas fa-transgender-alt" ></i></span>
                                    &nbsp;<big><strong><span><?php echo $expr['Gender']?></span></strong></big><br>
                                    &nbsp;&nbsp;<input type="radio" name="gender" value="male"> <?php echo $expr['Male']?>
                                    &nbsp;&nbsp;<input type="radio" name="gender" value="female"> <?php echo $expr['Female']?><br>
                                    </div><br>
                                <div class="input-group form-group">
                                    <textarea rows="10" cols="75" name="ME" class="form-control" placeholder="<?php echo $expr['More Information']?>"></textarea>
                                </div>
                                <button type="submit" name="SUP" class="btn"><?php echo $expr['Sign me up!']?></button>
                                <div><span><?php echo $expr['You Have An Account']?>?</span>&nbsp;<a href="login.php" class="hh"><u><?php echo $expr['Login']?></u>!</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4><?php echo $expr['Useful Links']?></h4>
                        <hr/>
                        <ul class="footer-links">
                           <li><a href="login.php"><?php echo $expr['Login As Doners']?></a></li>
                            <li><a href="SignUp.php"><?php echo $expr['Sign Up']?></a></li>
                            <li><a href="searchblood.php"><?php echo $expr['Search For Blood']?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4><?php echo $expr['Information']?></h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="#"><?php echo $expr['Blog']?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4><?php echo $expr['Learn More1']?></h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="faq.php"><?php echo $expr['FAQ']?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
