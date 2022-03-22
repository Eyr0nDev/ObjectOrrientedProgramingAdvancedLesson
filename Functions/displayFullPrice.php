<?php

function displayFullPrice(Product $product): void
{
    echo $product->getFullPrice().'€';
}