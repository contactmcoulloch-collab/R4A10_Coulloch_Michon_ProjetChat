alert("usm");
$(document).ready(function() {
    setInterval(function() {
        $("#mid").load("recuperer.php");
    }, 2000);
});