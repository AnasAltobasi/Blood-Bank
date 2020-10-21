<?php include 'lang.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['FAQ']?></title>
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
                            <li class="active"><a href="faq.php"><?php echo $expr['FAQ']?></a></li>
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
    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2><?php echo $expr['Blood bank usage instructions']?></h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><?php echo $expr['FAQ']?></h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;"><?php echo $expr['HOME']?><span class="sep"> 	/ </span><span class="current"><?php echo $expr['FAQ']?></span></div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="titlebar">
            <div class="container">
                <div class="row">
                    <div class="section-heading text-center">
                        <div class="col-md-12 col-xs-12">
                            <h2><?php echo $expr['Know Us']?> <span><?php echo $expr['More']?></span></h2>
                            <p class="subheading"><?php echo $expr['You can learn more accurate details about the proper use of the site in general,And also on how to donate and find blood in particular.']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="rich-accordian">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <div class="icon-circle"> <i class="fas fa-syringe"></i></div>
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo $expr['How do I get blood?']?>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                       <?php echo $expr['If you want to get blood at full speed, you should go to a page  Search for blood, and then you must fill in the details accurately based on your request for the desired blood.']?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <div class="icon-circle"> <i class="fas fa-vial"></i></div>
                                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     <?php echo $expr['How to make a donation?']?>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body"><?php echo $expr['If you want to donate blood, you should go to the page Register as a new donor and create your account easily, after that you have to go to log in to your account through the page  Sign in as a donor to log in to your own account to fill in the blood donation information form and submit your request to donate. If you already have an account, you must log in to your account through the page  Sign in as a direct donor and fill out the donation form. Thank you']?>
                                </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <div class="icon-circle"> <i class="fas fa-search"></i></div>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php echo $expr['How To Search For Blood?']?>       
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body"><?php echo $expr['Dear,if you want to search for blood, you should go to the page Search for blood, and through it the search form will appear for you, and the search for blood and the person who donated will come through the blood group that you want immediately and the province you want.']?>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="rich-accordian">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingfour">
                                    <h4 class="panel-title">
                                        <div class="icon-circle"> <i class="fas fa-exchange-alt"></i></div>
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour"><?php echo $expr['How blood exchanged between donor and recipient?']?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                    <div class="panel-body"><?php echo $expr['After searching for the blood required from the researcher and obtaining a donor, if any, communication between the donor and the researcher will be through the phone number or email, according to the desire of the researcher.']?>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingfive">
                                    <h4 class="panel-title">
                                        <div class="icon-circle"> <i class="fas fa-sign-in-alt"></i></div>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive"><?php echo $expr['How do I login to my account?']?>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                    <div class="panel-body"><?php echo $expr['Log in to your personal account through the page Sign in as a donor. You can manage your own account and amend your information according to what you want according to the proposed rules. Also donate and put your name on the list of donors or not if you do not want at a certain time.']?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingsix">
                                    <h4 class="panel-title">
                                        <div class="icon-circle"> <i class="far fa-comments"></i></div>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix"><?php echo $expr['How do I contact or advise / complain through the site?']?>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                    <div class="panel-body"><?php echo $expr['You can submit an objection, complaint, advice, or add to the site through a page Contact and fill out the form on the page and it will be answered with love and peace.']?>
                                </div>
                                </div>
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
