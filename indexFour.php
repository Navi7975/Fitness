<?php

require_once __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51PBepaSHpUEHAc6pBcYEex4cahkrlJ4x5c3KONZxIF6OwV1S4lHTYkViO00QU5d7W2kAuSM7ATjJbgsg7ALn5eAF009XP0LdqK";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/PoweZoneFit/success.php",
    
    
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "inr",
                "unit_amount" => 229900,
                "product_data" => [
                    "name" => "Whey Isolate"
                ]
            ]
        ]
    ]
]);

http_response_code(303);
header("location: ".$checkout_session->url);
