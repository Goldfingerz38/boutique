<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("my-functions.php");?>



<?php
$iphone = [
    "name" =>"iPhone",
    "price"=> 45000,
    "weight" => 200,
    "discount" =>10,
    "picture" => "<img src= \"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-family-hero?wid=940&hei=1112&fmt=png-alpha&.v=1631220221000\">"];
//echo implode("<br>", $iphone);

$ipad = [
    "name" => "iPad",
    "price" => 65000,
    "weight" => 350,
    "discount" =>10,
    "picture" => "<img src= \"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-pro-12-11-select-202104_GEO_FR_FMT_WHH?wid=2000&hei=2000&fmt=jpeg&qlt=80&.v=1617865124000\">"];
//echo implode("<br>", $ipad);

$iMac = [
    "name" => "iMac",
    "price" => 150000,
    "weight" => 850,
    "discount" =>10,
    "picture" => '<img src= "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/refurb-2019-imac-215-gallery?wid=1000&hei=1000&fmt=jpeg&qlt=95&.v=1559961087778">'];
//echo implode("<br>", $iMac);

echo "<h1> ${iphone["name"]} </h1>";
echo "<h2> ${iphone["price"]} </h2>";


$prixHT = priceExcludingVAT($iphone["price"]);
formatPrice($prixHT);

$prixHT = priceExcludingVAT($ipad["price"]);
formatPrice($prixHT);

$prixHT = priceExcludingVAT($imac["price"]);
formatPrice($prixHT);


$discounted_price = displayDiscountedPrice($iphone["discount"], $discount);

$discounted_price = displayDiscountedPrice($ipad["discount"], $discount);

$discounted_price = displayDiscountedPrice($iMac["discount"], $discount);


?>
  
</body>
</html>
