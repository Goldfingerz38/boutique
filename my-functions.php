<?php

function formatPrice($cents){
    $price = $cents / 100 ;
    echo $price ;
}

function priceExcludingVAT($prix_TTC){
    $price_HT = (100 * $prix_TTC) / (100 * 1.18);
    return $price_HT;
}

function displayDiscountedPrice($price, $discount){
    $total = $price - ($price * ($discount/100));
    return $total;
};
