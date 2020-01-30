<?php

//get the data from the form
$product_description = filter_input(INPUT_POST, 'product_description');
$list_price = filter_input(INPUT_POST, 'list_price');
$discount_percent = filter_input(INPUT_POST, 'discount_percent');

//calculate the discount and discounted price
$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;
$tax_rate = 0.08;
$tax_amount = $discount_price * $tax_rate;

//apply currency format and percent format
$list_price_f = "$".number_format($list_price, 2);
$discount_percent_f = $discount_percent . "%";
$discount_f = "$".number_format($discount, 2);
$discount_price_f = "$".number_format($discount_price, 2);
$tax_rate_f = number_format($tax_rate*100)."%";
$tax_amount_f = "$".number_format($tax_amount, 2);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <h1> Product Discount Calculator</h1>
        
        <label> Product Description </label>
        <span> <?php echo htmlspecialchars($product_description); ?> </span>   
        <br>

        <label> List Price </label>
        <span> <?php echo htmlspecialchars($list_price_f); ?> </span>   
        <br>

        <label> Standard Discount </label>
        <span> <?php echo htmlspecialchars($discount_percent_f); ?> </span>   
        <br>

        <label> Discount Amount </label>
        <span> <?php echo htmlspecialchars($discount_f); ?> </span>   
        <br>

        <label> Discounted Price </label>
        <span> <?php echo htmlspecialchars($discount_price_f); ?> </span>   
        <br>
        <br>
        <label> Sales Tax Rate </label>
        <span> <?php echo htmlspecialchars($tax_rate_f); ?> </span>   
        <br>
        <label> Sales Tax Amount </label>
        <span> <?php echo htmlspecialchars($tax_amount_f); ?> </span>   
        <br>

        

    </body>
</html>