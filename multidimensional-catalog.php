
<?php include("my-functions.php");?>

<?php
$products = [
        [
        "name" => "iPhone",
        "price" => 450,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-family-hero?wid=940&hei=1112&fmt=png-alpha&.v=1631220221000"
    ],
         [
        "name" => "iPad",
        "price" => 650,
        "weight" => 350,
        "discount" => 10,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-pro-12-11-select-202104_GEO_FR_FMT_WHH?wid=2000&hei=2000&fmt=jpeg&qlt=80&.v=1617865124000"

    ],
        [
        "name" => "iMac",
        "price" => 1500,
        "weight" => 850,
        "discount" => 10,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-pro-12-11-select-202104_GEO_FR_FMT_WHH?wid=2000&hei=2000&fmt=jpeg&qlt=80&.v=1617865124000"



    ]
    ];

    foreach($products as $values => $details ){
        echo $values .' - ' . $details .'<br>';
    }

    foreach($details as $detail){
        echo $detail .'<br>';
    }

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