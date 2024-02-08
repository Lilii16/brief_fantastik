<?php
require_once __DIR__ . '/config.php';

function findAllItems ($conn) {
  $sql = "SELECT * FROM `items_cards`";
// Sélectionne toutes les colonnes de tous les items dans la table items_cards
  $requete = $conn->query($sql);
// Execute la requete
  $items = $requete->fetchAll();
// Recupere les resultat dans le tableau $item
  return $items;
}
$items = findAllItems($conn); // Appel de la fonction pour récupérer les items

function  findPictureByItem ($conn, $currentID) {
    $sql = "SELECT * FROM pictures 
    WHERE item_id = $currentID";
    $requete = $conn->query($sql);
    $pictures = $requete->fetch();
    return $pictures;
}
// function findItemById($conn, $currentID){
//     $sql = "SELECT 
//     ic.id, ic.name, ic.description, ic.price, 
//     k.id AS capacites
//     FROM items_cards AS ic
//     INNER JOIN capacities k ON ic.capacity_id = k.id
//     WHERE ic.id = $currentID";

//     $requete = $conn->query($sql);
//     $item = $requete->fetch(PDO::FETCH_ASSOC);

//     return $item;
// }
// function findItemById($conn, $currentID) {
//     $sql = "SELECT 
//     ic.id, ic.name, ic.description, ic.price, 
//     k.id AS capacities
//     FROM items_cards AS ic
//     INNER JOIN capacities k ON ic.capacity_id = k.id
//     WHERE ic.id = $currentID";
//     $requete = $conn->query($sql);
//     $requete->execute();
//     $item = $requete->fetch(PDO::FETCH_ASSOC);
//     return $item;
// }
function findItemById($conn, $currentID) {
    $sql = "SELECT 
    ic.id, ic.name, ic.description, ic.price, 
    k.capacity_id, k.ml, p.picture_path
    FROM items_cards AS ic
    INNER JOIN capacities k ON ic.capacity_id = k.capacity_id
    LEFT JOIN pictures p ON ic.id = p.item_id
    WHERE ic.id = $currentID";
    
    $requete = $conn->query($sql);
    $item = $requete->fetch(PDO::FETCH_ASSOC);

    return $item;
}

function orderItemsByPrice($conn, $limit, $orderBy = true) {
  if ($orderBy === "true") {
      $sql = "SELECT * FROM items_cards ORDER BY price ASC LIMIT $limit;";
  } else {
      $sql = "SELECT * FROM items_cards ORDER BY price DESC LIMIT $limit;";
  }
  $requete = $conn->query($sql);
  $items = $requete->fetchAll(PDO::FETCH_ASSOC);
  return $items;
}

