<?php
mb_internal_encoding("UTF-8");

$pdo=new PDO("mysql:dbname=lessonkuriki02;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)values('".$_POST['HA_name']."','".$_POST['HA_title']."','".$_POST['HA_comments']."');");

header("Location:http://localhost/kuriki_keijiban/kakuninn.php");
?>