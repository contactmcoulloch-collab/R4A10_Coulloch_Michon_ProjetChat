<?php
require '../config/connexion.php';
require '../DAO/DAO_Utilisateur.php';
$room = $_GET['room'];
try {
    $req = $pdo->prepare('SELECT MessageRoom.content as content, MessageRoom.horaire as horaire, Utilisateur.pseudo as pseudo FROM MessageRoom, Utilisateur WHERE MessageRoom.Id_User = Utilisateur.Id_User and MessageRoom.room = :room ORDER BY Id_Message DESC LIMIT 10');
    $req->execute(["room" => $room]);
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
