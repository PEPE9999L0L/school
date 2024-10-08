<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>4.11 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Tizenegyedik Feladat</label>
        <input type="number" class="form-control" name="number1" id="number1" aria-describedby="helpId"
            placeholder="Adja meg a háromszög egyik oldalát" step="1" required />
        <input type="number" class="form-control" name="number2" id="number2" aria-describedby="helpId"
            placeholder="Adja meg a háromszög egyik oldalát" step="1" required />
        <input type="number" class="form-control" name="number3" id="number3" aria-describedby="helpId"
            placeholder="Adja meg a háromszög egyik oldalát" step="1" required />
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

        if ($number1 == $number2 && $number1 == $number3) {
            echo 'Ez egy szabályos háromszög';
        } else if ($number1 == $number2 && $number1 != $number3) {
            echo 'Ez egy egyenlőszárú háromszög';
        } else {
            echo 'Ez egy sima háromszög';
        }
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>