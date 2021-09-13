<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php



    $retour = mail('yann.pivel@hotmail.fr', 'Envoi depuis la page Contact',$_POST["name"], $_POST["email"], $_POST["phone"], $_POST['message'], 'From : webmaster@yannpivel.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }


    ?>
</body>
</html>
