<?php
require_once('crest.php');
$product = CRest::call('crm.product.list', [
    'FILTER' => ['PROPERTY_414' => 9999],
    'SELECT' => ['*', 'PROPERTY_414'],
]);