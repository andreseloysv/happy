<?php

include_once"/home/andreslaley/public_html/happy/controller/dao/dao.php";
include_once"../../controller/product/productController.php";
include_once"../../controller/event/eventController.php";
include_once"../../controller/user/userController.php";

class productEventUserController {

    function __construct() {
        
    }

    private function addData($returnObject) {
        $product = new product();
        $product->id = $returnObject[0]["id"];
        $product->id_event = $returnObject[0]["id_event"];
        $product->id_product = $returnObject[0]["id_product"];
        $product->id_user = $returnObject[0]["id_user"];
        $product->date_ini = $returnObject[0]["date_ini"];
        return $product;
    }

    private function addMultiData($returnObject) {
        $products = array();
        for ($index = 0; $index < count($returnObject); $index++) {
            $product = new product();
            $product->id = $returnObject[$index]["id"];
            $product->id_event = $returnObject[$index]["id_event"];
            $product->id_product = $returnObject[$index]["id_product"];
            $product->id_user = $returnObject[$index]["id_user"];
            $product->date_ini = $returnObject[$index]["date_ini"];
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

    public function findProduct($key, $value) {
        $productController = new productController();
        $productObject = $productController->findMe($key, $value);
        return $productObject;
    }

    public function addMe($id_event, $id_product, $id_user, $date_ini) {
        $dao = new dao();
        $product = array(
            "id_event" => $id_event,
            "id_product" => $id_product,
            "id_user" => $id_user,
            "date_ini" => $date_ini,
        );

        try {
            $returnObject = $dao->inster($product, "product");
        } catch (Exception $e) {
            throw new Exception("Failed product addMe: " . $e->getMessage());
        }
        return $this->addData($returnObject);
    }

}

?>