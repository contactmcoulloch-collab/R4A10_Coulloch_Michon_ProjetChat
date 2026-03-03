alert("usm");
$(document).ready(function() {
    setInterval(function() {
        $("#mid table").load("../actions/recuperer.php");
    }, 2000);
});