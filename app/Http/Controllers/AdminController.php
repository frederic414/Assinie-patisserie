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


    public function commande_traiter($id)
    {
        $commande = Commande::find($id);

        $commande->statut_commande = 1;
        $commande->update();

        return redirect('/admin/commandes');
    }

    public function commande_non_traiter($id)
    {
        $commande = Commande::find($id);

        $commande->statut_commande = 0;
        $commande->update();

        return redirect('/admin/commandes');
    }
}
