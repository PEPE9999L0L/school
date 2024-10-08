<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>4.8 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Nyolcadik Feladat</label>
        <input type="number" class="form-control" name="number" id="number" aria-describedby="helpId"
            placeholder="Adja meg a diák jegyét" step="1" required />
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

        switch ($number) {
            case $number == 1:
                echo 'Ez szar lett';
                break;

            case $number == 2:
                echo 'Ez az irodalom jegyem';
                break;

            case $number == 3:
                echo 'Ez a töri jegyem';
                break;

            case $number == 4:
                echo 'Haladunk';
                break;

            case $number == 5:
                echo 'G to the G';
                break;

            default:
                echo 'Ez nem jegy te fasz';
                break;
        }
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>