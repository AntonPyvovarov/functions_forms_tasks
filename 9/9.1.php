 <?php include ('9.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body><?php if(isset($_POST['text'])){?>
<p> <?php echo reverceWord() ?></p><?php }?>
<form action="" method="post">
    <input name="text" type="text" value="text">
    <input type="submit" value="submit">
</form>
</body>
</html>