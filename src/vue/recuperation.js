$(document).ready(function() {
    setInterval(function() {
        //$("#mid").load("../actions/recuperer.php");
        $("#inbox").load("../actions/recuperer.php", loaddata);
    }, 2000);
});


function loaddata(response, status, xhr) {
    if (status == 'success') {
        data = JSON.parse(response);

    $("#inbox")
    .empty()
    .append(
      data.map(d => `<DIV class=\"mail\"><DIV class=\"content\">${d.content}</DIV><DIV class=\"infosend\">${d.horaire} | ${d.pseudo}</DIV></DIV>`)
    );
    }

}