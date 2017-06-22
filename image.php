<?php
// include composer autoload
require 'vendor/autoload.php';
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;
//проверяем была ли использована форма
if (isset($_POST['submit'])) {
//проверка размера загруженного файла
    if ($_FILES['pic']['size'] > 5000000 || $_FILES['pic2']['size'] > 5000000) {
        echo "Выберите изображения менее 5Mb";
        die;
    }
//в этх переменных содержиться путь сохранения загружаемых файлов с сохранением
//их первоначальных названий
//$uploadFile pic1
    $uploadFile = __DIR__ . '/images/' . $_FILES['pic']['name'];
//$uploadFile2 pic2
    $uploadFile2 = __DIR__ . '/images/' . $_FILES['pic2']['name'];

//проверяем были ли загружены изображения
    if (!empty($_FILES['pic']['tmp_name']) && !empty($_FILES['pic2']['tmp_name'])) {
        //функция проверяет был ли загружен файл методом POST, в слуае истины 
        //копирует из папки tmp в ту которую нам нужно
        move_uploaded_file($_FILES['pic']['tmp_name'], $uploadFile);
        move_uploaded_file($_FILES['pic2']['tmp_name'], $uploadFile2);
        //создаем объект класса imagemanager 
        $manager = new ImageManager(array('driver' => 'imagick'));
        //меняем разрешение второго изображения из формы 
        $watermark = $manager->make($uploadFile2)->resize(320, 240);
        //меняем разрешение первого изображения из формы, затем делаем размытие,
        //затем накладываем 2-е изображение, сохраняем с новым именем результат
        $image = $manager->make($uploadFile)->resize(1024, 768)->blur(9)->insert($watermark, 'center')->save('images/result.jpg');
        $i = 1;
    } else
        echo 'Выберите изображения';
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>W</title>
</head>
<body>

    
    <?php if(isset($i)){
        echo '<h1>Выводим результат обработки изображений</h1>';
        echo '<br>';
        echo '<img src="/images/result.jpg">';} ?>

  
</body>
</html>
