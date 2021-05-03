@extends('layouts.appadmin')

@section('title')
    Ajouter Produit
@endsection

@section('contenu')

            <div class="row grid-margin">
                <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Ajouter produit</h4>

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
                        {!!Form::open(['action' => 'App\Http\Controllers\ProduitController@sauverproduit', 'method' => 'POST', 'files' => 'true', 'class' => 'cmxform', 'id' => 'commentForm', 'enctype' => 'multipart/form-data'])!!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            {!!Form::label('', 'Nom du produit', ['for' =>'cname'])!!}
                            {!!Form::text('product_name', '', ['id' => 'cname', 'class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('', 'Prix du produit', ['for' =>'cname'])!!}
                            {!!Form::number('product_price','', ['id' => 'cname', 'class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('', 'Category du produit')!!}
                            {!!Form::select('product_category',$categories, null, ['placeholder' => 'selectionner la categorie', 'class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('', 'image', ['for' =>'cname'])!!}
                            {!!Form::File('product_image',['id' => 'cname', 'class' => 'form-control'])!!}
                        </div>
                        {!!Form::submit('Ajouter',['class' => 'btn btn-primary'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
                </div>
            </div>
@endsection

@section('scripts')
    <script src="js/form-validation.js"></script>
    <script src="js/bt-maxLength.js"></script>
@endsection
