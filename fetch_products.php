<?php
    header('Content-Type: application/json');

    $host = "localhost";
    $dbname = "tresbrujas";
    $username = "root";
    $password = "";

    $conn = new mysqli($host, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error){
        die(json_encode(["error" => "Connection failed:".$conn -> connect_error]));
    }

    //fetch products
    $result = $conn->query("SELECT productID, productName, productPrice, productImage FROM products");

    if($result->num_rows > 0){
        $products = [];
        while($row = $result->fetch_assoc()){
            $row['productImage'] = base64_encode($row['productImage']);
            $products[] = $row;
        }
        echo json_encode($products);
    } else {
        echo json_encode([]);
    }

    $conn->close();
?>