<?php
include 'menu.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Lapda Ltd.</title>
   
</head>
<body background="images/gallery11.jpg">
   <form id="form1" runat="server">
   
   
       <!-- welcome part-->
       
       <div class="container-fluid col-md-9">
           <div class="row">
               <div style="background-color:#4CAF50; margin-left:15px" class="well well-lg">
                   <h2 class="text"><strong>Welcom to Lapda Ltd.</strong></h2><hr />
				   
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
            <div class="item"> <img class="img-responsive" src="images/21.jpg" alt="thumb"/>
              <div class="carousel-caption"></div>
            </div>
            <div class="item active"> <img class="img-responsive" src="images/31.jpg" alt="thumb"/>
              <div class="carousel-caption"> </div>
            </div>
            <div class="item"> <img class="img-responsive" src="images/41.jpg" alt="thumb" />
              <div class="carousel-caption"></div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>

    <hr />
  </div>

					
					
         <section class="text-justify"> The Lapda Ltd is one the finest and reasonable place for dine in Delhi/NCR region. Well comfortable and hygienic place. 
		 Chef Rahul will cook for you so come and enjoy the hospitality and relax.
 </section><br />
<a href="#"class="btn btn-info" role="button">More!</a>                
            </div>
			<!-- end of welcome-->

           </div><!-- end of row welcome wala--> 
       </div><!-- end of container welcome wala-->
<!--Details -->
       <div class="container-fluid col-md-3">
               <div class="well well-lg">
             <h2 class="text"><strong>Details</strong></h2><hr />
           <ul class="text">
<li>The Lapda Ltd, 77, Friends Colony West, New Delhi</li>
<li>Ph: 786 100 4444 </li>
<li>12.00 noon - 02.30 pm<br/>
07.00 pm - 10.30 pm<br/>
Weekend timings may differ </li>
<li>For two : Rs 5000
</li> 
<?php
//session_start();
if(isset($_SESSION["user_id"]))
{?>
<p><a href="#" class="btn btn-success" role="button">Book</a></p>  
<?php
}
else
{
	?>

<p><a href="login.php" class="btn btn-success" role="button">Book</a></p>  
<?php	
}
?>


        
		   </ul>
                        </div><!-- end of row latest Detailss--> 
       </div><!-- end of container latest updates-->
     
 <!--footer-->
 <?php
 include 'footer.php';
 ?><!--Footer end -->


       </form>
</body>
</html>
