<html>
    <body>
        <h3>Your First PHP Program</h3>
        <h1>Hello, from Villanueva</h1> 
    </body>
</html>
<?php
echo "Hello, World!"; 
?>
<br>
<html>
    <body>
        <h3>PHP Variables</h3> 
    </body>
</html>
<?php
$x = 15;
$y = 3;
$sum = $x + $y;
echo "The sum is $sum. <br>";
?>
<html>
    <body>
        <h3>Simple Arithmetic Operations</h3> 
    </body>
</html>
<?php 
$diff = $x - $y;
$product = $x * $y;
$quotient = $x / $y;
    echo "The difference is $diff. <br>";
    echo "The product is $product. <br>";
    echo "The quotient is $quotient. <br>";
?>
<html>
    <body>
        <h3>Conditional Statement</h3> 
    </body>
</html>
<?php
if($x % $y == 0){
    echo "$y is a factor of $x. <br>";
} else {
    echo "$y is not a factor of $x. <br>";
}
?>
<html>
    <body>
        <h3>PHP Loops</h3> 
    </body>
</html>
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        echo "$i,";
    }   
}
?>
<br>
<html>
    <body>
        <h3>Arrays</h3> 
    </body>
</html>
<?php
    $products = array("Product A", "Product B", "Product C");
    var_dump($products);
?>
<br>
<?php
    $products = array("Product A", "Product B", "Product C");
    echo $products[0];
?>
<br>
<?php
    $products = array("Product A", "Product B", "Product C");
    foreach ($products as $p) {
    echo "$p <br>";
}
?>
<?php
    $products = array("name" => "Product A", "price" => 10.50, "stock" => 12);
    echo $products["name"];
?>
<br>
<?php
    $products = array(
        array("name" => "Product A", "price" => 10.50, "stock" => 12),
        array("name" => "Product B", "price" => 5.60, "stock" => 7),
        array("name" => "Product C", "price" => 7.00, "stock" => 5)
);
foreach ($products as $p){
    echo $p["name"] . " is " . $p["price"] . " pesos <br>";
}
?>
