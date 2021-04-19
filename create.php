<?php
include("./connect.php");



if(isset($_POST['name'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['total_price'];
}


    $querry = "INSERT INTO `bestellingen` (`id`,
                                        `name`,
                                        `quantity`,
                                        `total_price`) 
                                VALUES (NULL,
                                        $name',
                                        '$quantity',
                                        '$price')";


mysqli_query($conn, $querry);

// header("Refresh: 1; index.php? content=read")

?>

<div class="col-6">
    <h3> alles is verwerkt!</h3>
</div>