<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
</head>
<body>
  <form action="<?php echo base_url('index.php/recivefrom/recvied') ?>" method="post" enctype="multipart/form-data" >

  excel upload:<input type="file" name="file"><br>
  <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
