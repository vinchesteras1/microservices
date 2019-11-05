<?php
include 'config/dbconfig.php';
include 'class/db.php';

$db = new db();
$a = $db->selectWhere('test','id','=',1, 'char');
echo $a[name];
