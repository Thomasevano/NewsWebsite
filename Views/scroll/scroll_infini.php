<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Scroll infini</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="post">
    <?php
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");
    } catch (Exception $e) {
        die("erreur de connexion");
    }
    $query = "SELECT * FROM commentaires ORDER BY id DESC LIMIT 0,10";
    $requete = $bdd->query($query);

    while ($donnee = $requete->fetch()) {
        echo "<div class='item' id='" . $donnee['id'] . "'><h2>Le commentaire : " . $donnee['id'] . "</h2><br />" . $donnee['commentaire'] . "</div>";
    }

    mysql_close();
    ?>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            $.ajax({
                url: "load.php?lastid=" + $(".item:last").attr("id"),
                success: function (html) {
                    if (html) {
                        $(".post").append(html);
                    } else {
                        alert("Il n'y a plus de news");
                    }
                }
            });
        }
    });
</script>
</body>
</html>