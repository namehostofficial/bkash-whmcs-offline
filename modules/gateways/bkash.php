<?php

# bKash Payment Gateway Module

if (!defined("WHMCS")) die("This file cannot be accessed directly");

function bkash_config() {
    $configarray = array(
     "FriendlyName" => array(
        "Type" => "System",
        "Value" => "bKash"
        ),
     "instructions" => array(
        "FriendlyName" => "Instructions",
        "Type" => "textarea",
        "Rows" => "5",
        "Value" => "bKash Number: 01XXXXXXXXX\nAccount Type: Personal or Merchant\nPayment Type: Send Money or Make Payment",
        "Description" => "The instructions you want displaying to customers who choose this payment method - the invoice number will be shown underneath the text entered above.",
        ),
    );
    return $configarray;
}

function bkash_link($params) {
    $code = '<p>'
        . nl2br($params['instructions'])
        . '<br />'
        . Lang::trans('invoicerefnum')
        . ': '
        . $params['invoicenum']
        . '</p>';
    return $code;
}
