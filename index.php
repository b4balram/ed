<?php
//session_start();

include ('menu.php');
?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Home</title> 
</head>
<body background="images/gallery11.jpg">
   <form id="form1" runat="server">
  
    <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="carousel1" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
          </ol>
          <div class="carousel-inner">
            <div class="item"> <img class="img-responsive" src="images/1.jpg" alt="thumb"/>
              <div class="carousel-caption"></div>
            </div>
            <div class="item active"> <img class="img-responsive" src="images/2.jpg" alt="thumb"/>
              <div class="carousel-caption"> </div>
            </div>
            <div class="item"> <img class="img-responsive" src="images/3.jpg" alt="thumb" />
              <div class="carousel-caption"></div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>

    <hr />
  </div>
    <!-- end of slider-->

       <!-- welcome part-->
       
       <div class="container-fluid col-md-9">
           <div class="row">
               <div style="background-color:#4CAF50; margin-left:15px" class="well well-lg">
                   <h2 class="text"><strong>Welcom to ItsDineTime</strong></h2><hr />
         <section class="text-justify"> 
		 Its Dine Time is an online medium to its customer to enjoy their dine time by their own choice. There are so many offers available every time
		 whenever you visit the site you'll definetly get some exicited offers. Every booking through ItsDineTime comes with a special deal which could be one of the following:
<ul>
<li>A complimentary glass of wine or beer.</li>
<li>A complimentary appetiser or a main course or a dessert.</li>
<li>A discount on your meal.</li>
<li>Loyalty points with every booking to redeem for dining vouchers.</li>
<li>Lots of surprise dining invitations for regular users!</li>
    </ul> 
So come and enjoy ur Dine Time...

 </section><br />
<a href="#"class="btn btn-info" role="button">More!</a>                
            </div><!-- end of well-->

                <div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Lapda Ltd.</h4>
							 <a href="#"><img src="images/rest/rest22.jpg"  alt="" /></a>
                            <p class="text">The Lapda Ltd. is one of the finest place for dine in Delhi?NCR region.
							Click on Book button to book a seat.</p>             
                            <p><a href="lapdaltd.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div><!-- /.col -->

                <div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Pritam Inn</h4>
                           <a href="#"><img class="img-responsive" src="images/rest/rest44.jpg"  alt="" /></a>
                            <p class="text">Pritam Inn is one of the finest place for dine in Delhi?NCR region.
							Click on Book button to book a seat.
							</p>             
                            <p><a href="pritam.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div>
                    <!-- /.col -->

           <div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Hotel Pranjal</h4>
                           <a href="#"><img class="img-responsive" src="images/rest/rest66.jpg"  alt="" /></a>
                            <p class="text">Hotel Pranjal is one of the finest place for dine in Delhi?NCR region.
							Click on Book button to book a seat.
							</p>             
                            <p><a href="pranjal.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div>
                    <!-- /.col -->
           <div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Orient Hotel</h4>
                           <a href="#"><img class="img-responsive" src="images/rest/rest77.jpg"  alt="" /></a>
                            <p class="text">The Orient Hotel is one of the finest place for dine in Delhi?NCR region.
							Click on Book button to book a seat.
							</p>             
                            <p><a href="orient.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div>
                    <!-- /.col --><!-- end of 4  multiple columns-->

           </div><!-- end of row welcome wala--> 
       </div><!-- end of container welcome wala-->

       <div class="container-fluid col-md-3">
               <div class="well well-lg">
             <h2 class="text"><strong>Latest Dine Offers..</strong></h2><hr />
           <ul class="text">
               <li><a href="#">Welcome Wine</a></li>
              <li><a href="#">Mood Fresh Room</a></li>
              <li><a href="#">Free Cocktail or Mocktail</a></li>
               <li><a href="#">Buy 1 Get 1 free</a></li>
               <li><a href="#">1+1 Offer</a></li>
               <li><a href="#">10% Discount</a></li> 
               <li><a href="#">15% Discount</a></li>
               <li><a href="#">20% Discount</a></li>
               <li><a href="#">25% Discount</a></li> 
               <li><a href="#">Free Desert</a></li>
              </ul>
                        </div><!-- end of row latest upadates--> 
       </div><!-- end of container latest updates-->
     
 <!--footer-->
<?php
include 'footer.php';
?>
 <!--Footer end -->


       </form>
</body>
</html>
