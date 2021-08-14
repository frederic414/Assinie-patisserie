@extends('layouts.appadmin')

@section('title')
    Editer Slider
@endsection

@section('contenu')
            <div class="row grid-margin">
                <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Editer Slider</h4>

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
                        {!!Form::open(['action' => 'App\Http\Controllers\SliderController@modifierslider', 'method' => 'POST', 'class' => 'cmxform', 'id' => 'commentForm', 'enctype' => 'multipart/form-data'])!!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            {!!Form::hidden('id',$slider->id)!!}   
                            {!!Form::label('', 'Description one', ['for' =>'cname'])!!}
                            {!!Form::text('description1', $slider->description1, ['id' => 'cname', 'class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('', 'Description two', ['for' =>'cname'])!!}
                            {!!Form::text('description2', $slider->description2, ['id' => 'cname', 'class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('', 'image', ['for' =>'cname'])!!}
                            {!!Form::File('slider_image',['id' => 'cname', 'class' => 'form-control'])!!}
                        </div>
                        {!!Form::submit('Modifier',['class' => 'btn btn-primary'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
                </div>
            </div>
@endsection

@section('scripts')
    <script src="/js/form-validation.js"></script>
    <script src="/js/bt-maxLength.js"></script>
@endsection
