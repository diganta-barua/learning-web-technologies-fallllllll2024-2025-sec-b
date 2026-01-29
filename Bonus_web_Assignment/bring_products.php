<?php
require_once 'db.php';
$data = json_decode(file_get_contents('php://input'), true);


if(isset($data['action'])){
    if($data['action'] === 'bring_products'){
        $products = read("SELECT * ,(selling_price-buying_price) as profit FROM `product` where display ='yes';");
        echo json_encode($products);
    }
    else {
        $search_term = $data['action'];
        $products = read("SELECT * ,(selling_price-buying_price) as profit FROM `product` where display ='yes' AND name LIKE '%$search_term%';");
        echo json_encode($products);
    }
}

?>