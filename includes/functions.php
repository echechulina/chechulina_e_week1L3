<?php
include("connect.php");

$query = "SELECT * FROM profs";

$runQuery = $pdo->query($query);

$result = array();

while($row = $runQuery->fetch(PDO::FETCH_ASSOC)) {
    $result[] = $row;
}

// return $result;
echo(json_encode($result));