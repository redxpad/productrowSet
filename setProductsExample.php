<?php
require_once('easyBatch.php');

$setProducts = CRest::call('crm.deal.productrows.set', [
    'id' => 2610,
    'rows' => [
        ['PRODUCT_ID' => 1060, 'QUANTITY' => 4, 'PRICE' => 1000],
    ],
]);

$getProductRow = CRest::call('crm.deal.productrows.get', ['ID' => 2610]);
echo '<pre>';
print_r($getProductRow);