<?php

require_once 'autoloader.php';


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Add Product</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body>

        <div id = "form-container">
        <form action="index.php" id = "product_form" name="Form" method="POST">
            <h2>Register Product</h2>
            
            <input type="text" id="sku" name="SKU" placeholder="SKU" required> <br>

            <input type="text" id="name" name="Name" placeholder="Product Name"><br>

            <input type="text" id="price" name="Price" placeholder="Product Price"><br><br>

            <select id="productType" name="Type">
                <option disabled selected value> Select Product Type </option>                
                <option value="Disc">Disc</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>  
            </select><br>
 

            <div id = inputField></div>

            
            <div id = buttons>
             
            <button type="submit" id = "submit" name="Save">Save</button><br>
            </a>
            <a href="index.php"> 
            <button type="button" id = "cancel" name="Cancel">Cancel</button><br>
            </a>
            <div>
        </form>
</div>

        <?php
        $validateSKU = new ProductView();
        ?>

        
        <script>

            var passedArray = <?php echo json_encode($validateSKU->validateSKU()); ?>;

            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }

        </script>

        <script src="app.js"></script>
    </body>
</html>