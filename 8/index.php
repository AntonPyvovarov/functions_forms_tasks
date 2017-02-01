<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<?php if (isset($_POST['theme'])){?>
<p> <?php echo showText() ?> </p><?php }   ?>
<div>
    <form action="" method="post">
    <input name="theme" type="text">
    <input  name="submit" type="submit">
</form>
</div>
</body>
</html>