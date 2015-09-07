<?php
include 'menu.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Contact Us</title>
      </head>
<body background="images/gallery11.jpg">
    <form id="form1" runat="server">
   
               
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <asp:Label ID="Label1" runat="server" Text="Label"></asp:Label>
               </div>
                        
                <div class="col-md-4">
                     <div style="background-color:#B2DFDB" class="well well-md">
                         <h2>Contact Us</h2><hr />
						 <p>Its Dine Time<br>321 Nirmal Colony<br>East Delhi<br>110092</p>
						 <p>Contact: +91 11 26542387</p>
						 <div class="map">
						 <iframe width="320" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=d&amp;source=s_d&amp;saddr=28.718187399999998,77.1432872&amp;daddr=&amp;geocode=&amp;aq=&amp;sll=28.718187399999998,77.1432872&amp;sspn=0.001233,0.002626&amp;hl=en&amp;mra=mift&amp;mrsp=0&amp;sz=19&amp;ie=UTF8&amp;ll=28.718187399999998,77.1432872&amp;spn=0.001233,0.002626&amp;t=m&amp;output=embed">
						 </iframe><br />
                      </div>
                     </div> <!--end of form group-->
                         </div>
                           </div><!--end of col-md-4-->
                     
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
