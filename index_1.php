<?php


$services = array(
  array(
      'id' => 1,
      'titre' => 'Temptation is never over',
      'prix' => 19.99,
      'description' => 'Description du Service 1.',
      'source' => 'assets\pictures\cards1.png' 
  ),
  array(
      'id' => 2,
      'titre' => 'Something lies beneath Water',
      'prix' => 280,
      'description' => 'Description du Service 2.',
      'source' => 'assets\pictures\cards2.png' 
  ),
  array(
      'id' => 3,
      'titre' => 'Indian Dream',
      'prix' => 390,
      'description' => 'Description du Service 3.',
      'source' => 'assets\pictures\cards3.png' 
  ),
  array(
      'id' => 4,
      'titre' => 'Into the Woods',
      'prix' => 490,
      'description' => 'Description du Service 4.',
      'source' => 'assets\pictures\cards4.png' 
  ),
  array(
    'id' => 5,
    'titre' => 'A river of Diamonds',
    'prix' => 220,
    'description' => 'Description du Service 5.',
    'source' => 'assets\pictures\cards5.png' 
  ),
  array(
    'id' => 6,
    'titre' => 'A whimsical Night',
    'prix' => 350,
    'description' => 'Description du Service 6.',
    'source' => 'assets\pictures\cards6.png' 
    //'source' => //rajouter chemin img, 
  )
);



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<?php
include('header.php');
?>

<video id="background-video" autoplay loop muted>

  <source src="assets\videos\forest_-_97998 (Original).mp4" type="video/mp4">

</video>

<audio id="myAudio" src="assets\audios\aquarium-by-saint-saens-156733.mp3"></audio>

 

<div class="content">

<h1 class="text-light">BIEN PLUS QUE DES COMPLÉMENTS</h1>

<h2 class="text-light">Une source de vie</h2>

<button id="btnAudio" onclick="pauseAndPlay()">Play ▶</button>

</div>
<div class="row">
<?php 
  foreach ($services as $service) {
    ?>
    <div class="col-md-6 col-lg-4 col-xl-3 card">
      <img src="<?php echo $service['source']?>" class="img-fluid card-img-top">
      <div class="card-body">
      <h5 class="card-title"><?php echo $service["titre"] ?></h5>
      <p class="card-text"><?php echo $service["description"] ?></p>
      <p><?php echo $service["prix"] ?></p>
      <a class="btn btn-primary" href="localhost:8080/product.php?id=<?php echo $service['id']?>">Voir plus</a>
      <!-- parametre pour intéroger la page sur l'id GET -->
      </div>
    </div>
    <?php
  }
?>
</div>

<?php
include('footer.php');
?>



</body>
</html>