<?php
require '../config/connexion.php';
require '../DAO/DAO_Utilisateur.php';
$req = $pdo->prepare('SELECT Message.content as content, Message.horaire as horaire, Utilisateur.pseudo as pseudo FROM Message,Utilisateur Where Message.Id_User = Utilisateur.Id_User ORDER BY Id_Message DESC LIMIT 10');
$req->execute();
$messages = $req->fetchAll(PDO::FETCH_ASSOC);
// for   ($i = 0; $i < 10; $i++) {
// //echo "<tr>".$messages[$i]['content']."<br> de".findById($pdo,$messages[$i]['Id_User'])['pseudo'].", il y a".$messages[$i]['horaire']."</tr>";
//     echo "<div class ='mail'> 
//     <div class = content>".$messages[$i]['content']."
//     </div>
//     <div class = 'infoenvoie'>".
//     findById($pdo,$messages[$i]['Id_User'])['pseudo']." | ".$messages[$i]['horaire'].
//     "</div>
//     </div>";
//   }
echo json_encode($messages);
?>