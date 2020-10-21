<?php include 'lang.php';?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['HOME']?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssf.php?filename=css/main.css">
    <link rel="stylesheet" href="cssf.php?filename=css/skin.css">
    <link rel="icon" href="img/blood_logo.jpg">
    <script src="./script/jquery.min.js"></script>
    <script src="./script/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
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
                            <li class="active"><a href="index.php"><?php echo $expr['HOME']?></a></li>
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
                            <li><a href="SignUp.php"><?php echo $expr['Sign Up']?></a></li>
                            <li><a href="searchblood.php"><?php echo $expr['Search For Blood']?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--/.nav-ends -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <div class="item active">
                <div class="fill" style="background-image:url('img/blood.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading"><span><?php echo $expr['Blood Bank']?></span></h1>
                    <p class="banner_txt"><?php echo $expr['Use this site and be a donor or needer of']?>&nbsp;<span><?php echo $expr['Blood1']?></span></p><br>
                  <a href="login.php"><button type="button" class="btn btn-primary slide"><?php echo $expr['Login As Doners']?> &nbsp; <i class="fa fa-caret-right"></i> </button></a>
                      <a href="searchblood.php" ><button type="button" class="btn btn-primary slide"><?php echo $expr['Search For Blood']?> &nbsp; <i class="fa fa-caret-right"></i> </button></a>
                </div>
                
            </div>
            <div class="item ">
                <div class="fill" style="background-image:url('img/BB.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading"><?php echo $expr['Save A Life Give']?>&nbsp;<span><?php echo $expr['Blood']?></span></h1>
                    <p class="banner_txt"><?php echo $expr['Be an actor of Good and help']?>&nbsp;<?php echo $expr['one of them']?>&nbsp;<?php echo $expr['Blood1']?></p>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fas fa-heartbeat feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4><?php echo $expr['How To']?></h4>
                        <p><?php echo $expr['If you are a donor, or you are the one who wants blood and is looking up for it create an account and fill in the required details accurately,and login on your acount.']?></p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fas fa-syringe feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4><?php echo $expr['The benefits']?></h4>
                        <p><?php echo $expr['Increased bone marrow activity to produce new blood cells (erythrocytes, white blood cells and platelets). Increased blood circulation activity.']?></p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fas fa-smoking feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4><?php echo $expr['Tip']?></h4>
                        <p><?php echo $expr['If you smoke you have to do a CBC check to make sure your blood is strong. If your age less than 13 this will harm you and do not advise you to donate.']?></p>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <section id="about">
        <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <div class="background-imgholder">
                <img src="img/1to1.jpg" class="img-responsive"/>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
                <div class="text-block">
                    <div class="section-heading">
                        <h1><?php echo $expr['Conditions for donating']?><span> <?php echo $expr['Blood']?></span></h1>
                        <p class="subheading"><?php echo $expr['Some of the donation Conditions should be read carefully.']?></p>
                    </div>
                    <ul class="aboutul">
                        <li> <i class="fa fa-check"></i><?php echo $expr['The donor should is in good health and does not suffer from any infectious diseases.']?></li>
                        <li> <i class="fa fa-check"></i><?php echo $expr['The age of the donor should be 18-65 years.']?></li>
                        <li> <i class="fa fa-check"></i><?php echo $expr['Donor weight should not be less than 50 kg.']?></li>
                        <li> <i class="fa fa-check"></i><?php echo $expr['The hemoglobin level should for men is from 14 to 17 g, and for women from 12 to 14 g.']?></li>
                        <li> <i class="fa fa-check"></i><?php echo $expr['The pulse heart should is between 50-100 per minute.']?></li>
                        <li> <i class="fa fa-check"></i><?php echo $expr['Your blood pressure should be less than 120/80 mm Hg.']?></li>
                        <li> <i class="fa fa-check"></i><?php echo $expr['That the temperature should does not exceed 37 ° C.']?></li>
                    </ul>
                   <a href="https://www.moh.gov.jo/bloodBank/ServicesGuideDetails/103/204" target="_blank"><button type="button" class="btn btn-primary slide"><?php echo $expr['Learn More']?> <i class="fa fa-caret-right"></i> </button></a>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="process">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12">
                    <h1><?php echo $expr['Types of']?> <?php echo $expr['types']?><span> <?php echo $expr['Blood2']?> </span></h1><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div>
                            <span class="process-icon" ><i class="fas fa-vial feature_icon"></i></span></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="process-text-block">
                        <h4><?php echo $expr['A+/A-']?></h4>
                        <p><?php echo $expr['Give A, AB, and take A, O.']?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div>
                            <span class="process-icon"><i class="fas fa-vial feature_icon"></i></span></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="process-text-block">
                        <h4><?php echo $expr['B+/B-']?></h4>
                        <p><?php echo $expr['Receive from B and O and give AB and B.']?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div>
                            <span class="process-icon"><i class="fas fa-vial feature_icon"></i></span></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="process-text-block">
                        <h4><?php echo $expr['O+/O-']?></h4>
                        <p><?php echo $expr['It only receives O and gives all the factions.']?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block lastchild">
                    <div class="process-icon-holder">
                        <div>
                            <span class="process-icon"><i class="fas fa-vial feature_icon"></i></span></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="process-text-block">
                        <h4><?php echo $expr['AB+/AB-']?></h4>
                        <p><?php echo $expr['Receives all factions and only gives the AB family.']?></p>
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
