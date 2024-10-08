<?php include_once 'header.php' ?>

<!-- Tartalom eleje -->
<h1>3.14 Feladat</h1>
<form method="GET">
    <div class="mb-3">
        <label for="" class="form-label">Harmadik Feladat</label>
        <input type="number" class="form-control" name="number1" id="number1" aria-describedby="helpId"
            placeholder="Adja meg a terület szélességét" step="1" required />
        <input type="number" class="form-control" name="number2" id="number2" aria-describedby="helpId"
            placeholder="Adja meg a terület magasságát" step="1" required />
        <small id="helpId" class="form-text text-muted">Méterben kell megadni!</small>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">Eredmény</button>
    </div>
</form>

<div class="container">
    <p>Az eredmény: </p>
    <?php
    if (isset($_GET['number1']) && isset($_GET['number2'])) {
        $number1 = $_GET['number1'] * 100;
        $number2 = $_GET['number2'] * 100;
        $csempe = 20 * 20;
        $final = ($number1 * $number2 / $csempe)  * 1.1;

        echo $final;
    }
    ?>
</div>
<!-- Tartalom vége -->

<?php include_once 'footer.php' ?>