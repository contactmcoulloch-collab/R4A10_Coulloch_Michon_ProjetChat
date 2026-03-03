alert("usm");
$(document).ready(function() {
    setInterval(function() {
        $("#mid").load("../actions/recuperer.php");
    }, 2000);
});