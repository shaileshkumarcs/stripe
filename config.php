<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_A8r4rGLQVjayYMdUkcOwJfER",
  "publishable_key" => "pk_test_oHLwXkpHgJ6d8NJkXQXKQA6J"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>