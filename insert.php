<?php
include 'db.php';
if(count($_POST)>0) {
	/*
$conn = mysql_connect("localhost","root","");
mysql_select_db("vipsnew",$conn);*/
$result = mysql_query("SELECT * FROM user WHERE email='" . $_POST["email"] . "' ");
$row  = mysql_fetch_array($result);
//echo $_SESSION["user_id"];

if(is_array($row)) {
$_SESSION["id"] = $row['email'];
//echo $_SESSION["id"];
	if(isset($_SESSION["id"]))
{
echo '<script language="javascript"> alert("Already Registered"); window.location.replace("index.php"); </script>';

}
} else {
/*$page = $_SERVER['PHP_SELF'];
if($page=="/vips/insert.php")
*/
$userid="root";
$passwrd="" ;
$server= "localhost";
$dbase="hotel";
$con=mysqli_connect($server,$userid,$passwrd,$dbase) or die ('I cannot connect to the database because: ' . mysql_error());

//$con=mysqli_connect("example.com","peter","abc123","my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$name = mysqli_real_escape_string($con, $_POST['uname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$pwd = mysqli_real_escape_string($con, $_POST['pwd']);

$phone = mysqli_real_escape_string($con, $_POST['phone']);

$sql="INSERT INTO user (user_name, email, pwd, phone)
VALUES ('$name', '$email', '$pwd', '$phone')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

echo '<script language="javascript"> alert("Registration Successfull"); window.location.replace("index.php"); </script>';
//header('Location:login.php');

mysqli_close($con);


//header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for Registering '
	);

    $name = @trim(stripslashes($_POST['uname'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = 'Welcome to ItsDineTime'; 
    $message = 'Dear User Feel free to contact us '.'<br/>'.' Your User Id:'. $_POST['email'].'<br/>'.'Password:'.$_POST['pwd']; 
//echo $name.$email.$subject.$message;
    $email_from = 'b4balram143@gmail.com' ;
    $email_to = $email;//

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    //echo json_encode($status);
    //die;


}


}?>
