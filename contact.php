<?php
if(isset($_POST['envoyer']))
{
if(!empty($_POST['fullname']))
{
if(!empty($_POST['email']))
{
if(!empty($_POST['sujet']))
{
if(!empty($_POST['message']))
{  
if(!empty($_POST['number']))
{
    $fullname=trim(strip_tags($_POST['fullname']));
    $email=trim(strip_tags($_POST['email']));
    $number=trim(strip_tags($_POST['number']));
    $sujet=trim(strip_tags($_POST['sujet']));
    $message=trim(strip_tags($_POST['message']));

if($fullname != '')
{
if($email != '')
{
if($number != '')
{
if($sujet != '')
{
if($message != '')
{

 $succes="message recu";
}
else
{
$error="Incorrect message";    
}
}
else
{
$error="Incorrect sujet";    
}
}
else
{
$error="Incorrect telephone";    
}
}
else
{
$error="Incorrect email";     
}
}
else 
{
$error="Incorrect nom et prenom";  
}
}
else
{
$error="Incorrect telephone";   
}
}
else
{
$error="Incorrect message";    
}
}
else
{
$error="Incorrect sujet"; 
}
}
else
{
$error="Incorrect email"; 
}
}
else
{
 $error="Incorrect Nom et Prenom";
} 

}

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
    
    <title>page contact</title>
</head>
<body>

<?php
  include("include/header.php");
  ?>


<section>
    <div id="contact" >
   <div id="contact-item">
    <div id="contact-content" data-aos="flip-left">
    <div id="itemcontact" data-aos="flip-right">
        <h6>telephone</h6>
        <p>(+509)46015746.+50946015746 </p>
    </div>
        
    <div id="itemcontact1" data-aos="zoom-in-down">
      <h6>Email</h6>
      <p>mackendyarisnat@gmail.com</p>
    </div>

    <div id="itemcontact1" data-aos="zoom-in-down">
        <h6>Denenir client</h6>
        <a href="">Fomulaire</a>
      </div>

      <div id="itemcontact1" data-aos="zoom-in-down">
        <h6>Notre adress</h6>
        <p>jacmel rue Petion</p>
      </div>
   </div>
  
   <div id="contact-fomulaire">

    <form action="" method="post">
        <?php
        if(isset($error))
        {
            echo "<div class='alert alert-danger'>$error</div>";
        }

        if(isset($succes))
        {
            echo "<div class='alert alert-success'>$succes</div>";
        }
        ?>
        <input id="input" type="text" name="fullname" placeholder="Nom et Prenom"  data-aos="fade-left" value="<?php if(isset($_POST['fullname'])) { echo $_POST['fullname'];} ?>">
        <input type="email" name="email" placeholder="Email" data-aos="fade-right" value="<?php if(isset($_POST['email'])) { echo $_POST['email'];} ?>">
        <input type="number" name="number" placeholder="Numero de telephone" data-aos="fade-left" value="<?php if(isset($_POST['number'])) { echo $_POST['number'];} ?>">
        <input type="text" name="sujet" placeholder="Sujet" data-aos="fade-right" value="<?php if(isset($_POST['sujet'])) { echo $_POST['sujet'];} ?>">
        <textarea name="message" placeholder="Message..." data-aos="flip-right"><?php if(isset($_POST['message'])) { echo $_POST['message'];} ?></textarea>
        <button name="envoyer" data-aos="flip-down">Envoyer un message</button>


    </form>

   </div>
    </div>
   </div>
</section>

    

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