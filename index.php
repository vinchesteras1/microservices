<?php
include 'config/dbconfig.php';
include 'class/db.php';

$db = new db();
$a = $db->selectWhere('test','id','=',1, 'char');
echo $a[name];
?>
<!doctype>
<html>
    <head><title>Тест</title></head>
    <body>
        <form action="handler.php" method="post">
            <label for="driver">Водитель</label><br>
            <input type="text" name="driver" id="driver">
            <br>
            <label for="latitude">Широта</label><br>
            <input type="text" name="lat" id="latitude">
            <br>
            <label for="longitude">Долгота</label><br>
            <input type="text" name="lng" id="longitude">
            <br>
            <input type="submit">
        </form>
    </body>
</html>
