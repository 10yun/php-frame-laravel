<?php
$functionArr = glob(__DIR__ . '/function/*.php');
foreach ($functionArr as $val) {
    include_once $val;
}