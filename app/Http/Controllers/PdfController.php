<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use Session;

class PdfController extends Controller
{
    //

    public function voir_pdf($id){

        Session::put('id', $id);
        try{
            $pdf = \App::make('dompdf.wrapper')->setPaper('a4', 'landscape');
            $pdf->loadHTML($this->convert_orders_data_to_html());

            return $pdf->stream();
        }
        catch(\ Exception $e){
            return redirect('/commandes')->with('error', $e->getMessage());
        }
    }

    public function convert_orders_data_to_html(){

        $commandes = Commande::where('id',Session::get('id'))->get();

        foreach($commandes as $commande){
            $name = $commande->fullname;
            $address = $commande->adresse;
            $telephone = $commande->telephone;
            $livraison = $commande->date;
            $date = $commande->created_at;
        }

        $commandes->transform(function($commande, $key){
            $commande->panier = unserialize($commande->panier);

            return $commande;
        });

        $output = '<link rel="stylesheet" href="frontend/css/style.css">
                        <table class="table">
                            <thead class="thead">
                                <tr class="text-left">
                                    <th>Date de commande : '.$date.' <br> Nom du client : '.$name.'<br> Adresse du client : '.$address.' <br> Contact : '.$telephone.' <br>  Date de livraison: '.$livraison.'</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>Image</th>
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>';
        
        foreach($commandes as $commande){
            foreach($commande->panier->items as $item){

                $output .= '<tr class="text-center">
                                <td class="image-prod"><img src="storage/product_images/'.$item['product_image'].'" alt="" style = "height: 80px; width: 80px;"></td>
                                <td class="product-name">
                                    <h3>'.$item['product_name'].'</h3>
                                </td>
                                <td class="price">Fcfa  '.$item['product_price'].'</td>
                                <td class="qty">'.$item['qty'].'</td>
                                <td class="total">Fcfa '.$item['product_price']*$item['qty'].'</td>
                            </tr><!-- END TR-->
                            </tbody>';

            }

            $totalPrice = $commande->panier->totalPrice; 

        }

        $output .='</table>';

        $output .='<table class="table">
                        <thead class="thead">
                            <tr class="text-center">
                                    <th>Total</th>
                                    <th>Fcfa '.$totalPrice.'</th>
                            </tr>
                        </thead>
                    </table>';


        return $output;
                
    }
}