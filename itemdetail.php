<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/function.fn.php';

if (isset($_GET['id'])) {
    $item = findItemById($conn, $_GET['id']); // Appel de la fonction pour récupérer la fiche technique 
    // du jeu sélectionné sur la liste de jeux

    if ($item) {
        $item = findItemById($conn, $_GET['id']);
        $name =  $item['name'];
        $picture =  findPictureByItem($conn, $_GET['id']);
        $path = $picture['picture_path'];
    } else {
        // Gérer le cas où le jeu n'est pas trouvé
        // Par exemple, rediriger vers une page d'erreur
        header('Location: erreur.php');
        exit();
    }
} else {
    // Gérer le cas où $_GET['id'] n'est pas défini
    // Par exemple, rediriger vers une page d'erreur
    header('Location: erreur.php');
    exit();
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche technique du jeu</title>
</head>
<body>

<div>
    <?php if ($item): ?>
        <h1><?= $item['name'] ?></h1>
        <p><?= $item['description'] ?></p>
        <p><?= $item['price'] ?> €</p>
        <p><?= $item['ml'] ?> ml</p>
        <?php if (isset($path)): ?>
            <img src= "<?= $path ?>" class="img-fluid card-img-top">
        <?php endif; ?>
    <?php else: ?>
        <p>L'item n'a pas été trouvé.</p>
    <?php endif; ?>
</div>

</body>
</html>