CREATE TABLE items_cards (
    id INT,
    name VARCHAR(255),
    price DECIMAL,
    ml INT,
    description TEXT,
    picture VARCHAR(255)
);

INSERT INTO items_cards (id, name, price, ml, description, picture)
VALUES
(1, 'Temptation is never over', 200, 100, 'Immerse in an enchanting blend where delicate notes transport you to a realm where well-being and beauty intertwine. Let the captivating fragrance be enhanced by the soothing touch of turmeric, promising bright and lighter days—a fragrant symphony inspiring a journey towards a healthier you.', 'assets\pictures\cards1.png'),
(2, 'Something lies beneath Water', 280, 100, 'Dive into the refreshing embrace of a unique elixir capturing the essence of hidden treasures beneath the surface. Envelop yourself in the crisp purity, as the natural elements within bestow a touch of wellness, unveiling a world where beauty and health flow harmoniously.', 'assets\pictures\cards2.png'),
(3, 'Indian Dream', 390, 200, 'Embark on a sensory voyage with a fragrance celebrating beauty inspired by ancient wisdom. Let the dreamy fragrance transport you to a realm where the fusion of health and allure creates a captivating symphony for the senses.', 'assets\pictures\cards3.png'),
(4, 'Into the Woods', 490, 150, 'Wander through the majestic allure of a fragrance that encapsulates the purity of nature. Enriched with forest botanicals, this enchanting elixir invites you to embrace the rejuvenating power of the great outdoors.',
'assets\pictures\cards4.png'),
(5, 'Diamonds River', 220, 100, 'Experience the pure brilliance of a fragrance that sparkles with the clarity of pristine waters. This exquisite blend, inspired by the cascading brilliance of a river, encapsulates the essence of both purity and health.',
'assets\pictures\cards5.png'),
(6, 'A whimsical Night', 350, 150, 'Surrender to the enchantment of a fragrance where the night sky meets a melody of botanical wonders. This captivating fragrance, inspired by the magic of moonlit dreams, whispers tales of beauty and well-being. Immerse yourself in the whimsical allure that invites you to embrace a night of rejuvenation and timeless elegance.','assets\pictures\cards6.png');

INSERT INTO pictures (item_id, picture_path) VALUES (1, 'assets/pictures/cards1.png'),(2, 'assets/pictures/cards2.png'),(3, 'assets/pictures/cards3.png'),(4, 'assets/pictures/cards4.png'),(5, 'assets/pictures/cards5.png'),(6, 'assets/pictures/cards6.png')

mysql> SELECT items_cards.id, items_cards.name, items_cards.price, items_cards.capacity_id, items_cards.picture_id, items_cards.description
    FROM items_cards
    JOIN capacities ON items_cards.capacity_id = capacities.capacity_id
    JOIN pictures ON items_cards.picture_id = pictures.picture_id
    ORDER BY items_cards.id ASC;

    // $services = array(
//   array(
//       'id' => 1,
//       'titre' => 'Temptation is never over',
//       'prix' => 19.99,
//       'description' => 'Description du Service 1.',
//       'source' => 'assets\pictures\cards1.png' 
//   ),
//   array(
//       'id' => 2,
//       'titre' => 'Something lies beneath Water',
//       'prix' => 280,
//       'description' => 'Description du Service 2.',
//       'source' => 'assets\pictures\cards2.png' 
//   ),
//   array(
//       'id' => 3,
//       'titre' => 'Indian Dream',
//       'prix' => 390,
//       'description' => 'Description du Service 3.',
//       'source' => 'assets\pictures\cards3.png' 
//   ),
//   array(
//       'id' => 4,
//       'titre' => 'Into the Woods',
//       'prix' => 490,
//       'description' => 'Description du Service 4.',
//       'source' => 'assets\pictures\cards4.png' 
//   ),
//   array(
//     'id' => 5,
//     'titre' => 'A river of Diamonds',
//     'prix' => 220,
//     'description' => 'Description du Service 5.',
//     'source' => 'assets\pictures\cards5.png' 
//   ),
//   array(
//     'id' => 6,
//     'titre' => 'A whimsical Night',
//     'prix' => 350,
//     'description' => 'Description du Service 6.',
//     'source' => 'assets\pictures\cards6.png' 
//     //'source' => //rajouter chemin img, 
//   )
// );

<div>
    <h1><?= $name ?> </h1>
    <p><?= $description ?></p>
    <p><?= $price ?></p>
    <p>Console : <?= $console ?></p>
    <p>Nombre de joueurs max : <?= $nbre_de_joueurs_max ?></p>
    <p>Commentaires : <?= $comment ?></p>
</div>