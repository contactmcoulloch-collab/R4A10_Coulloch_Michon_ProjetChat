<?php

$req = $linkpdo->prepare('SELECT * FROM Message where Id_User = :id ORDER BY Id_Message DESC LIMIT 10');
$req->execute(['id' => $idUser]);
$messages = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($messages);
?>