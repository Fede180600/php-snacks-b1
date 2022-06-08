<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$matches_array = [
    [
        "home_team" => "Los Angeles Lakers",
        "guest_team" => "Golden State Warrior",
        "home_points" => 102,
        "guest_points" => 98
    ],
    [
        "home_team" => "Boston Celtics",
        "guest_team" => "Cleveland Cavaliers",
        "home_points" => 94,
        "guest_points" => 100
    ],
    [
        "home_team" => "New York Knicks",
        "guest_team" => "Chicago Bulls",
        "home_points" => 84,
        "guest_points" => 90
    ],
    [
        "home_team" => "Brooklyn Nets",
        "guest_team" => "Dallas Mavericks",
        "home_points" => 112,
        "guest_points" => 108
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <h2>
            Match List:
        </h2>
        <?php for ($i = 0; $i < count($matches_array); $i++) {
            $current_match = $matches_array[$i];
            // var_dump($current_match);
            ?>
        <li>
            <?php echo $current_match["home_team"]?> - <?php echo $current_match["guest_team"]?>
            |
            <?php echo$current_match["home_points"]?>-<?php echo $current_match["guest_points"]?>
        </li>
        <?php } ?> 
    </ul>
</body>
</html>