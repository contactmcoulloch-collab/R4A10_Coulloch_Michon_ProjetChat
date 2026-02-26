<?php

$req = $linkpdo->prepare('INSERT INTO MESSAGE (Id_User,content,horaire) VALUES (:iduser,:content,:horaire)');
$req->execute(['iduser' => $idUser,
"content" => $content,
"horaire" => date("Y-m-d H:i:s")]);

?>