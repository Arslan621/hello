<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $totalPrice = $_POST["totalPrice"];
    $salesTaxRate = $_POST["salesTaxRate"];
    $totalSalesTax = $_POST["totalSalesTax"];
    echo "Received Data:<br>";
    echo "Total Price: " . $totalPrice . "<br>";
    echo "Sales Tax Rate: " . $salesTaxRate . "<br>";
    echo "Total Sales Tax: " . $totalSalesTax . "<br>";
} else {
    echo "Invalid Request";
}
