@extends('layouts.appadmin')

@section('title')
    Commentaires
@endsection
{!!Form::hidden('', $increment =1)!!}

@section('contenu')
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Commentaires</h4>
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
                        <th>email</th>
                        <th>Commentaire</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($commentaire as $commentaire)
                    <tr>
                      <td>{{$increment}}</td>
                      <td>{{$commentaire->email_client}}</td>
                      <td>{{$commentaire->commentaire}}</td>
                      <td>
                        
                        <button class="btn btn-outline-danger"><a href="{{url('/admin/supprimer_commentaire/'.$commentaire->id)}}" id="delete">Supprimer</a></button>
                        @if ($commentaire->approuve==1)
                            <button class="btn btn-outline-warning" onclick="window.location = '{{url('/admin/desactiver_commentaire/'.$commentaire->id)}}'">Desactiver</button>
                          @else
                          <button class="btn btn-outline-primary" onclick="window.location = '{{url('/admin/poster_commentaire/'.$commentaire->id)}}'">Poster</button>
                        @endif
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
    <script src="/backend/js/data-table.js"></script>
@endsection