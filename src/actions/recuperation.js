function getXhr(){
 var xhr = null;
 if(window.XMLHttpRequest) // Firefox et autres
 xhr = new XMLHttpRequest();
 else if(window.ActiveXObject){ // Internet Explorer
 try {
 xhr = new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
 xhr = new ActiveXObject("Microsoft.XMLHTTP");
 }
 }
 else { // XMLHttpRequest non supporté par le navigateur
 alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest");
 xhr = false;
 }
 return xhr;
}

function go(){
 var xhr = getXhr();
 $pseudoUser = document.getElementById("auteurs").value;
 const iduser = getIdUserByPseudo($pseudoUser);
 // On défini ce qu'on va faire quand on aura la réponse
 xhr.onreadystatechange = function(){
 //Traitement seulement si on a tout reçu et que la réponse est ok
 if(xhr.readyState == 4 && xhr.status == 200){
 placerJson(xhr.responseText);
 }
 }
 xhr.open("GET","recuperer.php?idUser="+iduser,true); 
 xhr.send(null);
 }

 function placerJson($reponse){
    //à modifier
    /*chat = document.getElementById("mid");
    const listeSelect = JSON.parse($reponse);
    min = 0;
    max = listeSelect.length;
    listeMessage = [];
    //Ajouter les livres
    for (var i = min; i<=max; i++){
    listeMessage.append(listeSelect[i][content]);
}*/

    
}