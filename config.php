<?php

$db = new PDO('mysql:host=lacalhost;dbname=online_store', '', '' );

$sql = "SELECT * FROM products";
$result = $db->query($sql);


