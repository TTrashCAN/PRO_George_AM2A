<?php
include("./connect.php");

// var_dump($_SESSION["shopping_cart"]);

foreach ($_SESSION['shopping_cart'] as $key => $product) :
    // var_dump($product);

    $street = $_POST['street'];
    $number = $_POST['number'];

    $querry = "INSERT INTO `bestellingen` (`id`,
                                            `name`,
                                            `quantity`,
                                            `price`,
                                            `street`,
                                            `number`) 
                VALUES ('{$product['id']}',
                        '{$product['name']}',
                        '{$product['quantity']}',
                        '{$product['price']}',
                        '$street',
                        '$number')";
    
    // echo $querry;
    $result = mysqli_query($conn, $querry);
    if ($result) {
        header("Location: ./index.php?content=message&alert=bestellingklaar");
        } else {
                echo "Niet Gelukt";
            }
            //  $total =  $total + ($product['quantity'] * $product['price']);
        endforeach;
        // header("Location: ./index.php?content=message&alert=bestellingklaar");
?>