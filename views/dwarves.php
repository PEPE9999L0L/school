<?php require_once 'header.php' ?>

<?php
require_once '../database/database.php';

if (isset($_GET['klan']) && isset($_GET['nem'])) {
    $query = 'SELECT * FROM torpek WHERE klan = "' . $_GET['klan'] . '" AND nem = "' . $_GET['nem'] . '";';
} else if (isset($_GET['nem'])) {
    $query = 'SELECT * FROM torpek WHERE nem = "' . $_GET['nem'] . '";';
} else if (isset($_GET['klan'])) {
    $query = 'SELECT * FROM torpek WHERE klan = "' . $_GET['klan'] . '";';
} else {
    $query = "SELECT * FROM torpek";
}

$result = mysqli_query($connection, $query);

$clanQuery = "SELECT DISTINCT klan FROM torpek ORDER BY klan ASC;";
$clanResult = mysqli_query($connection, $clanQuery);

?>


<h1>Törpék listája</h1>

<form method="GET">
    <div class="row">
        <div class="col-6">
            <select class="form-control" name="klan" id="klan">
                <option value="" disabled selected>Kérlek válassz egy klánt</option>
                <?php while ($row = mysqli_fetch_assoc($clanResult)) {
                    echo '<option value="' . $row["klan"] . '">' . $row["klan"] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-3">
            <label class="form-check-label" for="Female">Férfi: </label>
            <input class="form-check-input" type="radio" name="nem" id="Male" value="F">
            <label class="form-check-label" for="Female">Nő: </label>
            <input class="form-check-input" type="radio" name="nem" id="Female" value="N">
        </div>
        <div class="col-3">
            <button class="btn btn-secondary">Szűrés</button>
        </div>
    </div>
</form>

<table class="table table-striped table-hover table-primary">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Clan</th>
        <th>Sex</th>
        <th>Height</th>
        <th>Weight</th>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $nem = $row["nem"] == "F" ? "Férfi" : "Nő";
            echo '<tr>';
            echo '<th>' . $row["id"] . '</th>';
            echo '<th>' . $row["nev"] . '</th>';
            echo '<th>' . $row["klan"] . '</th>';
            echo '<th>' . $nem . '</th>';
            echo '<th>' . $row["magassag"] . '</th>';
            echo '<th>' . $row["suly"] . '</th>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
<?php require_once 'footer.php' ?>