<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/function.fn.php';
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

 
  <div class="titre vh-100 p-25 content mt-5 h-100">
    <h1 class="shadow w-10">Once upon a time... </h1>
    <h2 class="shadow p-25 justify-content-center">... an exlixir's story</h2>
    <button class="shadow" id="btnAudio" onclick="pauseAndPlay()">Play ▶</button>
  </div>


<?php
$limit = 15;
$orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : true; // Par défaut, ordonner les items
$items = orderItemsByPrice($conn, $limit, $orderBy);
?>

<div class="row row-cols-1 row-cols-md-3 m-auto justify-content-center ">
   
  <!-- //On recupére le tablau de docteurs exploitable doctors
//   $drugs = findAllDrugs($conn);
  //on crée une bloucle pour récupérer chaque docteur dans une card bootstrap -->
  <?php 
  foreach ($items as $item) {
    $path = findPictureByItem($conn, $item["id"])['picture_path'];
    ?>
    <div class="card col text-center m-3 p-0 rounded-3 opacity-75" style="width: 300px;">
    <?php if (isset($path)): ?>
      <img src= "<?= $path ?>" class="card-img-top rounded-0 h-50 bg-green" alt="">
    <?php endif; ?>
    <div class="card-body bg-green">
        <h5 class="card-title"><?php echo $item["name"] ?></h5>
        <p class="card-text"><?php echo $item["description"] ?></p>
        <p><?php echo $item["price"] ?> €</p>
        <p><?php echo isset($item["capacities"]) ? $item["capacities"] . ' ml' : ''; ?></p>
        <a class="btn btn-green" href='itemdetail.php?id=<?php echo $item["id"]; ?>'>Voir plus</a>
     <!-- parametre pour intéroger la page sur l'id GET -->
      </div>
    </div>
  <?php } ?> 

  </div>
  <div>
<form method="GET">
<button type="submit" name="orderBy" value="true">ordre ascendant</button>
<button type="submit" name="orderBy" value="false">pas d'ordre particulier</button>
</form>
</div>
<?php
include 'footer.php';
?>



</body>
</html>