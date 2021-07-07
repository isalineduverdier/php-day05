<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
if (isset($_POST["name"])){
    echo "Hello " . $_POST["name"];
}
else {
    ?>
<form action="index.php" method="post">
  <input type="text" name="name" />
  <input type="submit" value="Envoyer"/>
</form>
<?php
}
?>
</body>
</html>