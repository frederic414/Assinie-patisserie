<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Cart;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

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

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($produit, $id);
        Session::put('cart', $cart);

        return redirect('/catalogue');
    }

    

    public function panier()
    {
        if (!Session::has('cart')) {
            return view('client.panier');
        }

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
 

        return view('client.panier', ['produits' => $cart->items]);
    }

    public function select_par_cat($name)
    {
        $categories = Category::get();
        $produits = Product::where('product_category', $name)->where('status', 1)->paginate(1);

        return view('client.catalogue')->with('produits', $produits)->with('categories', $categories);
    }

    public function modifier_panier(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);
        Session::put('cart', $cart);

        return redirect('panier');
    }

    public function retirer_produit($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect::to('/panier');
    }

    public function catalogue()
    {
        
        $categories = Category::get();
        $produits = Product::where('status', 1)->paginate(2);
        return view('client.catalogue')->with('categories', $categories)->with('produits', $produits);
    }

    public function produit($id)
    {
        $produit = Product::where('status', 1)->find($id);
        return view('client.produit',['produit' => $produit]);
    }

    public function checkout()
    {
        if (!Session::has('client')) {
            return view('client.client-login');
        }
        if (!Session::has('cart')) {
            return view('client.panier');
        }

        return view('client.checkout');
    }

    public function client_login()
    {
        return view('client.client-login');
    }

    public function client_singup()
    {
        return view('client.client-singup');
    }

    public function creer_compte(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:clients',
            'password' => 'required|min:4'
        ]);
        $client = new Client();
        $client->email = $request->input(('email'));
        $client->password = bcrypt($request->input(('password')));

        $client->save();
        return back()->with('status', 'Votre compte à été creer avec succès !!!');
    }

    public function acceder_compte(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $client = Client::where('email', $request->input('email'))->first();

        if ($client) {
            if (Hash::check($request->input('password'), $client->password)) {
                Session::put('client', $client);
                return redirect('/catalogue');
            } else {
                return back()->with('status', 'Mot de passe ou email incorrecte');
            }
        } else {
            return back()->with('status', "Cet compte n'existe pas, veuillez creer un compte SVP!!!");
        }
    }


    public function client_logout()
    {
        Session::forget('client');
        return back();
    }


    public function confirmation(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $commande = new Commande();

        $payement_id = time();

        $commande->fullname = $request->input('name');
        $commande->adresse = $request->input('adresse');
        $commande->telephone = $request->input('telephone');
        $commande->date = $request->input('date');
        $commande->panier = serialize($cart);
        $commande->payer_id = $payement_id;
        $commande->statut_commande =0;

        $commande->save();

        Session::forget('cart');

        $commandes = Commande::where('payer_id', $payement_id)->get();

        $commandes->transform(function($commande, $key)
        {
            $commande->panier = unserialize($commande->panier);

            return $commande;
        });

        // $email = Session::get('client')->email;
        // Mail::to($email)->send(new SendMail($commandes));

        return redirect('/panier')->with('status', 'Votre commande a été effectuée avec succès');

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
