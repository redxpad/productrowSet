<?php
require_once('crest.php');
$res = CRest::call('catalog.product.add', [
    'fields' => [
        'name' => 'test',
        'iblockId' => 23,
        'PROPERTY_414' => ['value' => 9999]
    ],
]);
