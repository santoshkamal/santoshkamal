<?php
session_start();
?>
<html>
 <head>
 <title> SURANA COLLEGE </title>
 </head>
 <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
 <link rel="stylesheet" type = "text/css" href ="css/index.css">
 <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
 <body>
 <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" datatarget="#myNavbar">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="index.php">SURANA COLLEGE</a>
 <a class="navbar-brand" href="index.php">south end circle bangalore</a>
 </div>
 <div class="collapse navbar-collapse " id="myNavbar">
 <ul class="nav navbar-nav">
 <li class="active" ><a href="index.php">Home</a></li>
 <li><a href="aboutus.php">About</a></li>
 </ul>
<?php
if(isset($_SESSION['login_user1'])){
?>
<ul class="nav navbar-nav navbar-right">
 <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php 
echo $_SESSION['login_user1']; ?> </a></li>
 <li><a href="surana.php">MANAGER CONTROL PANEL</a></li>
 <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> 
Log Out </a></li>
 </ul>
<?php
}
else if (isset($_SESSION['login_user2']))
 {
 ?>
 <ul class="nav navbar-nav navbar-right">
 <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php 
echo $_SESSION['login_user2']; ?> </a></li>
 <li><a href="surana.php"><span class="glyphicon glyphicon-cutlery"></span> 
Food Zone </a></li>
 <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> 
Cart
 (<?php
 if(isset($_SESSION["cart"])){
 $count = count($_SESSION["cart"]); 
 echo "$count"; 
 }
 else
 echo "0";
 ?>)
 </a></li>
 <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> 
Log Out </a></li>
 </ul>
 <?php 
}
else {
 ?>
<ul class="nav navbar-nav navbar-right">
<li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" 
role="button" aria-haspopup="true" aria-expanded="false"> Sign Up <span 
class="caret"></span> </a>
 <ul class="dropdown-menu">
 <li> <a href="STAFFSSINGNUP.php"> STAFFS SIGN-UP</a></li>
 <li> <a href="STUDENTSSIGNUP.php"> STUDENTS SIGN-UP</a></li>
 
 </ul>
 </li>
 <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" 
role="button" aria-haspopup="true" aria-expanded="false"> Login <span 
class="caret"></span></a>
 <ul class="dropdownmenu">
 <li> <a href="staffslogin.php"> staffslogin</a></li>
 <li> <a href="STUDENTLOGIN.php"> STUDENTLOGIN</a></li>
 <li> <a href="PARENTSfeedback.php">PARENTSfeedback</a></li>
 <html>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
 
 </ul>
 </li>
 </ul>
<?php
}
?>
 </div>
 </div>
 </nav>
 <div class="wide">
 <div class="col-xs-5 line"><hr></div>
 <div class="col-xs-2 logo"><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.travlinmad.com%2Fblog%2Ftraditional-food-around-the-world&psig=AOvVaw1ipTOFxfaWgWMhLY04A4wV&ust=1637510843994000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPjGrbSpp_QCFQAAAAAdAAAAABAD.jpg/"></div>
 <div class="col-xs-5 line"><hr></div>
 <div class="tagline" style="color:RED">yr2020-21</div>
 <div class="tagline" style="color:red">SURANA EDUCATIONAL INSTUTATION</div>
 </div>
 <br>
 
</body>
</html>
