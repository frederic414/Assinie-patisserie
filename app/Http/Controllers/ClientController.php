<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('slider_status', 1)->get();
        $produits = Product::where('status', 1)->get();
        return view('client.home')->with('sliders', $sliders)->with('produits', $produits);
    }

    public function ajouter_au_panier($id)
    {
        $produit = Product::find($id);

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($produit, $id);
        Session::put('cart', $cart);

        return redirect('/catalogue');
        
    }

    public function panier()
    {
        if(!Session::has('cart')){
            return view('client.panier');
        }

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);

        return view('client.panier', ['produits' => $cart->items]);
    
    }

    public function select_par_cat($name)
    {
        $categories = Category::get();
        $produits = Product::where('product_category', $name)->where('status', 1)->get();

        return view('client.catalogue')->with('produits', $produits)->with('categories', $categories);

    }

    public function modifier_panier(Request $request, $id)
    {
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);
        Session::put('cart', $cart);

        return redirect('panier');
    }

    public function retirer_produit($id)
    {
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
       
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect::to('/panier');
    }

    public function catalogue()
    {
        $categories = Category::get();
        $produits = Product::where('status', 1)->get();
        return view('client.catalogue')->with('categories', $categories)->with('produits', $produits);
    }

    public function checkout()
    {
        if(!Session::has('cart')){
            return view('client.panier');
        }
        
        return view('client.checkout');
    }

    public function client_login()
    {
        return view('client.client-login');
    }

    public function apropos()
    {
        return view('client.apropos');
    }

    public function Contactez_nous()
    {
        return view('client.contactez-nous');
    }
}
