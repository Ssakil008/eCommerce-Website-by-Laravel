<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view("product",["products"=>$data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view("detail",['product'=>$data]);
    }
    function search(Request $request)
    {
        $data = Product::
        where('name','like','%',$request->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function add_to_cart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login'); 
        }
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cart_list()
    {
        $userId=Session::get('user')['id'];
        $products=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id', $userId)
        ->select('products.*', 'carts.id as cart_id')
        ->get();
        
        return view('cart_list',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cart_list');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id', $userId)
        ->select('products.*', 'carts.id as cart_id')
        ->sum('products.price');
        
        return view('ordernow',['total'=>$total]); 
    }
    function placeOrder(Request $request)
    {
        $userId = Session::get('user')['id'];
        $allcart = Cart::where('user_id', $userId)->get();
        foreach($allcart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status='pending';
            $order->payment_method = $request->payment;
            $order->payment_status = 'pending';
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect("/");
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id', $userId)        
        ->get();
        
       return view('myorders',['orders'=>$orders]); 
    }
}
 