<?php include 'lang.php';?>
<?php include 'loginback.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Login As Doners']?></title>
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
                                <li class="active"><a href="login.php"><span><?php echo $expr['Login As Doners']?></span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="admin.php"><span><?php echo $expr['Login As Admin']?></span></a></li>
                            </ul>
                            </li>                            
                            <li><a href="SignUp.php"><?php echo $expr['Sign Up']?></a></li>
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
                <h2><?php echo $expr['Login To Your Account']?></h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><?php echo $expr['Login']?></h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;"><?php echo $expr['HOME']?><span class="sep"> / </span><span class="current"><?php echo $expr['Login']?></span></div>
                </div>
            </div>
        </div>
    </section>          
    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons ">
                        <div class="col-xs-2 icon"><i class="fas fa-user-edit"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['Edit Profile']?></h4>
                            <p><?php echo $expr['You can modify and control your profile quickly and smoothly, for example: change your name, phone number, etc.']?></p>
                        </div>
                    
                    </div>
                  <div class="col-md-6 col-sm-12 forms-right-icons ">
                        <div class="col-xs-2 icon"><i class="fas fa-list-ul"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['Register To Donate']?></h4>
                            <p><?php echo $expr['Fill out the information in the donation form now to be on the list of donors and be active for the good.']?></p>
                        </div>
                    
                    </div>
                <div class="cent">
                    <div class="form-box">
                        <div class="form-top" style="width: 100%;">
                            <div class="form-top-left">
                                <h3><?php echo $expr['Login']?></h3>
                                <p><?php echo $expr['Enter Email And Password To Login :']?></p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="#" class="login-form" method="post">
                            <?php if($Error_flag_ERROR==true){if($Error_array['ERROR']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['ERROR']."</center></div></strong>"; }?>
                                <?php if($check==false){ echo "<strong><div  class='alert alert-danger'><center>$error</center></div></strong>";}?>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                    <input type="text" name="email" class="form-control" placeholder="<?php echo $expr['Email']?>" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fas fa-key"></i></span>
                                    <input type="password" name="pass" class="form-control" placeholder="<?php echo $expr['Password']?>" value="<?php if(isset($_POST['PASS'])) echo $_POST['PASS']?>" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn" name="Sub"><?php echo $expr['Login']?> !</button>
                                <div><span><?php echo $expr['You Don’t Have An Account']?>?</span>&nbsp;<a href="SignUp.php" class="hh"><u><?php echo $expr['Sign Up']?></u>!</a></div>
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
