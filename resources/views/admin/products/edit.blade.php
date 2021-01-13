@extends('backend.index')


@section('content')

    <h1>Edit product</h1>


    @include('include.index')


    <div class="row">

        <div class="col-md-3">

            <img  height="100" src="{{url('')}}/product_image/{{$products->product_photo}}" alt=" no image found" class="img-fluid img-thumbnail">

        </div>



        <div class="col-md-9">

            {{--    {!! Form::model($user,['action'=>['AdminUsersController@update',$user->id],'files'=>true,'method'=>'PATCH']) !!}--}}


{{--            {!! Form::model($products,array(['action'=>['AdminProductController@update',$products->id],'files'=>true,'method'=>'PATCH'])) !!}--}}

            {!! Form::model($products, array('action' =>[ 'AdminProductController@update',$products->id],'files'=>true, 'method' => 'PATCH')) !!}



            <div class="form-group">


                {!! Form::label('type_id','Type:') !!}


                {!! Form::select('type_id',array(''=>'select type')+$types,null,['class'=>'form-control']) !!}


            </div>





            <div class="form-group">


                {!! Form::label('title','Product Title:') !!}


                {!! Form::text('title',null,['class'=>'form-control']) !!}



            </div>



            <div class="form-group">
            {!! Form::label('price','Discount taka:') !!}
            {!! Form::text('discount_price',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price','Product Price:') !!}
                {!! Form::text('price',null,['class'=>'form-control']) !!}
            </div>





            <div class="form-group">


                {!! Form::label('quantity','Product quantity:') !!}


                {!! Form::text('quantity',null,['class'=>'form-control']) !!}



            </div>






            <div class="form-group">


                {!! Form::label('product_status','Status:') !!}


                {!! Form::select('product_status',array('active'=>'Active','deactivate' =>'Deactivate'),null,['class'=>'form-control']) !!}



            </div>






            <div class="form-group">


                {!! Form::label('product_quality','Product Quality:') !!}


                {!! Form::select('product_quality',array('hot deals'=>'Hot Deals','regular'=>'Regular'),null,['class'=>'form-control']) !!}



            </div>







            <div class="form-group">


                {!! Form::label('description','Product Description:') !!}


                {!! Form::textarea('description',null,['class'=>'form-control','rows'=>'3']) !!}



            </div>






            <div class="form-group">


                {!! Form::label('product','Product photo:') !!}



                {!! Form::file('product_photo',null,['class'=>'form-control']) !!}



            </div>







            <div class="form-group">


                {!! Form::submit('update product',['class'=>'btn btn-primary']) !!}



            </div>






            {!! Form::close() !!}



        </div>



    </div>











@endsection


@section('footer')


    @endsection
