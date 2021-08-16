@extends('layouts.appadmin')

@section('contenu')
    <div class="form-group">
        <label for="my-select"></label>
        <select id="my-select" class="form-control" name="" multiple>
            @foreach ($produits as $item)
                <option>{{$item->product_name}}</option>
            @endforeach
        </select>
    </div>
@endsection