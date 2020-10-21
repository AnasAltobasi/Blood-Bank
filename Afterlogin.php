<?php include 'lang.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['Profile']?></title>
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
                        <li><i class="fas fa-sign-out-alt"></i><a href="Logout.php"><?php echo $expr['Log Out!']?></a></li>
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
    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2><?php echo $expr['Welcome']?>&nbsp;<?php echo $_SESSION['Name'];?></h2>
                <br>
                <h2><?php echo $expr['Have a nice day']?></h2>
            </div>
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
<section id="features-page">
        <div class="subsection1">
            <div class="container">
                <div class="col sm_12">
                    <div class="col-sm-4 wpb_column block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox iconbox-style icon-color card clearfix">
                                    <div class="face front">
                                        
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fas fa-user-edit boxicon"></i>
                                                        <h3><?php echo $expr['Edit Profile']?></h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3><?php echo $expr['Edit Profile']?></h3>
                                                        <p><?php echo $expr['You can modify and control your profile quickly and smoothly, for example: change your name, phone number, etc.']?></p>
                                                        <a href="Edit.php">-><?php echo $expr['Edit']?><-</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wpb_colum block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox  iconbox-style icon-color card clearfix">
                                    <div class="iconbox-box1 face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fas fa-table boxicon"></i>
                                                        <h3><?php echo $expr['Register To Donate']?></h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3><?php echo $expr['Register To Donate']?></h3>
                                                        <p><?php echo $expr['Fill out the information in the donation form now to be on the list of donors and be active for the good.']?></p>
                                                        <a href="FormDoner.php">-><?php echo $expr['Register']?><-</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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