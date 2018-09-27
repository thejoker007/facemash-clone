<?php

require_once('init.php');

require_once('process.php');

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Facemash clone</title>
    </head>
    <body>
        <header>
            <h1>Facemash clone</h1>
        </header>
        <p id="first">
last match on last login</p>
        <p id="second">who is sexier</p>
        <div id="dual">
            <?php require_once('ajax/ajax.dual.php'); ?>
        </div>
        <footer><a href="#" target="_blank">Thejoker007</a></footer>
        <script type="text/javascript" src="jquery-2.2.3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".photos").click(function() {
                    $("#loader").fadeIn("fast");
                    var tokenFirst  = $(".faces:first-child .photos").attr("data-token"),
                        tokenSecond = $(".faces:last-child .photos").attr("data-token"),
                        scoreFirst  = $(".faces:first-child .photos").attr("data-score"),
                        scoreSecond = $(".faces:last-child .photos").attr("data-score"),
                        winner,
                        looser,
                        wScore,
                        lScore;

                        if (tokenFirst == $(this).attr("data-token"))
                        {
                            winner = tokenFirst;
                            looser = tokenSecond;
                            wScore = scoreFirst;
                            lScore = scoreSecond;
                        }
                        else
                        {
                            winner = tokenSecond;
                            looser = tokenFirst;
                            wScore = scoreSecond;
                            lScore = scoreFirst;
                        }

                    $.ajax({
                        type: "post",
                        url: "index.php",
                        data: "winner=" + winner + "&looser=" + looser + "&wScore=" + wScore + "&lScore=" + lScore,
                        cache: false,
                        success: function(data) {
                            $("body").html(data);
                            $("#loader").fadeOut("fast");
                        }
                    });
                });
            });
        </script>
    </body>
</html>