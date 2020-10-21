<?php include 'lang.php';
$host="localhost";
$user="db_blood";
$password="blood@bank";
$dbName="blood bank";
$con=mysqli_connect($host,$user,$password,$dbName);
$query="SELECT DISTINCT * FROM sign_up";
$result=mysqli_query($con,$query);
$num=1;
if(isset($_GET["ID"]) && isset($_GET["control"])){
$ID = $_GET["ID"];
if($_GET["control"]=="remove"){
$query="DELETE FROM sign_up WHERE ID='{$ID}'";
$result3=mysqli_query($con,$query);
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $expr['List Of People With Accounts On The Site']?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="refresh" content="2;url=PA.php" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssf.php?filename=css/main.css">
    <link rel="stylesheet" href="cssf.php?filename=css/skin.css">
    <script src="./script/jquery.min.js"></script>
    <script src="./script/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <link rel="icon" href="img/blood_logo.jpg">
</head>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});    
</script>
<body id="wrapper">
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fas fa-sign-out-alt"></i><a href="Logout2.php"><?php echo $expr['Log Out!']?></a></li>
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
        <div><center><a href="Afterlogin2.php"><button type="button" class="btn btn-primary slide"><?php echo $expr['Return']?> &nbsp; <i class="fa fa-caret-right"></i> </button></a></center></div>
        </div>
<div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4><span><?php echo $expr['Login']?></span></h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;"><?php echo $expr['Profile Admin']?><span class="sep"> / </span><span class="current"><?php echo $expr['List Of People With Accounts On The Site']?></span></div>
                </div>
            </div>
        </div>
</section>
<div class="container">
  <h2><?php echo $expr['List Of People With Accounts On The Site']?></h2>
  <p><?php echo $expr['Search For Any Blood Type Or City Of Doners Or Email Of Donors']?></p>  
  <input class="form-control" id="myInput" type="text" placeholder="<?php echo $expr['Search']?>">
  <br>
    <div class="table">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>#</th>
<th><?php echo $expr['Name']?></th>
<th><?php echo $expr['Email']?></th>
<th><?php echo $expr['Password']?></th>
<th><?php echo $expr['Number Phone']?></th> 
<th><?php echo $expr['Gender']?></th>
<th><?php echo $expr['Birthday']?></th>
<th><?php echo $expr['Message']?></th>
<th><?php echo $expr['Controls']?></th>
      </tr>
</thead>
    <tbody id="myTable">
<?php 
if($result){
while($row=mysqli_fetch_assoc($result)){
echo"<tr><td>".$num++."</td><td>".$row['FullName']."</td><td>".$row['Email']."</td><td>".$row['PassWord']."</td><td>".$row['NumberPhone']."</td><td>".$row['Gender']."</td><td>".$row['Age']."</td><td>".$row['Masseges']."</td><td>&nbsp;<a href='PA.php?ID={$row['ID']}&control=remove' class='btn btn-warning'>{$expr['Remove']}</a>"."</td></tr>";
}  
//echo "</table>";
}
?>
    </tbody>
  </table>
        </div>
    <br><br>
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
