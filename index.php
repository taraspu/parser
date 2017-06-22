<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html>
<head>
    <title>W</title>
</head>
<body>

    <h1>Обработка изображений</h1>
    <br><h3>Выберите изображения менее 5Mb</h3>
    <form enctype="multipart/form-data" action="image.php" method="POST">
        <input type="file" name="pic"><br>
        <input type="file" name="pic2"><br>
        <input type="submit" name="submit" value="Загрузить изображения">
        
    </form>
  
</body>
</html>

