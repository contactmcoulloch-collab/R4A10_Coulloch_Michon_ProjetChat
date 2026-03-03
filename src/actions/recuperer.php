<?php
$req = $linkpdo->prepare('SELECT * FROM Message ORDER BY Id_Message DESC LIMIT 10');
$req->execute();
$messages = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($messages);
?>