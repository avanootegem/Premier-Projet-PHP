<?php
$titre = "Index";
require_once("header.php");
?>

<section id="index" class="vh100">
    <div class="w60 wh100">
        <p>
            Voici un site ou vous pourrez travailler vos tables de multiplications de 1 a 10. <br> <br>
            Révision simple : Vous permet de révisier une table en particulier. <br> <br>
            Révision multiple : Vous permet de réviser plusieurs table en même temps. <br> <br>
            Test : Vous donnes 5 multiplications a réaliser.
        </p>
    </div>

    <div class="w40">
    <?php 
        table_aleatoire();
    ?>
    </div>

</section>

<?php require_once("footer.php") ?>