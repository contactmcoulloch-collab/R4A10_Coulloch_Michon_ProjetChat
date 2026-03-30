<?php
require '../config/connexion.php';
require '../DAO/DAO_Utilisateur.php';
var_dump($_POST);
$pseudo = $_POST["pseudo"];
$room = $_POST["noroommsg"];
$User = findByPseudo($pdo,$pseudo);
if($User == null){
    createUser($pdo,$pseudo);
    $User = findByPseudo($pdo,$pseudo);
}
$idUser = $User["Id_User"];
$req = $pdo->prepare('INSERT INTO MessageRoom (Id_User,content,horaire,room) VALUES (:iduser,:content,:horaire,:room)');
$req->execute(['iduser' => $idUser,
"content" => $_POST["message"],
"horaire" => date("Y-m-d H:i:s"),
"room" => $room]);

?>