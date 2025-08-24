<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Dynamic Table</h3>

<?php
    $products = array(
        array("name" => "Product A", "price" => 10.50, "stock" => 12),
        array("name" => "Product B", "price" => 5.60, "stock" => 7),
        array("name" => "Product C", "price" => 7.00, "stock" => 5),
        array("name" => "Product D", "price" => 38.25, "stock" => 78),
        array("name" => "Product E", "price" => 20.00, "stock" => 26),
        array("name" => "Product F", "price" => 8.25, "stock" => 15),
    );
?>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <?php
            $no = 1; 
            foreach ($products as $p){
                $lowStock = $p["stock"] < 10 ? "low-stock" : "";
        ?>
            <tr class="<?= $lowStock ?>">
                <td><?= $no++ ?></td>
                <td><?= ($p["name"]) ?></td>
                <td><?= ($p["price"]) ?></td>
                <td><?= ($p["stock"]) ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
