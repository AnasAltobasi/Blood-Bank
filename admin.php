<?php include 'lang.php';?>
<?php include 'adminback.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Login As Admin']?></title>
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
                                <li class="active"><a href="admin.php"><span><?php echo $expr['Login As Admin']?></span></a></li>
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
                <h2><?php echo $expr['Login And Control The Processes']?></h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><?php echo $expr['Login']?></h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;"><?php echo $expr['HOME']?><span class="sep"> / </span><span class="current"><?php echo $expr['Login As Admin']?></span></div>
                </div>
            </div>
        </div>
    </section>
<section id="login-reg">
    <div class="container">
<!-- Top content -->
        <div class="row">
                    <div class="section-heading">
                        <h2 style="text-align:center;"><?php echo $expr['Login As']?>&nbsp;<span><?php echo $expr['Admin']?></span></h2>
                        <p class="subheading" style="text-align:center;"><?php echo $expr['Login To Your Account Now,This Enable You To Manage Donations And Search For Donors']?></p>
                    </div>
                   <div class="col-md-6 col-sm-12 forms-right-icons ">
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fas fa-list"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['List Of Blood Donors']?></h4>
                            <p><?php echo $expr['Manage And Control Blood Donors Through Disabling Someone, Deleting Someone, etc.']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fas fa-th-list"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['List Of People Who Searched']?></h4>
                            <p><?php echo $expr['Find Out About All The People Who Searched For And Administered a Blood Donor']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fas fa-sign-in-alt"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['List Of People With Accounts On The Site']?></h4>
                            <p><?php echo $expr['Know Each Person Who Has An Online Account On The Site Including All Their Data.']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fas fa-inbox"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4><?php echo $expr['List Of People Who Sends Messages']?></h4>
                            <p><?php echo $expr['See All The People Who Have Sent Messages, Suggestions Or Complaints From The Website’s ’’Contact Us’’ Page.']?></p>
                        </div>
                    </div>
                            </div>
            
                 <div class="col-md-6 col-sm-12" style="margin-top: 50px;">
                     <div class="log">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                        <h3><?php echo $expr['Login']?></h3>
                        <p><?php echo $expr['Enter Username And Password To Login']?></p>
                </div>
            <div class="form-top-right">
        <i class="fas fa-sign-in-alt"></i>
   </div>
</div>
<div class="form-bottom">
    <form role="form" action="#" method="post" class="login-form">
        <?php if($Error_flag_ERROR==true){if($Error_array['ERROR']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['ERROR']."</center></div></strong>"; }?>
        <?php if($check==false){ echo "<strong><div  class='alert alert-danger'><center>$error</center></div></strong>";} ?>
        <div class="input-group form-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                <input type="text" name="UserName" class="form-control" placeholder="<?php echo $expr['UserName']?>" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']?>" aria-describedby="basic-addon1">
                    </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                <input type="password" name="PassAdmin" class="form-control" placeholder="<?php echo $expr['Password']?>" aria-describedby="basic-addon1">
                                    </div>
                                <button type="submit"  class="btn" name="Sub"><?php echo $expr['Login']?>!</button>
                            </form>
                           </div>
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
