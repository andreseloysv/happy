<?php

include_once"/home/andreslaley/public_html/happy/controller/dao/dao.php";
include_once"../../model/product/product.php";

class productController {

    function __construct() {
        
    }

    private function addData($returnObject) {
        $product = new product();
        $product->id = $returnObject[0]["id"];
        $product->name = $returnObject[0]["name"];
        $product->date_ini = $returnObject[0]["date_ini"];
        $product->picture = $returnObject[0]["picture"];
        if ($returnObject[0]["picture"] === "") {
            $product->picture = "default-product-pic.png";
        } else {
            $product->picture = $returnObject[0]["picture"];
        }
        return $product;
    }

    private function addMultiData($returnObject) {
        $products = array();
        for ($index = 0; $index < count($returnObject); $index++) {
            $product = new product();
            $product->id = $returnObject[$index]["id"];
            $product->name = $returnObject[$index]["name"];
            $product->date_ini = $returnObject[$index]["date_ini"];
            $product->picture = $returnObject[$index]["picture"];
            if ($returnObject[$index]["photo"] === "") {
                $product->picture = "default-product-pic.png";
            } else {
                $product->picture = $returnObject[$index]["picture"];
            }
            array_push($products, $product);
        }
        return $products;
    }

    public function findMe($key, $value) {
        $dao = new dao();
        $returnObject = $dao->queryFindObject($key, $value, "product");
        if (count($returnObject) > 1) {
            return $this->addMultiData($returnObject);
        } else {
            return $this->addData($returnObject);
        }
    }

    public function addMe($nick, $password, $email, $name) {
        $dao = new dao();
        $product = array(
            "nick" => $nick,
            "password" => $password,
            "email" => $email,
            "name" => $name,
        );

        try {
            $returnObject = $dao->inster($product, "product");
        } catch (Exception $e) {
            throw new Exception("Failed product addMe: " . $e->getMessage());
        }
        return $this->addData($returnObject);
    }

    public function addPhoto($photo,$product_id) {
        $dao = new dao();
        try {
            $dao->edit("product","photo",$photo,"id",$product_id);
        } catch (Exception $e) {
            throw new Exception("Failed addging url picture message: " . $e->getMessage());
        }
    }
}

?>