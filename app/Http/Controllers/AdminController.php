<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function commande()
    {
        $commandes = Commande::all();

        $commandes->transform(function($commande, $key){
            $commande->panier = unserialize($commande->panier);
            return $commande;
        });
        return view('admin.commande')->with('commandes', $commandes);
    }
}
