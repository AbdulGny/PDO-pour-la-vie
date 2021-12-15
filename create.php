<?php
require_once '_connect.php';
require_once 'index.php';
$pdo= new \PDO(DSN,USER,PASS);
$query ="SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_OBJ);
$statement = $pdo->exec($query);
$query ="INSERT INTO friend (firstname,lastname) VALUES ('$_POST[firstname]','$_POST[lastname]')";
$statement = $pdo->exec($query);
foreach($friends as $friend) {
    echo "<ul><li>$friend->firstname $friend->lastname</li></ul>";

}