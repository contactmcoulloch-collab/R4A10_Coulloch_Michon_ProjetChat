<?php
require '../config/connexion.php';
require '../DAO/DAO_Utilisateur.php';

try {
    $req = $pdo->prepare('SELECT Message.content as content, Message.horaire as horaire, Utilisateur.pseudo as pseudo FROM Message, Utilisateur WHERE Message.Id_User = Utilisateur.Id_User ORDER BY Id_Message DESC LIMIT 10');
    $req->execute();
    $messages = $req->fetchAll(PDO::FETCH_ASSOC);
    
    // Debug output
    if (!empty($messages)) {
        echo json_encode($messages);
    } else {
        echo json_encode(["error" => "No messages found."]);
    }
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
