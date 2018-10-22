<?php

require_once('hash-system/hash-system.php');

// Instantiate the class
$hashSystem = new HashSystem();

// Run the test method
echo $hashSystem->test();

// Run the unhash method on a specific string and echo the results
echo $hashSystem->custom_unhash('917622709512878');