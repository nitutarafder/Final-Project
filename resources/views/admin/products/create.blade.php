@extends('backend.index')

@section('content')

<h1>Create Product</h1>


@include('include.index')



{!! Form::open(['action'=>'AdminProductController@store','files'=>true,'method'=>'POST']) !!}




{{--<div class="form-group">--}}
    {{--{!! Form::label('category_id','Category:') !!}--}}

    {{--{!! Form::select('category_id',array(''=>'select category')+ $categories,null,['class'=>'form-control','id'=>'category']) !!}--}}

{{--</div>--}}





<div class="form-group">


{!! Form::label('type_id','Type:') !!}


{!! Form::select('type_id',array(''=>'select type')+$types,null,['class'=>'form-control']) !!}


</div>



<div class="form-group">


{!! Form::label('title','Product Title:') !!}


{!! Form::text('title',null,['class'=>'form-control']) !!}



</div>




<div class="form-group">


{!! Form::label('price','Product Price:') !!}


{!! Form::text('price',null,['class'=>'form-control']) !!}


</div>


<div class="form-group">
{!! Form::label('price','Discount taka:') !!}
{!! Form::text('discount_price',0,['class'=>'form-control']) !!}
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









{{--<div class="form-group">--}}

    {{--{!! Form::checkbox('test[]','M') !!}--}}
    {{--{!! Form::label('test','M') !!}--}}

    {{--{!! Form::checkbox('test[]','L') !!}--}}
    {{--{!! Form::label('test','L') !!}--}}

{{--</div>--}}







<div class="form-group">


    {!! Form::submit('add product',['class'=>'btn btn-primary']) !!}


</div>





{!! Form::close() !!}





@endsection



@section('footer')



    @endsection





{{--<script !src="">--}}

{{--$('#category').on('change',function (e) {--}}
{{--console.log(e);--}}
{{--var cat_id = e.target.value;--}}



{{--$.get('/ajax-subcat?cat_id='+ cat_id,function (data) {--}}

{{--$.each(data,function (index,subcatObj) {--}}
{{--$('#type').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');--}}
{{--});--}}


{{--});--}}


{{--});--}}


{{--</script>--}}




