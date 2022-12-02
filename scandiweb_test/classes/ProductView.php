<?php

// include_once 'dbh.php';
// include_once 'product.php';

class ProductView extends Product{
    
    public function showProducts(){
        $datas = $this->getProducts();

        ?><form action = "index.php" id ="delete_form" name="select_products" method="POST">
            <div id = "btn_container">

            
            <button type="submit" name="delete_products">MASS DELETE</button>

            <a href="add_product.php">
            <button type="button" name="add_products" form="">ADD</button>
            </a>
            </div>


        <?php
        
        if($datas > 0){?><div id = "product_list"><?php
        foreach($datas as $data){?>
            <div class = "product_card">
                <input type = "checkbox" class = "delete_checkbox" name = "delete_product[]" value = "<?= "'" . $data['product_sku'] . "'";?>">
                <ul>
                <li><?php echo "SKU: " . $data['product_sku'].PHP_EOL;?></li>
                <li><?php echo $data['product_name'].PHP_EOL;?></li>
                <li><?php echo "Price: " . $data['product_price'].PHP_EOL;?></li>
                <li><?php echo $data['product_attribute'].PHP_EOL;?></li>
                <ul>
            </div>
        

            <?php

        }
        ?></div><?php
    }

        ?>
        </form>
        <?php
    }

    public function validateSKU(){
        $datas = $this->getProducts();
        $SKUs = array();

        if($datas > 0){
        foreach($datas as $data){
            array_push($SKUs, $data['product_sku']);
            
        }
        return $SKUs;
        var_dump($SKUs);
    }

    }
    

    public function deleteProducts($selectedSKU){
        $conn = $this->connect();
        $sql = "DELETE FROM products WHERE product_sku IN ($selectedSKU);";
        mysqli_query($conn, $sql);
    }

}