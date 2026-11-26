
<?php
include "includes/db.php";
// Haal alle producten uit de database
$producten = $pdo->query("SELECT * FROM producten")->fetchAll();
?>
<?php include "included/header.php"; ?>




<div class="producten">
    <?php foreach ($producten as $product) { ?>

<div class="product">
    <div class="img">
    <img src="images/<?php echo $product['afbeelding']; ?>" alt="<?php echo $product['naam']; ?>" width="300">
    </div>
    <h3><?php echo $product['naam']; ?></h3>
    <p class="prijs">&euro; <?php echo $product['prijs']; ?></p>
    <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
</div>
   <?php } ?>
</div>
<!-- greif
<div class="product">
<a href="greif.php" class="knop">
<h2>1:35 Tamiya 35113 Sd.Kfz.250/3 Greif Ausf. A</h2>
<img src="images/tamiya_greif.jpg" alt="image not found" width="300">
<p class="price">&euro;29,95</p></a>
</div>

tank
<div class="product">
<a href="tank.php" class="knop">    
<h2>1:35 Tamiya 35391 M24 Chaffee - European Theater WWII</h2>
<img src="images/tamiya_tank.jpg" alt="image not found" width="300">
<p class="price">&euro;35,95</p>
</a>
</div>

veldkeuken
<div class="product">
<a href="veldkeuken.php" class="knop">
<h2>1:35 Tamiya 35103 Gulaschkanone</h2>
<img src="images/tamiya_veldkeuken.jpg" alt="image not found" width="300">
<p class="price">&euro;20,95</p>
</a>
</div>

rupsband
<div class="product">
<a href="rupsband.php" class="knop">
<h2>1:35 Tamiya 35394 Steyr RSO/01</h2>
<img src="images/tamiya_rupsband.jpg" alt="image not found" width="300">
<p class="price">&euro;30,95</p>
</a>
</div>

yamato
<div class="product">
<a href="yamato.php" class="knop">
<h2>1:350 Tamiya 78025 Japanese Battleship Yamato</h2>
<img src="images/tamiya_yamato.jpg" alt="image not found" width="300">
<p class="price">&euro;279,95</p>
</a>
</div>

f-16 
<div class="product">
<a href="f-16.php" class="knop">
<h2>1:48 Tamiya 61098 F-16CJ Lockheed Martin Fighting Falcon Block 50</h2>
<img src="images/tamiya_f-16.jpg" alt="image not found" width="300">
<p class="price">&euro;50,95</p>
</a>
</div>
</div> -->












<?php include "included/footer.php"; ?>

