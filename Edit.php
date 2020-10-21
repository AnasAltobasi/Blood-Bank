<?php include 'lang.php';?>
<?php include 'Editback.php';?>        
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Edit Profile']?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssf.php?filename=css/main.css">
    <link rel="stylesheet" href="cssf.php?filename=css/skin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="./script/jquery.min.js"></script>
    <script src="./script/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <link rel="icon" href="img/blood_logo.jpg">
    <style>
    .modal-backdrop.in
        {
            z-index: -1;
        }
    </style>
</head>
<body id="wrapper" >
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
                <h2><?php echo $expr['Control Your Data']?></h2>
                <br>
                <h2><?php echo $expr['Manage your own account']?></h2>
            </div>
            <div><center><a href="Afterlogin.php"><button type="button" class="btn btn-primary slide"><?php echo $expr['Return']?> &nbsp; <i class="fa fa-caret-right"></i> </button></a></center></div>
                </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><i class="fas fa-user-cog"></i>&nbsp;&nbsp;<?php echo $expr['Personal Profile']?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
    <h1><?php echo $expr['Edit Profile']?></h1>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="img/blood10.png" class="avatar img-circle" alt="avatar">
          <h6><?php echo $expr['Give Blood Save A Life']?></h6>
        <hr>
        <label class="control-label"><?php echo $expr['Make a Complaint']?></label>&nbsp;
        <a href="contact.php"><button type="button" class="btn btn-danger"><?php echo $expr['GO']?></button></a>
        </div>
      </div>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3><?php echo $expr['Edit Your Personal Information']?></h3><br>
        <label><?php echo $expr['Fill in the fields with the information you want to edit directly']?></label>
        <form class="form-horizontal" role="form" action="" method="post">
            <?php if($check&&isset($_POST["sup"])&&$Error_flag_FNAME==false&&$Error_flag_EM==false&&$Error_flag_PASS==false&&$Error_flag_PASS2==false&&$Error_flag_NU==false){echo "<strong><div class='alert alert-success'><center>".$expr['Your Account Data Has Been Edited/Updated You Must Logout To See The Changes']."</center></div> <strong>";}?>
          <hr>
          <div class="form-group">
            <label class="col-lg-3 control-label"><?php echo $expr['Name']?>:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['FullName']?>" name="fullname">
            </div>
          </div>
        <?php if($Error_flag_FNAME==true){if($Error_array['FNAME']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['FNAME']."</center></div><strong>"; }?>
          <div class="form-group">
            <label class="col-lg-3 control-label"><?php echo $expr['Email']?>:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['Email']?>" name="Email">
            </div>
          </div>
        <?php if($Error_flag_EM==true){if($Error_array['EM']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['EM']."</center></div><strong>"; }?>
            <div class="form-group">
            <label class="col-lg-3 control-label"><?php echo $expr['Number Phone']?>:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" value="<?php echo $row['NumberPhone']?>" name="phonenum">
            </div>
          </div>
        <?php if($Error_flag_NU==true){if($Error_array['NU']!=null)echo "<div class='alert alert-danger'><center>".$Error_array['NU']."</center></div>";}?>
            <div class="form-group">
            <label class="col-lg-3 control-label"><?php echo $expr['Birthday']?>:</label>
            <div class="col-lg-8">
              <input class="form-control" type="date" value="<?php echo $row['Age']?>" name="Birthday">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label"><?php echo $expr['Message']?>:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['Masseges']?>" name="message">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"><?php echo $expr['Old Password']?>:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="" name="pass1">
            </div>
          </div>
        <?php if($Error_flag_PASS2==true){if($Error_array['PASS_2']!=null) echo " <strong><div class='alert alert-danger'><center>". $Error_array['PASS_2']."</center></div><strong>";}elseif(!$check){ echo "<strong><div  class='alert alert-danger'><center>$error</center></div></strong>";}?>
          <div class="form-group">
            <label class="col-md-3 control-label"><?php echo $expr['New Password']?>:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="" name="pass2">
            </div>
          </div>
       <?php if($Error_flag_PASS==true){if($Error_array['PASS']!=null)echo "<strong><div class='alert alert-danger'><center>".$Error_array['PASS']."</center></div></strong>"; }?>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
            <input type="submit" class="btn btn-primary" value="<?php echo $expr['Save Changes']?>" name="sup">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><?php echo $expr['Remove Your Account']?></button>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $expr['This Site ’Blood Bank’ Show !!']?></h4>
                      </div>
                      <div class="modal-body">
                        <p><?php echo $expr['Are You Sure To REMOVE Your Account']?></p>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="sremove"><?php echo $expr['YES']?></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $expr['Close']?></button>
                      </div>
                    </div>

                  </div>
                </div>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                <h5><span>&copy;&nbsp;<?php echo $expr['Developed And Design by IT Team']?></span></h5>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
