<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php echo validation_errors(); ?>
  <form action="<?php echo base_url('index.php/quiz/validate') ?>" method="post" enctype="multipart/form-data" >
  USER : <input type="text" name="user"><br>
  Email: <input type="text" name="email"><br>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
