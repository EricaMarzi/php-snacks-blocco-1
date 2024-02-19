<!--Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”-->

<?php 

$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
$email = $_GET['email'] ?? '';

if(strlen($name)> 3 && ctype_digit($age) && (strpos($email, '@') !== false) && (strpos($email, '.') !== false)) {
    $message = 'Accesso Riuscito';
    $class = 'text-success';
}else {
    $message = 'Accesso Negato';
    $class = 'text-danger';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h3 class="<?= $class ?>"><?= $message ?></h3>
</body>
</html>