<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width:760px)">
    <title>page client</title>
</head>
<body>

<?php
  include("include/header.php");
  ?>


<div id="banner-client">
<?php
$client_table=array();
$client_table[]=array('id' => 1,'name' => 'Nicolas','prenom' => 'Jimmytry','age' => '21 ans','adresse' => 'santo 17');
$client_table[]=array('id' => 2,'name' => 'Arisnat','prenom' => 'Mackendy','age' => '32 ans','adresse' => 'jacmel');
$client_table[]=array('id' => 3,'name' => 'Destin','prenom' => 'wilmise','age' => '18 ans','adresse' => 'jacmel');
$client_table[]=array('id' => 4,'name' => 'Joseph','prenom' => 'Jhon','age' => '29 ans','adresse' => 'jacmel');
$client_table[]=array('id' => 5,'name' => 'Albert','prenom' => 'Abinael','age' => '24 ans','adresse' => 'santo 17');
$client_table[]=array('id' => 6,'name' => 'Nicolas','prenom' => 'Mireille','age' => '55 ans','adresse' => 'PRA');
$client_table[]=array('id' => 7,'name' => 'Destin','prenom' => 'Williamson','age' => '13 ans','adresse' => 'PRA');

foreach($client_table as $client)
{
 echo "<a href='profil.php?id=".$client['id']."'>".$client['name']."</a><br/>";
}
?>


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
        <a href="connexion.html"><ion-icon name="enter-outline"></ion-icon>Connexion</a>
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