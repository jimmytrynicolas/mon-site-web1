<?php
$category=array();
$category[]=array('id' => 1,'titre' => "huile");
$category[]=array('id' => 2, 'titre' => 'du riz');
$category[]=array('id' => 3, 'titre' => 'sucre');
$category[]=array('id' => 4, 'titre' => 'alimentaire');

$product=array();
$product[]=array('id' => 1, 'category' =>1,'image' => 'timalice huile.jpg','name' => 'ti malice','price' => '300$ ht', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum modi');
$product[]=array('id' => 2, 'category' =>3,'image' => 'sac diri.jpg','name' => 'bongu','price' => '300$ ht', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum modi');
$product[]=array('id' => 3, 'category' =>3,'image' => 'sucre-blanc.jpg','name' => 'flech kan','price' => '300$ ht', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum modi');
$product[]=array('id' => 4, 'category' =>2,'image' => 'sac diri.jpg','name' => 'mega','price' => '300$ ht', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum modi');
$product[]=array('id' => 5, 'category' =>2,'image' => 'sucre.jpg','name' => 'chela','price' => '300$ ht', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum modi');
$product[]=array('id' => 6, 'category' =>2,'image' => 'lait.jpg','name' => 'bout koko','price' => '300$ ht', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum modi');
$product[]=array('id' => 7, 'category' =>4,'image' => 'lait.jpg','name' => 'ti malice','price' => '300$ ht', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum modi');
$product[]=array('id' => 8, 'category' =>2,'image' => 'farine esp.jpg','name' => 'ti malice','price' => '300$ ht', 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum modi');


$client=array();
$client[]=array('id' => 1,'name' => 'Nicolas','prenom' => 'Jimmytry','age' => '21 ans','adresse' => 'santo 17');
$client[]=array('id' => 2,'name' => 'Arisnat','prenom' => 'Mackendy','age' => '32 ans','adresse' => 'jacmel');
$client[]=array('id' => 3,'name' => 'Destin','prenom' => 'wilmise','age' => '18 ans','adresse' => 'jacmel');
$client[]=array('id' => 4,'name' => 'Joseph','prenom' => 'Jhon','age' => '29 ans','adresse' => 'jacmel');
$client[]=array('id' => 5,'name' => 'Albert','prenom' => 'Abinael','age' => '24 ans','adresse' => 'santo 17');
$client[]=array('id' => 6,'name' => 'Nicolas','prenom' => 'Mireille','age' => '55 ans','adresse' => 'PRA');
$client[]=array('id' => 7,'name' => 'Destin','prenom' => 'Williamson','age' => '13 ans','adresse' => 'PRA');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width:768px)">
    <title>page produit</title>
    </head>
<body>
  <?php
  include("include/header.php"); 
  ?>

    <div class="container product-container">
<div class="row">
  <?php
  foreach($product as $data)
  {
    echo"<div class='col-md-2'>";
    echo"<div class='product-item'>";
    echo "<a href='produit.php?id=".$data['id']."'>";
    echo "<img src='image/".$data['image']."' />";
    echo "<h1>".$data['name']."</h1>";
    echo "<h2>".$data['price']."</h2>";
    echo "</a>";
    echo "</div>";
    echo "</div>";
  }
  ?>
</div>

    </div>

<footer>
  <div id="Partage" data-aos="fade-left">
      <h2>Partager sur</h2> <a href=""><img src="image/facebook.png" alt="Partage"></a> <a href=""><img src="image/instagram.png" alt="Partage"></a> <a href="" ><img src="image/twitter.png" alt="Partage"></a>
  <div id="text">
      <h1>KF mache pam</h1>
  <p><ion-icon name="cart-outline"></ion-icon>Vente enligne</p>
  <p><ion-icon name="card-outline"></ion-icon>commendez vos produits</p>
  <p><ion-icon name="storefront-outline"></ion-icon>Devenue un client</p>
  <p><ion-icon name="repeat-outline"></ion-icon>Acheter ce que vous voulez</p>
  </div>
  </div>
  
  <div id="banner-Compte" data-aos="zoom-in-down"> 
      <h1>Mon compte</h1>
      <a href="inscription.html"><ion-icon name="save-outline"></ion-icon>Inscription</a>
      <a href="login.php"><ion-icon name="enter-outline"></ion-icon>Connexion</a>
      <a href="panier.html"><ion-icon name="cart-outline"></ion-icon>Mon panier</a>
      <a href="aide.html"><ion-icon name="help-outline"></ion-icon>Aide</a>
  </div>
  
  <div id="banner-apropos" data-aos="flip-right">
      <h1>A propos</h1>
      <a href=""><ion-icon name="information-outline"></ion-icon>A propos</a>
      <a href=""><ion-icon name="document-outline"></ion-icon>Condition de vente</a>
      <a href=""><ion-icon name="pricetags-outline"></ion-icon>Produits</a>
      <a href=""><ion-icon name="file-tray-outline"></ion-icon>Services</a>
      <a href=""><ion-icon name="help-outline"></ion-icon>Aide et le plan du site</a>
  </div>
      
  <div id="div">
      <span>&#169;2023 Kf mache pam all right reserved</span>
  </div>
  
  </footer>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="javascript/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>