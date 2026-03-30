$(document).ready(function () {
    var noroom = 0;
    $("#br1").on('click', function (e) {
        setroom(1);
    });
    $("#br2").on('click', function (e) {
        setroom(2);
    });
    $("#br3").on('click', function (e) {
        setroom(3);
    });
    $("#br4").on('click', function (e) {
        setroom(4);
    });
    $("#br5").on('click', function (e) {
        setroom(5);
    });
    
    function setroom(nr) {
        console.log("noroom "+nr);
        noroom = nr;
        $('#noroom').html(nr);
        $('#noroommsg').val(nr);
        $("#inbox").load("../actions/recuperer.php?room=" + nr, loaddata);

    }
    setInterval(function () {
        //$("#mid").load("../actions/recuperer.php");
        if (noroom != 0) {
            $("#inbox").load("../actions/recuperer.php?room=" + noroom, loaddata);
        }
    }, 2000);
});


function loaddata(response, status, xhr) {
    if (status == 'success') {
        data = JSON.parse(response).reverse();

        $("#inbox")
            .empty()
            .append(
                data.map(d => `<DIV class=\"mail\"><DIV class=\"content\">${d.content}</DIV><DIV class=\"infosend\">${d.horaire} | ${d.pseudo}</DIV></DIV>`)
            );
    }

}