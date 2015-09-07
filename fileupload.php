<?php
include_once 'db.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading</label>
</div>
<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="text" name="id" placeholder="Hotel Id" required="required"/>
	<input type="text" name="name" placeholder="Hotel Name" required="required"/>
	<input type="text" name="details" placeholder="Hotel Detail" required="required"/>
	
	<input type="file" name="file" required="required"/>
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
<div id="footer">
<label>By Balram Kumar</label>
</div>
</body>
</html>