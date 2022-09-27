<?php
include_once('config.php');
$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $conexap->query($sql);

print_r($result);

?>