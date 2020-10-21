<?php include 'lang.php';?>
<?php include 'contactback.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Contact']?></title>
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
                            <li class="active"><a href="contact.php"><?php echo $expr['Contact']?></a></li>
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
                <h2><?php echo $expr['Contact with us, we are at your service']?></h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><?php echo $expr['Contact']?></h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;"><?php echo $expr['HOME']?><span class="sep"> / </span><span class="current"><?php echo $expr['Contact']?></span></div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="section-heading text-center">
                <h2><span><?php echo $expr['Online enquiry form']?></span></h2>
                <p class="subheading"><?php echo $expr['You can use this form to inquire about the mechanism of using the site and communicate with the Relationship owners on any problem you face and express your opinion of the site .']?></p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="contact.php">
                <?php
                                if($check==false)
                                {
                                    echo "<div  class='alert alert-danger'><center>$error</center></div>";
                                }
                                elseif($Error_flag_phone==true||$Error_flag_name==true||$Error_flag_email==true){
                                    echo "<div  class='alert alert-danger'><center>Try Again You Have A Problem</center></div>";
                                }
                                elseif(isset($_POST["csubmit"]))
                                {
                                    echo "<div class='alert alert-success'><center>Your Message Sent Successfully</center></div>";
                                }
                         ?>
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label><?php echo $expr['Name']?> *</label>
                            <input type="text" name="cname" class="form-control"  value="<?php if(isset($_POST['cname'])) echo $_POST['cname']?>">
                        </div>
                        <?php if($Error_flag_name==true){if($Error_array['cname']!==null)echo "<div class='alert alert-danger'>".$Error_array['cname']."</div>";}?>
                        <div class="form-group">
                            <label><?php echo $expr['Email']?> *</label>
                            <input type="email" name="cemail" class="form-control" value="<?php if(isset($_POST['cemail'])) echo $_POST['cemail']?>">
                        </div>
                        <?php if($Error_flag_email==true){if($Error_array['cemail']!==null )echo "<div class='alert alert-danger'>".$Error_array['cemail']."</div>";}?>
                        <div class="form-group">
                        <label><?php echo $expr['Phone']?> *</label>
                            <input type="number" name="cphone" class="form-control" value="<?php if(isset($_POST['cphone'])) echo $_POST['cphone']?>">
                        </div>
                        <?php if($Error_flag_phone==true){if($Error_array['cphone']!==null)echo "<div class='alert alert-danger'>".$Error_array['cphone']."</div>";}?>
                                    <div class="form-group">
                                    &nbsp;&nbsp;<strong><?php echo $expr['City']?> *</strong>
                                    <select name="caddress" class="form-control">
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
                                </div>
                        <?php if($Error_flag_address==true){if($Error_array['caddress']!==null)echo "<div class='alert alert-danger'>".$Error_array['caddress']."</div>";}?>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><?php echo $expr['Subject']?> *</label>
                            <input type="text" name="csubject" class="form-control" value="<?php if(isset($_POST['csubject'])) echo $_POST['csubject']?>">
                        </div>
                        <?php if($Error_flag_subject==true){if($Error_array['csubject']!==null)echo "<div class='alert alert-danger'>".$Error_array['csubject']."</div>";}?>
                        <div class="form-group">
                            <label><?php echo $expr['Message']?> *</label>
                            <textarea name="cmessage" id="cmessage" class="form-control" rows="15" ></textarea>
                        </div>
                            <?php if($Error_flag_message==true){if($Error_array['cmessage']!==null)echo "<div class='alert alert-danger'>".$Error_array['cmessage']."</div>";}?>

                        <div class="form-group">
                            <button type="submit" name="csubmit" class="btn btn-default submit-button"><?php echo $expr['Submit Message']?> <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                </form>
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




