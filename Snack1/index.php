<!--Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60-->

<?php 

$basketball_games = [
    [
        'home' => 'Atlanta Hawks',
        'guest' => 'Oklaoma City Thunder',
        'home_points' => 91,
        'guest_points' => 128
    ],
    [
        'home' => 'Los Angeles Lakers',
        'guest' => 'Chicago Bulls',
        'home_points' => 113,
        'guest_points' => 110
    ],
    [
        'home' => 'Charlotte Hornets',
        'guest' => 'Denver Nuggets',
        'home_points' => 116,
        'guest_points' => 100
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
    <h2>Calendar</h2>
    <ul class="list-unstyled">
        <?php foreach ($basketball_games as $game) : ?>
            <li><?= $game['home'] ?> - <?= $game['guest'] ?> | <?= $game['home_points'] ?>-<?= $game['guest_points'] ?></li>
        <?php endforeach ?>
    </ul>
</div>
</body>
</html>