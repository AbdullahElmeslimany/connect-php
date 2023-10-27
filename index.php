
<?php
include "connect.php";

$stml = $con -> prepare("SELECT * FROM user");
$stml -> execute();
$user = $stml->fetchAll(PDO:: FETCH_ASSOC);
echo "<pre>";
// print_r($user);
echo json_encode($user);