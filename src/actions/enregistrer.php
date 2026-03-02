<?php
require '../config/connexion.php';
require '../DAO/DAO_Utilisateur.php';
var_dump($_POST);
$pseudo = $_POST["pseudo"];
$User = findByPseudo($pdo,$pseudo);
if($User == null){
    createUser($pdo,$pseudo);
    $User = findByPseudo($pdo,$pseudo);
}
$idUser = $User["Id_User"];
$req = $pdo->prepare('INSERT INTO Message (Id_User,content,horaire) VALUES (:iduser,:content,:horaire)');
$req->execute(['iduser' => $idUser,
"content" => $_POST["message"],
"horaire" => date("Y-m-d H:i:s")]);

?>