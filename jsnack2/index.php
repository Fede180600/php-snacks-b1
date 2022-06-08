<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        User Data:
    </h2>
    <?php
    $user_name = $_GET["name"];
    $user_email = $_GET["email"];
    $user_age = $_GET["age"];
    $controls = ["", "", ""];
    if (strlen($user_name) < 3) {
        echo "Nome inserito non valido";
        $controls[0] = false;
    } else {
        echo "Ciao " . "<strong>" . $user_name . "</strong>";
        $controls[0] = true;
    };
    $at_position = strpos($user_email, "@");
    $dot_position = strpos($user_email, ".");
    if ($at_position === false || $dot_position === false) {
        echo "<br>" . "Email non valida";
        $controls[1] = false;
    } else {
        echo "<br>" . "La tua mail: " . "<strong>" . $user_email . "</strong>";
        $controls[1] = true;
    };
    $age_to_check = is_numeric($user_age);
    if ($age_to_check === true) {
        echo "<br>" . "Età inserità " . $user_age . " valida";
        $controls[2] = true;
    } else {
        echo "<br>" . "inserisci la tua età";
        $controls[2] = false;
    }
    var_dump($controls);

    for ($i = 0; $i < count($controls); $i++) {
        $current_control = $controls[$i];
    }
    if ($current_control === false) {
        echo "<h3>" . "Accesso Negato" . "</h3>";
    } else {
        echo "<h3>" . "Accesso Autorizzato" . "</h3>";
    }
    ?>


</body>

</html>