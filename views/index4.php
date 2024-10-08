<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>3.15 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Negyedik Feladat</label>
        <input type="number" class="form-control" name="number1" id="number1" aria-describedby="helpId"
            placeholder="Adja meg a szabályos sokszög oldalai számát" step="1" required />
        <input type="number" class="form-control" name="number2" id="number2" aria-describedby="helpId"
            placeholder="Adja meg a szabályos sokszög oldala hosszát" step="1" required />
        <small id="helpId" class="form-text text-muted">Csak egész számot lehet megadni!</small>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">Eredmény</button>
    </div>
</form>

<div class="container">
    <p>Az eredmény: </p>
    <?php
    if (isset($_GET['number1']) && isset($_GET['number2'])) {
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $atlok = ($number1 * ($number1 - 3)) / 2;
        $egyCsucsAtlok = $number1 - 2;

        for ($i = 1; $i < $number1 - 2; $i++) {
            $atlokHossza = $number2 * (sin(($i * M_PI) / $number1) / sin(M_PI / $number1));

            echo round($atlokHossza, 2) . '<br>';
        }
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>