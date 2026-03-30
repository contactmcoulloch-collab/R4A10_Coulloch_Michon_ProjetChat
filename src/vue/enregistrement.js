
$(document).ready(function () {
    $("#btnEnvoie").on('click', function (e) {
        enregistrer();
    e.preventDefault();
    });
    $('#chat').on('keyup', function(e) {
        if (e.key === 'Enter') {
            enregistrer();
        }
    e.preventDefault();
    });
});

function enregistrer() {
    console.log("pseudo <" + $('#pseudo').val() + ">  msg <" + $('#message').val() + ">");
    if ($('#pseudo').val().trim() == "") {
        alert("Pseudo obligatoire ...");
        return;
    }
    if ($('#message').val().trim() == "") {
        alert("Message obligatoire ...");
        return;
    }
    
    $.post("../actions/enregistrer.php", $("#chat").serialize())
    $('#message').val('');

}