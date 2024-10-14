<?php

require_once __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = " Add stripe secret code";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/PoweZoneFit/success.php",
   
    
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "inr",
                "unit_amount" => 799900,
                "product_data" => [
                    "name" => "6 month plan"
                ]
            ]
        ]
    ]
]);

http_response_code(303);
header("location: ".$checkout_session->url);
