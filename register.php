
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Register</title>
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
      <a class="navbar-brand" href="#">ItsDineTime</a>
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
         <li><a href="contact.php">CONTACT US!</a></li>       
      </ul>
                  <div class="nav navbar-form navbar-left" role="search">
                      <div class="form-group">
              <input type="text" class="form-control" placeholder="Search the site.." />
              <button type="submit" class="btn btn-default">Search</button>
          </div>
                  </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
    </div>
  </div>
</nav>
       <!-- end of navbar -->

   
            
         <div class="container">
            <div class="row">
                     
                <div class="col-md-4">
                    <asp:Label ID="Label2" runat="server" Text="Label"></asp:Label>
               </div>
                        
                <div class="#">
                     <div style="background-color:#B2DFDB" class="well well-md" hidden="hidden">
                         <h2>Register Here for free!!</h2><hr />
                    <div class="form-group" hidden="hidden">
					
					<form id="frmregister" method="post" action="insert.php">
                    <input type="text" id="username" name="uname" class="form-control"   placeholder="Username" required="required" /><br />
                    <input type="email_id" id="email_id" name="email" Class="form-control"  placeholder="Email Address" required="required"/><br />
                    <input type="password" id="password"  name="pwd" class="form-control"  placeholder="Password" required="required"/><br />
                    <input type="password" id="cpassword" name="cpwd" class="form-control"  placeholder="Confirm Password" required="required"/><br />
                    <input type="number_format" id="contact" class="form-control" placeholder="contact no" required="required"/><br/>
					<center> <input type="submit" id="submit2" value="SignUp" Class="btn btn-primary"  />
					</center>
                       </form>                               
                     </div> <!--end of form group-->
                         </div>
                           </div><!--end of col-md-4-->
						   
						   <div class="col-md-4">
                
						   <div style="background-color:#B2DFDB" class="well well-md">
						    <h2>Register Here for free!!</h2><hr />
                    
					<form id="frmregister" method="post" action="insert.php">
					<input type="text" id="username" name="uname" class="form-control"   placeholder="Username" required="required" /><br />
                    <input type="email_id" id="email_id" name="email" Class="form-control"  placeholder="Email Address" required="required"/><br />
                    <input type="password" id="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers"  name="pwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" onchange="form.cpwd.pattern = this.value;"  placeholder="Password" required="required"/><br />
                    <input type="password" id="cpassword" title="Please enter the same Password as above" name="cpwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  class="form-control"  placeholder="Confirm Password" required="required"/><br />
                    <input type="number_format" id="contact" name="phone" class="form-control" placeholder="contact no" required="required"/><br/>
					<center> <input type="submit" id="submit2" value="SignUp" Class="btn btn-primary"  />
					</center>
                       </form>                               
                    	   
						   
						   </div>
						   </div>
                     
                <div class="col-md-4">
                    <asp:Label ID="Label2" runat="server" Text="Label"></asp:Label>
               </div>
                     </div><!--end of row-->
                     </div><!--end of container-->


        
         <div style="background-color:#B6B6B6" class="col-md-12 footer-box">
        <div class="row">
            <div class="col-md-4">
                <strong>Send a Quick Query </strong>
                <hr />
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-md-4">
                <strong>Website Team</strong>
                <hr />
                <center><img src="images/team.jpg" class=" img-responsive" alt="" height="150px" width="200px" /></center>
                    <br />
                        <center><button type="submit" class="btn btn-primary">View Details</button></center>
            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr />
                <div class="row">
              <div class="col-sm-2">
                   <a href="#"><img src="images/facebook.png" /></a>
             </div>
                    <div class="col-sm-2">
                   <a href="#"><img src="images/googleplus.png" /></a>
             </div>
                    <div class="col-sm-2">
                   <a href="#"><img src="images/twitter.png" /></a>
             </div>

                </div>
                <p> Connect with us via these social networking pages.
                    </p>
            </div>
        </div>
        <hr />
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2015 | &nbsp; All Rights Reserved | &nbsp; www.mywebsite.com | &nbsp; 24x7 support | &nbsp; Email us: mywebsite.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
    </form>
</body>
</html>
