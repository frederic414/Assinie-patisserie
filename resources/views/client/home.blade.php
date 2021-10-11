@extends('layouts.app1')

@section('contenu')

<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		@foreach ($sliders as $slider)
			<div class="slider-item" style="background-image: url(storage/slider_images/{{$slider->slider_image}});">
			<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

			<div class="col-md-12 ftco-animate text-center">
				<h1 class="">{{$slider->description1}}</h1>
				<h2 class="subheading mb-4">{{$slider->description2}}</h2>
			</div>

			</div>
		</div>
		</div>
		@endforeach
	</div>
</section>

<section class="ftco-section">
	  <div class="container">
		  <div class="row no-gutters ftco-services">
	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	  <div class="media block-6 services mb-md-0 mb-4">
		<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
			  <span class="flaticon-shipped"></span>
		</div>
		<div class="media-body">
		  <h3 class="heading">Livraison partout dans la ville de Ouagadougou</h3>
		  <span>A partir de 1000frs</span>
		</div>
	  </div>      
	</div>
	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	  <div class="media block-6 services mb-md-0 mb-4">
		<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
			  <span class="flaticon-diet"></span>
		</div>
		<div class="media-body">
		  <h3 class="heading">Toujours frais</h3>
		  <span>Toujours bien emballé</span>
		</div>
	  </div>    
	</div>
	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	  <div class="media block-6 services mb-md-0 mb-4">
		<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
			  <span class="flaticon-award"></span>
		</div>
		<div class="media-body">
		  <h3 class="heading">Qualité superieure</h3>
		  <span>Produit de qualité</span>
		</div>
	  </div>      
	</div>
	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	  <div class="media block-6 services mb-md-0 mb-4">
		<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
			  <span class="flaticon-customer-service"></span>
		</div>
		<div class="media-body">
		  <h3 class="heading">Support</h3>
		  <span>Disponible 24/7</span>
		</div>
	  </div>      
	</div>
  </div>
	  </div>
  </section>

  <section class="ftco-section ftco-category ftco-no-pt">
	  <div class="container">
		  <div class="row">
			  <div class="col-md-8">
				  <div class="row">
					  <div class="col-md-6 order-md-last align-items-stretch d-flex">
						  <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(frontend/images/img.jpg);">
							  <div class="text text-center">
								  <h2>Patisserie & Restaurant</h2>
								  <p>Deguster avec douceur</p>
								  <p><a href="{{URL::to('/catalogue')}}" class="btn btn-primary">Acheter maintenant</a></p>
							  </div>
						  </div>
					  </div>
					  <div class="col-md-6">
						  <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/img1.jpg);">
							  <div class="text px-3 py-1">
								  <h2 class="mb-0"><a href="#">Gateaux</a></h2>
							  </div>
						  </div>
						  <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/img2.jpg);">
							  <div class="text px-3 py-1">
								  <h2 class="mb-0"><a href="#">Genoise</a></h2>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>

			  <div class="col-md-4">
				  <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/img3.jpg);">
					  <div class="text px-3 py-1">
						  <h2 class="mb-0"><a href="#">Restaurations</a></h2>
					  </div>		
				  </div>
				  <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/product-8.jpg);">
					  <div class="text px-3 py-1">
						  <h2 class="mb-0"><a href="#">Jus Naturel</a></h2>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
  </section>

<section class="ftco-section">
  <div class="container">
		  <div class="row justify-content-center mb-3 pb-3">
	<div class="col-md-12 heading-section text-center ftco-animate">
		<span class="subheading">Les plus populaires</span>
	  <h2 class="mb-4">Autres produits</h2>
	  <p>Decouvrer notre large game de produits que nous proposons afin de vous faire deguster au meilleur de la restauraton et de la patisserie</p>
	</div>
  </div>   		
  </div>
  <div class="container">
	  <div class="row">

		@foreach ($produits as $produit)
			<div class="col-md-6 col-lg-4 col-6 ftco-animate">
				<div class="product">
					<a href="/catalogue/produit/{{$produit->id}}" class="img-prod"><img class="img-fluid" src="storage/product_images/{{$produit->product_image}}" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="/catalogue/produit/{{$produit->id}}">{{$produit->product_name}}</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>{{$produit->product_price}} Fcfa</span></p>
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
  </div>
{{-- </section>
  
  <section class="ftco-section img" style="background-image: url(frontend/images/img12.jpg);">
  <div class="container">
	<div class="row justify-content-end">
	<div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
		<span class="subheading">Promotion</span>
	  <h2 class="mb-4">Deal du weekend</h2>
	  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
	  <h3><a href="#">Gateaux d'annverssaire</a></h3>
	  <span class="price">$10 <a href="#">maintant $5</a></span>
	  <div id="timer" class="d-flex mt-5">
					<div class="time" id="days"></div>
					<div class="time pl-3" id="hours"></div>
					<div class="time pl-3" id="minutes"></div>
					<div class="time pl-3" id="seconds"></div>
		</div>
	</div>
  </div>   		
  </div>
</section> --}}

<section class="ftco-section testimony-section">
<div class="container">
  <div class="row justify-content-center mb-5 pb-3">
	<div class="col-md-7 heading-section ftco-animate text-center">
		<span class="subheading">Temoignages</span>
	  <h2 class="mb-4">Ce que les clients disent</h2>
	  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
	</div>
  </div>
  <div class="row ftco-animate">
	<div class="col-md-12">
	  <div class="carousel-testimony owl-carousel">
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/person_1.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">Marketing Manager</span>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/person_2.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">Interface Designer</span>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/person_3.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">UI Designer</span>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/person_1.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">Web Developer</span>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/person_1.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">System Analyst</span>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
</section>

<hr>
	
@endsection