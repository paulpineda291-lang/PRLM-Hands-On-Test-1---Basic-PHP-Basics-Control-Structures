<?php
$user = 'Paul';
$pagbati = 'Hello '. $user;

$offer = [
    'Hermes',
    3000,
    4000,
    5000
];

$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $usual_price - $usual_price
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Genfour</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php include "includes/header.php";?>
         <h1><?=$pagbati?></h1>
         <P>
            U can shine by Buying our Bags and 
            the Quality is not a problem, We buy and
            sell Authentic bags.
         </P>
        
         <p> Buy a Legit Bags in our store   </p>

          <?php include "includes/footer.php";?>
    </body>
</html>

