<?php

function createUser($linkpdo,$pseudo){
    $lreq = "INSERT INTO Utilisateur (pseudo) VALUES(:pseudo)";
    $req = $linkpdo->prepare($lreq);
    $req->execute(['pseudo' => $pseudo]);
}
function findByPseudo(PDO $linkpdo, $pseudo){
    $lreq = "SELECT * FROM Utilisateur where pseudo = :pseudo";
    $req = $linkpdo->prepare($lreq);
    $req->execute(['pseudo' => $pseudo]);
    $user = $req->fetch(PDO::FETCH_ASSOC);
    return $user;
}

?>