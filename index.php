<link rel="stylesheet" href="./src/css/style.css">
<link rel="icon" href="./src/img/favicon.png" type="image/x-icon">
<?php
    //Définir titre de la page
    $titre = "Bitly";
    $description = "Shorten your Link";
    //appeler mon header
    require "./src/controller/header.php";
    require "./src/controller/hero.php";
?>

<!-- Formulaire pour entrer lien -->
<section class="link">
    <form action="" method="post">
        <input type="url" name="url" placeholder="<?= $description ?>">
        <input type="submit" value="Shorten">
    </form>
    <p>By clicking SHORTEN, your are agreeing to Bilty's <span>Terms of services</span> and <span>Privacy Policy</span></p>
</section>


<?php
    require "./src/controller/sponsor.php";
    require "./src/controller/footer.php";
?>
</body>
</html>