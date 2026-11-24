

<?php include "included/header.php"; ?>



<h2>Bestellen: Nike Air Max 90</h2>

<form class="formulier">

<div class="veld">
    <label for="voornaam">Voornaam</label>
    <input type="text" id="voornaam" name="voornaam" placeholder="..." required>
</div>

<div class="veld">
    <label for="achternaam">Achternaam</label>
    <input type="text" id="achternaam" name="achternaam" placeholder="..." required>
</div>

<div class="veld">
    <label for="email">E-mailadres</label>
    <input type="email" id="email" name="email" placeholder="..." required>
</div>

<div class="veld">
    <label for="aantal">Aantal</label>
    <input type="number" id="aantal" name="aantal" min="1" max="10" value="1" required>
</div>


<div class="vinkje">
<div class="veld">
    <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
    <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
</div>
</div>


<input type="submit" value="Bestelling plaatsen" class="knop">
<a href="index.php">Terug</a>

</form>










</div>



<?php include "included/footer.php"; ?>











