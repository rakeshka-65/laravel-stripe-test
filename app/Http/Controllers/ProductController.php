<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\PaymentIntent;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(20);

        return view("home")->with('products', $products);
    }

    public function view(Product $product){
        return view("view", ["product"=>$product]);
    }

    public function process(Request $request, Product $product)
    {
        $token = $request->input('stripeToken');
//echo $product->name;
      /*  $charge = Stripe::charges()->create([
            'amount' => $product->price, // convert to cents
            'currency' => 'USD', // adjust accordingly
            'source' => $token,
            'description' => 'Purchase of ' . $product->name,
        ]);*/

        //dd($request->all());

        // Handle successful payment, e.g., update orders table, send email, etc.
        $order = new Order();
        $order->user_id = $request->user()->id;
        $order->product_name = $product->name;
        $order->stripe_id = $request->input('stripeToken');
        $order->product_id = $request->input('product_id');
        $order->price = $product->price;
        $order->quantity   = 1;
        $order->save();
        return redirect()->route('home')->with('status', 'Payment successful!');
    }

    public function checkoutSuccess()
    {
        return view('success');
    }

    public function checkoutCancel()
    {
        return view('checkout-cancel');
    }
}
