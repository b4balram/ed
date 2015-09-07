<?php
include 'menu.php';
?>

 <!-- welcome part-->
       <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM hotels";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {?>
	  <div class="col-sm-3 text-center">
                        <div class="well well-md">
                <img width="180" height="80" src="uploads/<?php echo $row['file'] ?>" alt="">             
	 <?php
	 
         echo "<br> id: ". $row["id"]. "<br/> Name: ". $row["name"]. " <br/> " ."". $row["details"] . "<br>";
		 
		 ?>
		       <p><a href="<?php echo $row["id"]; ?>.php" class="btn btn-success" role="button">Book</a></p>
                      </div></div>
		 <?php
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

	   
       <div class="container-fluid col-md-9">
           <div class="row">
				 <!--div class="col-sm-3 text-center">
                        <div class="well well-md">
						
                            <h4 class="text" style="color:'white'"> <?php echo $row[2] ?>Lapda Ltd.</h4>
							 <a href="#"><img src="images/rest/rest22.jpg"  alt="" /></a>
                            <p><a href="lapdaltd.php" class="btn btn-success" role="button">Book</a></p>
                        
						</div>
                    </div><!-- /.col -->

                <!--div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Pritam Inn</h4>
                           <a href="#"><img class="img-responsive" src="images/rest/rest44.jpg"  alt="" /></a>
                            <p><a href="pritam.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div>
                    <!-- /.col -->

           <!--div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Hotel Pranjal</h4>
                           <a href="#"><img class="img-responsive" src="images/rest/rest66.jpg"  alt="" /></a>
                            <p><a href="pranjal.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div>
                    <!-- /.col -->
           <!--div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Orient Hotel</h4>
                           <a href="#"><img class="img-responsive" src="images/rest/rest77.jpg"  alt="" /></a>
                            <p><a href="orient.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div>
                <div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Pritam Inn</h4>
                           <a href="#"><img class="img-responsive" src="images/rest/rest44.jpg"  alt="" /></a>
                            <p><a href="pritam.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div>
                    <!-- /.col -->

           <!--div class="col-sm-3 text-center">
                        <div class="well well-md">
                            <h4 class="text">Hotel Pranjal</h4>
                           <a href="#"><img class="img-responsive" src="images/rest/rest66.jpg"  alt="" /></a>
                            <p><a href="pranjal.php" class="btn btn-success" role="button">Book</a></p>
                        </div>
                    </div>
                    <!-- /.col -->
               	
            <!-- end of well-->

</div>
</div>



<?php
include 'footer.php';
?>