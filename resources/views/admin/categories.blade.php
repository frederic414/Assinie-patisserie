@extends('layouts.appadmin')

@section('title')
    Catéories
@endsection
{!!Form::hidden('', $increment =1)!!}

@section('contenu')
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Catégories</h4>
          @if (Session::has('status'))
                         <div class="alert alert-success">
                             {{Session::get('status')}}
                         </div>
                        @endif

                        @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                            
           @endif
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Nom de la catégorie</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $categorie)
                    <tr>
                      <td>{{$increment}}</td>
                      <td>{{$categorie->category_name}}</td>
                      <td>
                        <button class="btn btn-outline-primary" onclick="window.location = '{{url('/edit_categorie/'.$categorie->id)}}'">Editer</button>
                        <button class="btn btn-outline-danger"><a href="{{url('/supprimercategorie/'.$categorie->id)}}" id="delete">Supprimer</a></button>
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