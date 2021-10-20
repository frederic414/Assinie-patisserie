<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use\App\Models\Commentaire;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = Client::select('id', 'created_at')->get()->groupBy(function($data){
            return Carbon::parse($data->created_at)->format('H');  
         });
         $hours = [];
         $hourCount = [];
         foreach($data as $hour => $values){
             $hours[] = $hour;
             $hourCount[] = count($values);
         }
        $client = Client::All();
        $commandes = Commande::All();
        $commande_traite[]= Commande::where('status_commande',"1");
        $commande_non_traite[] = Commande::where('status_commade',"0");
        $nb_com_traite = count($commande_traite);
        $nb_com_non_traite = count($commande_non_traite);
        $nombre_clients = count($client);
        $nombre_commandes = count($commandes);
        return view('admin.dashboard')
            ->with('nb_client', $nombre_clients)
            ->with('nb_commande', $nombre_commandes)
            ->with('nb_com_traite', $nb_com_traite)
            ->with('nb_com_non_traite', $nb_com_non_traite)
            ->with('data', $data)
            ->with('hours', $hours)
            ->with('hourCount', $hourCount);
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

    public function commentaires(){
        $commentaire = Commentaire::get();
        return view('admin.commentaires')->with('commentaire', $commentaire);
    }

    public function supprimer_commentaire($id)
    {
        $commentaire = Commentaire::find($id);
        $commentaire->delete();

        return back()->with('status', 'Le commentaire a été supprimé avec succes. ');

    }

    public function poster_commentaire($id)
    {
        $commentaire = Commentaire::find($id);
        $commentaire->approuve = 1;

        $commentaire->update();

        return back()->with('status', 'Le commentaire a été posté avec succès!');

    }

    public function desactiver_commentaire($id)
    {
        $commentaire = Commentaire::find($id);
        $commentaire->approuve = 0;

        $commentaire->update();

        return back()->with('status', 'Le commentaire a été désactivé!');

    }

}
