<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>3.12 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Első Feladat</label>
        <input type="number" class="form-control" name="number" id="number" aria-describedby="helpId"
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
    if (isset($_GET['number'])) {
        $number = $_GET['number'];
        $counter = 2;

        while ($number != 1) {
            if ($number % $counter == 0) {
                echo $number, ' ' . $counter, '<br>';
                $number = $number / $counter;
                $counter = 2;
            } else {
                $counter++;
            }
        }
        echo $number;
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>