<?php
$v = $_POST["vārds"];
$u = $_POST["uzvārds"];
$l = $_POST["login"];
$p = md5($_POST["password"]);

include('cfg.php');
$result = $mysqli->query("INSERT INTO `users`(`id`, `name`, `sname`, `login`, `password`) VALUES (null,'$v','$u','$l','$p')");

?>