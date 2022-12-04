<?php

$dbh = new PDO('mysql:host=localhost;dbname=wpu_blog','root','');
$db = $dbh->prepare('SELECT * FROM users');
$db->execute();
$user = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($user);
echo $data;