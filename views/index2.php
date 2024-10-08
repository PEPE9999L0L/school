<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>3.13 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Második Feladat</label>
        <input type="number" class="form-control" name="number" id="number" aria-describedby="helpId"
            placeholder="Adja meg a dinnye átmérőjét" step="1" required />
        <small id="helpId" class="form-text text-muted">Centiméterben lehet megadni!</small>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">Eredmény</button>
    </div>
</form>

<div class="container">
    <p>Az eredmény: </p>
    <?php
    if (isset($_GET['number'])) {
        $number = $_GET['number'];
        $kerulet = 4 * pow(($number/2), 2) * M_PI;
        $final = $kerulet * 2 + 60;

        echo round($final, 2) . 'cm';
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>