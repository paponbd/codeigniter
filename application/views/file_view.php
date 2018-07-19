<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo base_url(); ?>upload_controller/do_uploads" method= "post" enctype="multipart/form-data">
		<input type="file" name="userfile">
		<button type="submit">submit</button>
	</form>
</body>
</html>