<?php
session_start();
?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Home</title>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/home.css" />
    
</head>
<body background="images/gallery11.jpg">
   <form id="form1" runat="server">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">ItsDineTime</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="#"><a href="index.php">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dine At <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="orient.php">Orient Hotel</a></li>
            <li><a href="lapdaltd.php">Lapda Ltd.</a></li>
            <li><a href="pritam.php">Pritam Inn.</a></li>
            <li><a href="pranjal.php">Hotel Pranjal</a></li>
            
          </ul>
        </li>
		<li><a href="hotel.php">Hotels</a></li>
        <li><a href="contact.php">CONTACT US!</a></li>       
      </ul>
                  <div class="nav navbar-form navbar-left" role="search">
                      <div class="form-group">
              <input type="text" class="form-control" placeholder="Search the site.." />
              <button type="submit" class="btn btn-default">Search</button>
          </div>
                  </div>
<?php
if(!isset($_SESSION["user_id"])){
?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       </ul>
	  <?php
}?>
<?php
if(isset($_SESSION["user_id"])){
?>

 <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION["user_name"] ?></a></li>
        <li><a href="exit.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      </ul>
	 <?php
}
?>
    </div>
  </div>
</nav>
       <!-- end of navbar -->
	   
	   
       </form>
</body>
</html>