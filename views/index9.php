<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>4.9 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Kilencedik Feladat</label>
        <input type="number" class="form-control" name="number1" id="numbe1r" aria-describedby="helpId"
            placeholder="Adjon meg egy számot" step="1" required />
        <input type="number" class="form-control" name="number2" id="number2" aria-describedby="helpId"
            placeholder="Adjon meg egy számot" step="1" required />
        <input type="number" class="form-control" name="number3" id="number3" aria-describedby="helpId"
            placeholder="Adjon meg egy számot" step="1" required />
        <small id="helpId" class="form-text text-muted">Csak egész számot lehet megadni!</small>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">Eredmény</button>
    </div>
</form>

<div class="container">
    <p>Az eredmény: </p>
    <?php
    if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])) {
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $number3 = $_GET['number3'];
        $max = 0;
        $min = 100;

        $array = array($number1, $number2, $number3);

        foreach ($array as $key => $value) {
            if ($value > $max) {
                $max = $value;
            } else {
                $min = $value;
            }
        }
        echo $max . '<br>' . $min;
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>