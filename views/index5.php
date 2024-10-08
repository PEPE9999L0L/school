<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>3.17 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Ötödik Feladat</label>
        <input type="number" class="form-control" name="number1" id="number1" aria-describedby="helpId"
            placeholder="Adjon meg egy óra számot" step="1" required />
        <input type="number" class="form-control" name="number2" id="number2" aria-describedby="helpId"
            placeholder="Adjon meg egy perc számot" step="1" required />
        <input type="number" class="form-control" name="number3" id="number3" aria-describedby="helpId"
            placeholder="Adjon meg egy másodperc számot" step="1" required />
        <br>
        <input type="number" class="form-control" name="number4" id="number4" aria-describedby="helpId"
            placeholder="Adjon meg egy óra számot" step="1" required />
        <input type="number" class="form-control" name="number5" id="number5" aria-describedby="helpId"
            placeholder="Adjon meg egy perc számot" step="1" required />
        <input type="number" class="form-control" name="number6" id="number6" aria-describedby="helpId"
            placeholder="Adjon meg egy másodperc számot" step="1" required />
        <small id="helpId" class="form-text text-muted">Két időpont közötti időt adja meg másodpercben!</small>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">Eredmény</button>
    </div>
</form>

<div class="container">
    <p>Az eredmény: </p>
    <?php
    if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3']) && isset($_GET['number4']) && isset($_GET['number5']) && isset($_GET['number6'])) {
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $number3 = $_GET['number3'];
        $number4 = $_GET['number4'];
        $number5 = $_GET['number5'];
        $number6 = $_GET['number6'];
        $convertToMp1 = $number1 * 360 + $number1 * 60 + $number3;
        $convertToMp2 = $number4 * 360 + $number5 * 60 + $number6;
        $final = $convertToMp1 - $convertToMp2;

        echo abs($final);
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>