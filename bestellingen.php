<?php
include("./connect.php");
$sql = "SELECT * FROM `bestellingen`";
$result = mysqli_query($conn, $sql);
$records = "";
while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr>
                <th scope='row'>" . $record["id"] . "
                <td>" . $record["name"] . "</td>
                <td>" . $record["quantity"] . "</td>
                <td>" . $record["price"] . "</td>
                <td>" . $record["street"] . "</td>
                <td>" . $record["number"] . "</td>
                </tr>";
}

?>
<div class="col-12" id="order_table">
    <table class="table table-dover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Naam</th>
                <th scope="col">Hoeveelhijd</th>
                <th scope="col">Prijs per stuk</th>
                <th scope="col">Straat</th>
                <th scope="col">Huisnummer</th>
            </tr>
        </thead>
        <tbody>
            <?php
echo $records;
?>
        </tbody>
    </table>
</div>