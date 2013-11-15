<?php

require(dirname(__dirname__).'/class.RestProxy.php');

$proxy = new RESTProxy();
$proxy->setHost('https://redmine.silpion.de');

$proxy->doRequest();
