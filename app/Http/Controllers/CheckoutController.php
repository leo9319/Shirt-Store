<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // public function step1()
    // {
    // 	 if(Auth::check()) 
    // 	 {
    // 	 	return redirect()->route('checkout.shipping');
    // 	 }

    // 	 return redirect('login');
    // }

    public function shipping() 
    {
    	return view('front.shipping-info');
    }

    public function payment() 
    {
        return view('front.payment');
    }

    public function storePayment(Request $request) 
    {
        // // Set your secret key: remember to change this to your live secret key in production
        // // See your keys here: https://dashboard.stripe.com/account/apikeys
        // \Stripe\Stripe::setApiKey("sk_test_2kC4oKHhrFWmcKKsN7SLSmKv");

        // // Token is created using Stripe.js or Checkout!
        // // Get the payment token submitted by the form:
        // $token = $request->stripeToken;


        // // Charge the user's card:
        // try {
        //     $charge = \Stripe\Charge::create(array(
        //         "amount" => Cart::total()*100, // Amount in cents
        //         "currency" => "usd",
        //         "source" => $token,
        //         "description" => "Example charge",
                
        //     ));
        // } catch (\Stripe\Error\Card $e) {
        //     // The card has been declined
        // }
        // dd($request->all());
        

        

        
        Order::createOrder();
        return "Payment & Order Completed!";
    }
}
