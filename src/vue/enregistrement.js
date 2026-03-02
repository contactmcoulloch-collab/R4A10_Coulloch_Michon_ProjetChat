alert("uazifuezoufj");
$(document).ready(function () {
$("#btnEnvoie").click(function(){$.post("../actions/enregistrer.php",$("#chat").serialize())});
});