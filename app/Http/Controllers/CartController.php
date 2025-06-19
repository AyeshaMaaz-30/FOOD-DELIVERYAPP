<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = (int) $request->input('quantity', 1);

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                "name" => $name,
                "price" => $price,
                "quantity" => $quantity
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function show()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function update(Request $request, $id, $action)
    {
        $cart = session()->get('cart', []);

        if(!isset($cart[$id])) {
            return redirect()->back()->with('error', 'Item not found in cart!');
        }

        if($action === 'increase') {
            $cart[$id]['quantity']++;
        } elseif($action === 'decrease') {
            $cart[$id]['quantity']--;
            if($cart[$id]['quantity'] <= 0) {
                unset($cart[$id]);
            }
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removed from cart!');
    }
}
