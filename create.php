<?php
include("./connect.php");

// var_dump($_SESSION["shopping_cart"]);

foreach ($_SESSION['shopping_cart'] as $key => $product) :
    // var_dump($product);
    $querry = "INSERT INTO `bestellingen` (`id`,
                                            `name`,
                                            `quantity`,
                                            `price`) 
                VALUES (NULL,
                        '{$product['id']}',
                        '{$product['name']}',
                        '{$product['quantity']}',
                        '{$product['price']}')";
    
    echo $querry;
    $result = mysqli_query($conn, $querry);
    if ($result) {
        echo "Gelukt";
    } else {
        echo "Niet Gelukt";
    }
//  $total =  $total + ($product['quantity'] * $product['price']);
endforeach;



// if(isset($_POST['name'])){
//     $name = $_POST['name'];
//     $quantity = $_POST['quantity'];
//     $price = $_POST['total_price'];
// }


//     $querry = "INSERT INTO `bestellingen` (`id`,
//                                         `name`,
//                                         `quantity`,
//                                         `total_price`) 
//                                 VALUES (NULL,
//                                         '$name',
//                                         '$quantity',
//                                         '$price')";


// mysqli_query($conn, $querry);


?>

<div class="col-6">
    <h3> alles is verwerkt!</h3>
</div>