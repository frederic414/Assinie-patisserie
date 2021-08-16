@extends('layouts.app1')

@section('contenu')

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <div class="container">
        <div class="row my-3">
            <!-- Image -->
            <div class="col-12 col-lg-6">
                <div class="card  mb-1">
                    <div class="card-body">
                            <img class="img-fluid img-thumbnail img-rounded" src="/storage/product_images/{{$produit->product_image}}" />
                            <h4 class="card-title text-center">{{$produit['product_name']}}</h4>
                    </div>
                </div>
            </div>

            <!-- Add to cart -->
            <div class="col-12 col-lg-6 add_to_cart_block my-5">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="price text-center">
                            <td class="total"><span class="badge badge-secondary btn-lg">{{$produit['product_price']}} Fcfa</span></td>
                        </p>
                            <a href="/ajouter-au-panier/{{$produit->id}}" class="btn btn-danger btn-lg btn-block text-uppercase">
                                <i class="fa fa-shopping-cart"></i> Ajouter au panier
                            </a>
                        <div class="product_rassurance my-3 text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>Livraison rapide</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   @if (count($produit->recommandations) > 0)
        <div class="container">
            <hr>
            <h2 class="text-center"> <li class="fa fa-eye"></li> Voir aussi</h2>       
                <div class="row">
                    @foreach ($produit->recommandations as $produit_recommande)
                        @if ($produit_recommande->status ==1)
                            <div class="col-md-4 col-6">
                                <div class="card mb-4 box-shadow">
                                    <div class="card-body">
                                        <a href="/catalogue/produit/{{$produit_recommande->id}}">
                                            <img class="card-img-top" src="/storage/product_images/{{$produit_recommande->product_image}}" alt="Card image cap">
                                            <h4 class="card-title">{{$produit_recommande->product_name}} </h4>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        @endif
                    @endforeach 
                </div>     
        </div>
   @endif 
@endsection

