
$(document).ready(function () {
    $("#chat").on("submit",function (e) {
        $.post("../actions/enregistrer.php", $("#chat").serialize())
        $('#message').val('');
        e.preventDefault();
    });
});