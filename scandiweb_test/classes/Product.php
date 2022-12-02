<?php

include_once 'autoloader.php';


abstract class Product extends dbConnect{

    protected $inputs;

    public function saveProduct($sku, $name, $price, $type, $attribute){
        $conn = $this->connect();
        $sql = "INSERT INTO products (product_sku, product_name, product_price, product_type, product_attribute)
        VALUES ('$sku', '$name', '$price', '$type', '$attribute')";
        mysqli_query($conn, $sql);

    }

    protected function getProducts(){ 
        $sql = "SELECT * FROM products";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0){
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

    }

    public function setInputs($inputs){
        $this->inputs = $inputs;
    }

    public function getSKU() : String{
        return $this->inputs[0];
    }
    
    public function getName() : String{
        return $this->inputs[1];
    }

    public function getPrice() : String{
        return $this->inputs[2] . " $";
    }

    public function getType() : String{
        return $this->inputs[3];
    }

}


if(isset($_POST['productType'])){
    $pr_Type = $_POST['productType'];
    $product = new $pr_Type();
    $product -> inputAttribute();
};




