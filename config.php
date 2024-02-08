<?php

$db = new PDO('mysql:host=localhost;dbname=', '', '' );

$sql = "SELECT * FROM products";
$result = $db->query($sql);


