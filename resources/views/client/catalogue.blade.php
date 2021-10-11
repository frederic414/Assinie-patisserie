@extends('layouts.app1')

@section('contenu')
	
	<div class="hero-wrap hero-bread" style="background-image: url('/frontend/images/image_1.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
					<h1 class="mb-0 bread">Products</h1>
				</div>
			</div>
		</div>
	</div>

  	<section class="ftco-section">
	  	<div class="container">
		  	<div class="row justify-content-center">
			  	<div class="col-md-10 mb-5 text-center">
				  	<ul class="product-category">
					  	<li><a href="{{URL::to('/catalogue')}}" class="{{ Request::is('/catalogue') ? '' : ''}}">Tout</a></li>
					  	@foreach ($categories as $categorie)
					  		<li><a href="/select-par-cat/{{$categorie->category_name}}" class="{{Request::is('/select-par-cat/'.$categorie->category_name) ? 'active' : ''}}">{{$categorie->category_name}}</a></li>
					  	@endforeach
				  	</ul>
			  	</div>
		  	</div>
		  <div class="row">			  
			  	@foreach ($produits as $produit)
				  	<div class="col-6 col-md-6 col-lg-4 ftco-animate">
						<div class="product">
							<a href="/catalogue/produit/{{$produit->id}}" class="img-prod"><img class="img-fluid img-thumbnail img-rounded" src="/storage/product_images/{{$produit->product_image}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="/catalogue/produit/{{$produit->id}}">{{$produit->product_name}}</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span>Fcfa{{$produit->product_price}}</span></p>
									</div>
								</div>
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										<a href="/catalogue/produit/{{$produit->id}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
											<span><i class="ion-ios-menu"></i></span>
										</a>
										<a href="/ajouter-au-panier/{{$produit->id}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
											<span><i class="ion-ios-cart"></i></span>
										</a>
										<a href="#" class="heart d-flex justify-content-center align-items-center ">
											<span><i class="ion-ios-heart"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach			  
		  </div>
		<div class="row mt-5">
			<div class="col text-center text-danger">
				<div class="d-flex justify-content-center text-danger ">
					{{ $produits->links() }}
				</div>
			</div>
	  	</div>
  	</section>
 
@endsection