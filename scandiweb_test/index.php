<?php

require_once 'autoloader.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Product</title>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php

        if(isset($_POST['Save'])){
            $inputs = array($_POST['SKU'],
            $_POST['Name'], 
            $_POST['Price'], 
            $_POST['Type'], 
            $_POST['Attribute']);

            $product = new $inputs[3]();
            $product -> setInputs($inputs);
            $product-> saveProduct($product->getSKU(), $product->getName(), $product->getPrice(), $product->getType(), $product->getAttribute());
        }
        
            
            $products = new ProductView();

            if(isset($_POST['delete_products'])){
                $SKUs = $_POST['delete_product'];
                $selected_products = implode(" ," ,$SKUs);
                $products -> deleteProducts($selected_products);
                }

            $products -> showProducts();
            $products -> validateSKU();   
        ?>


        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>

    </body>
</html>
