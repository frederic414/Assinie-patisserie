@extends('layouts.appadmin')

@section('title')
    Commandes
@endsection
{!!Form::hidden('', $increment =1)!!}

@section('contenu')

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Commandes</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Date</th>
                        <th>Nom du clients</th>
                        <th>Adresse</th>
                        <th>telephone</th>
                        <th>Date livraison</th>
                        <th>Panier</th>  
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($commandes as $commande)
                      <tr>
                        <td>{{$increment}}</td>
                        <td>{{$commande->created_at}}</td>
                        <td>{{$commande->fullname}}</td>
                        <td>{{$commande->adresse}}</td>
                        <td>{{$commande->telephone}}</td>
                        <td>{{$commande->date}}</td>
                        <td>
                          @foreach ($commande->panier->items as $item)
                              {{$item['product_name']. ' , '}}
                          @endforeach
                        </td>
                        
                        <td>
                          <a href="{{url('/commande_pdf/'.$commande->id)}}"><button class="btn btn-outline-primary">View</button></a>
                        </td>
                      </tr>
                      {!!Form::hidden('', $increment++)!!}
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('scripts')
    <script src="backend/js/data-table.js"></script>
@endsection