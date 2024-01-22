<?php

$db = new PDO('mysql:host=lacalhost;dbname=online_store', 'root', '' );

$sql = "SELECT * FROM products";
$result = $db->query($sql);


