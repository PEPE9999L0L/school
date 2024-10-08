<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>4.6 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Hetedik Feladat</label>
        <input type="number" class="form-control" name="number" id="number" aria-describedby="helpId"
            placeholder="Adjon meg egy számot" step="1" required />
        <small id="helpId" class="form-text text-muted">Csak egynél nagyobb számot lehet megadni!</small>
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
        $egyOldal = 0;
        $ketOldal = 0;
        $haromOldal = 0;
        if ($number > 1) {
            switch ($number) {
                case $number == 2:
                    $haromOldal = 8;
                    echo 'Egy oldala piros: ' . $egyOldal;
                    echo '<br>Két oldala piros: ' . $ketOldal;
                    echo '<br>Három oldala piros: ' . $haromOldal;
                    break;

                case $number > 2:
                    $ketOldal = 12 * ($number - 2);
                    $haromOldal = 8;
                    $egyOldal = 6 * pow($number-2, 2);
                    echo 'Egy oldala piros: ' . $egyOldal;
                    echo '<br>Két oldala piros: ' . $ketOldal;
                    echo '<br>Három oldala piros: ' . $haromOldal;
                    break;
            }
        } else {
            die('A szám nem lehet kisebb mint 1!');
        }
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>