<?php

namespace App\Http\Controllers;

class StripeTest extends Controller {
  // Test Stripe Api keys

  public function index() {
    try {
      \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      \Stripe\Customer::all(['limit' => 1]);
      echo 'Stripe is configured correctly';
    } catch(\Exception $e) {
      echo 'Stripe configuration error ' . $e->getMessage();
    }
  }
}
