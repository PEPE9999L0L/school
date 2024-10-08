<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>4.5 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Hatodik Feladat</label>
        <input type="number" class="form-control" name="number1" id="number1" aria-describedby="helpId"
            placeholder="Adja meg hány diák megy az osztály kirándulásra" step="1" required />
        <small id="helpId" class="form-text text-muted">Csak egész számot lehet megadni!</small>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">Eredmény</button>
    </div>
</form>

<div class="container">
    <p>Az eredmény: </p>
    <?php
    if (isset($_GET['number1'])) {
        $number1 = $_GET['number1'];
        $szallas = 1000;
        $szallasPerFo = $szallas * $number1;
        $diak = $number1 * ($szallas * 0.9);
        $best = 0;

        echo 'Csoportos kedvezmény ';

        switch ($number1) {
            case $number1 < 10:
                $csoportos = $szallasPerFo;
                echo $csoportos;
                break;

            case $number1 < 20:
                $csoportos = $szallasPerFo * 0.95;
                echo $csoportos;
                break;

            case $number1 < 30:
                $csoportos = $szallasPerFo * 0.92;
                echo $csoportos;
                break;

            case $number1 < 41:
                $csoportos = $szallasPerFo * 0.88;
                echo $csoportos;
                break;

            case $number1 > 40:
                $csoportos = $szallasPerFo * 0.86;
                echo $csoportos;
                break;
        }

        echo '<br>';
        echo 'Intézmény kedvezmény ';

        switch ($number1) {
            case $number1 < 5:
                $intezmeny = $szallasPerFo;
                echo $intezmeny;
                break;

            case $number1 < 12:
                $intezmeny = $szallasPerFo - $szallas;
                echo $intezmeny;
                break;

            case $number1 < 20:
                $intezmeny = $szallasPerFo - $szallas * 2;
                echo $intezmeny;
                break;

            case $number1 < 29:
                $intezmeny = $szallasPerFo - $szallas * 3;
                echo $intezmeny;
                break;

            case $number1 < 41:
                $intezmeny = $szallasPerFo - $szallas * 4;
                echo $intezmeny;
                break;

            case $number1 > 40:
                $intezmeny = $szallasPerFo - $szallas * 5;
                echo $intezmeny;
                break;
        }

        echo '<br>';
        echo 'Diák kedvézmény ' . $diak;

        echo '<br>';

        switch ($csoportos) {
            case $csoportos < $intezmeny && $csoportos < $diak:
                $best = $csoportos;
                echo 'A csoportos kedvézmény a legjobb választás ' . $best;
                break;

            case $intezmeny < $csoportos && $intezmeny < $diak:
                $best = $intezmeny;
                echo 'Az intézményes kedvézmény a legjobb választás ' . $best;
                break;

            case $diak < $intezmeny && $diak < $csoportos:
                $best = $diak;
                echo 'A diák kedvézmény a legjobb választás ' . $best;
                break;
        }
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>