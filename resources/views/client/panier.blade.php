@extends('layouts.app1')
 
@section('contenu')
<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/image_3.jpg');">
	<div class="container">
	  <div class="row no-gutters slider-text align-items-center justify-content-center">
		<div class="col-md-9 ftco-animate text-center">
		  <h1 class="mb-0 bread">Mon panier</h1>
		</div>
	  </div>
	</div>
  </div>

  <section class="ftco-section ftco-cart">
		  <div class="container">
			  <div class="row">
			  <div class="col-md-12 ftco-animate">
				  <div class="cart-list">
					  <table class="table">
						  <thead class="thead-primary">
							<tr class="text-center">
							  <th>&nbsp;</th>
							  <th>&nbsp;</th>
							  <th>Nom du produit</th>
							  <th>Prix</th>
							  <th>Quantité</th>
							  <th>Total</th>
							</tr>
						  </thead>
						  <tbody>
						  		@if (Session::has('cart'))
									@foreach ($produits as $produit)
										<tr class="text-center">
											<td class="product-remove"><a href="{{URL::to('/retirer-produit/'.$produit['product_id'])}}"><span class="ion-ios-close"></span></a></td>
											
											<td class="image-prod"><div class="img" style="background-image:url(/storage/product_images/{{$produit['product_image']}});"></div></td>
											
											<td class="product-name">
												<h3>{{$produit['product_name']}}</h3>
												<p></p>
											</td>
											
											<td class="price">Fcfa{{$produit['product_price']}}</td>
											<form action="{{URL::to('/modifier-qty/'.$produit['product_id'])}}" method="POST">
												{{ csrf_field() }}
												<td class="quantity">
													<div class="input-group mb-3">
														<input type="number" name="quantity" class="quantity form-control input-number" value="{{$produit['qty']}}" min="1">
													</div>
													<input type="submit" value="Modifier" class="btn btn-outline-warning">
												</td>
											</form>
											
											<td class="total">Fcfa{{$produit['product_price']*$produit['qty']}}</td>
										</tr>
									@endforeach	
									@else
										@if (Session::has('status'))
											<div class="alert alert-success" role="alert">
												{{Session::get('status')}}
											</div>
										@endif
									@endif
								</tbody>
						</table>
					</div>
			  </div>
		  </div>
		  <div class="row justify-content-end">
			  <div class="col-lg-6 mt-5 cart-wrap ftco-animate">
				  <div class="cart-total mb-3">
					  <h3>Code coupon</h3>
					  <p>Entrer le code du coupon si vous en possedez</p>
			<form action="#" class="info">
				<div class="form-group">
					<label for="">Coupon code</label>
				  <input type="text" class="form-control text-left px-3" placeholder="">
				</div>
			</form>
				  </div>
				  <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
			  </div>
			  <div class="col-lg-6 mt-5 cart-wrap ftco-animate">
				  <div class="cart-total mb-3">
					  <h3>Totals panier</h3>
					  <p class="d-flex">
						  <span>Sous Total</span>
						  <span>$20.60</span>
					  </p>
					  <p class="d-flex">
						  <span>Livraison</span>
						  <span>$0.00</span>
					  </p>
					  <p class="d-flex">
						  <span>Remise</span>
						  <span>$3.00</span>
					  </p>
					  <hr>
					  <p class="d-flex total-price">
						  <span>Total</span>
						  <span>$17.60</span>
					  </p>
				  </div>
				  <p><a href="{{URL::to('/checkout')}}" class="btn btn-primary py-3 px-4">Valider la commande</a></p>
			  </div>
		  </div>
		  </div>
	  </section>

	  
<script>
	  $(document).ready(function(){

	  var quantitiy=0;
		 $('.quantity-right-plus').click(function(e){
			  
			  // Stop acting like a button
			  e.preventDefault();
			  // Get the field name
			  var quantity = parseInt($('#quantity').val());
			  
			  // If is not undefined
				  
				  $('#quantity').val(quantity + 1);

				
				  // Increment
			  
		  });

		   $('.quantity-left-minus').click(function(e){
			  // Stop acting like a button
			  e.preventDefault();
			  // Get the field name
			  var quantity = parseInt($('#quantity').val());
			  
			  // If is not undefined
			
				  // Increment
				  if(quantity>0){
				  $('#quantity').val(quantity - 1);
				  }
		  });
		  
	  });
  </script>
  
@endsection