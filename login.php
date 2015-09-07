<?php
include 'menu.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>LogIn</title>
  </head>
  
<body background="images/gallery11.jpg">
    <form id="form1" runat="server">
   
                  
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <asp:Label ID="Label1" runat="server" Text="Label"></asp:Label>
               </div>
                        
                <div class="#">
                     <div style="background-color:#B2DFDB" class="well well-md" hidden="hidden">
                         <h2>LogIn Here!!</h2><hr />
                    <div class="form-group">
					<form method="post" action="login.php">
                    <input type="email_id" ID="email_id" Class="form-control"   placeholder="Email Address" required="required"/><br />
                    <input type="password" ID="password" class="form-control"  placeholder="Password" required="required"/><br />
                    <center> <input type="submit" ID="submit"  Text="Submit Information" Class="btn btn-primary" value="LogIn"  /></center>
                       </form>                               
                     <a href="register.php">If not register yet, feel free to register here !!</a>
					 </div> <!--end of form group-->
                         </div>
                           </div><!--end of col-md-4-->
						   
						   
						   
						   <?php
						   			//session_destroy();
//session_start();
include 'db.php';

$message="";
if(count($_POST)>0) {
	
	
//$conn = mysql_connect("localhost","vipscsi","vipscsi");
//mysql_select_db("ennroute",$conn);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //echo '<script language="javascript"> alert("Already Registered") </script>';
}
$result = mysql_query("SELECT * FROM user WHERE email='" . $_POST["email"] . "' and pwd = '". $_POST["pwd"]."'");
$row  = mysql_fetch_array($result);
//echo $row[name];
//echo $row[designation];
if(is_array($row)) {
$_SESSION["user_name"] = $row['user_name'];
	
$_SESSION["user_id"] = $row['email'];
//$_SESSION["user_name"] = $row[''];
//$_SESSION["email"] = $row['uemail'];

//$_COOKIE["user_id"]=$row['name'];


} else {
if($_POST["email"]=='ria') {
	//if($_POST["designation"]=="admin")
$_SESSION["user"] = $_POST['email'];
//$_SESSION["user_name"] = $row['designation'];
	
header("Location:maintain1.php");
}
else
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
//echo '<script language="javascript"> window.location="userdetail.php"; </script>';
//echo '<script language="javascript"> alert("Login Successfull"); </script>';
//header("Location:index.php");
echo '<script language="javascript"> window.location="index.php"; </script>';
}

	?>
                     
						   
						   
						   
						   <div class="col-md-4">
                
						   <div style="background-color:#B2DFDB" class="well well-md">
						    <h2>LogIn Here !!</h2><hr />
                    
					<form id="frmregister" method="post" action="login.php">
					<?php  echo $message; ?>
                    <input type="email_id" id="email_id" name="email" Class="form-control"  placeholder="Email Address" required="required"/><br />
                    <input type="password" id="password"  name="pwd" class="form-control"  placeholder="Password" required="required"/><br />
                 	<center> <input type="submit" id="submit2" value="SignIn" Class="btn btn-primary"  />
					</center>
                       </form>                               
                    	   
						   
						   </div>
						   </div>
                     
						   
						   
                <div class="col-md-4">
                    <asp:Label ID="Label2" runat="server" Text="Label"></asp:Label>
               </div>
                     </div><!--end of row-->
                     </div><!--end of container-->


       <!--footer-->
	   <?php
	   include 'footer.php';
	   ?>
    <!--Footer end -->
    </form>
</body>
</html>
