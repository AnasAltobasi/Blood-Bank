<?php include 'lang.php';?>
<?php include 'searchbloodback.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Search For Blood']?></title>
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
                            <li><a href="SignUp.php"><?php echo $expr['Sign Up']?></a></li>
                            <li class="active"><a href="searchblood.php"><?php echo $expr['Search For Blood']?></a></li>
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
                <h2><?php echo $expr['Fill in the details and information required to search for the desired blood']?></h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><?php echo $expr['Search For Blood']?></h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;"><?php echo $expr['HOME']?><span class="sep"> / </span><span class="current"><?php echo $expr['Search For Blood']?></span></div>
                </div>
            </div>
        </div>
    </section>
<!-- Body Of Page -->
<center>
<section id="login-reg">
     <div class="container">
            <!-- Top content -->
        <div class="row">
     <div class="col-md-6-6">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><?php echo $expr['Find blood Donor!']?></h3>
                                <p><?php echo $expr['Fill out details for searching blood']?></p>
                            </div>
                            <div class="form-top-right">
                                <i class="fab fa-searchengin"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="resultsearch.php" method="post" class="login-form">
                                <div class="data"><span><?php echo $expr['Data For Search Process']?></span></div><hr>
                                <?php if(!$check){ echo "<strong><div  class='alert alert-danger'><center>$error</center></div></strong>";}?>
                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" name="PHONE" pattern="[0-9]{10}" required class="form-control" placeholder="<?php echo $expr['Number Phone']?>" value="<?php if(isset($_POST['PHONE'])) echo $_POST['PHONE']?>">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fas fa-city"></i></span>
                              <select name="address"  class="s1 form-control">
                              <option value=""><?php echo $expr['City']?></option>
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
                               </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fas fa-vial" ></i></span>
                              <select name="bloodtype" class="s1 form-control">
                              <option value=""><?php echo $expr['Blood Group']?></option>
                              <option value="A+"><?php echo $expr['A+']?></option>
                              <option value="A-"><?php echo $expr['A-']?></option>
							  <option value="AB+"><?php echo $expr['AB+']?></option>
                              <option value="AB-"><?php echo $expr['AB-']?></option>
							  <option value="B+"><?php echo $expr['B+']?></option>
                              <option value="B-"><?php echo $expr['B-']?></option>
							  <option value="O+"><?php echo $expr['O+']?></option>
							  <option value="O-"><?php echo $expr['O-']?></option>
				         	  </select> 
                                </div>
                                <label for="job"><?php echo $expr['Fill In More Details About The Search You Want,We Will Contact You Shortly']?>:</label>
                                <div class="input-group form-group">
                                    <textarea rows="10" cols="150" name="information" class="form-control" placeholder="<?php echo $expr['More Information']?>"></textarea>
                                </div>
                                <button type="submit" name="SUPMIT" class="btn"><?php echo $expr['Search!']?></button>
                            </form>
                        </div>
                    </div>
                </div>
          
            </div>
        </div>
        </section> 
</center>
<!-- End Body Of Page -->
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
