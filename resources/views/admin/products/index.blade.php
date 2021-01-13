@extends('backend.index')


@section('content')


<h1>All Product</h1>



@include('include.index')




@if($products)



{!! Form::open(['method'=>'POST','action'=>'AdminProductController@type_view']) !!}

<div class="container">
    <div class="row">


        <div class="col-md-5">


    <div class="form-group">



        {!! Form::label('types','Types:') !!}


        {!! Form::select('type_id',array(''=>'select type')+$types, null, ['class'=>'form-control']) !!}



    </div>


            <td><a href="{{ url('admin/products/type/') }}"><button class="btn btn-primary">view all types product</button></a></td>


        </div>


        <div class="col-md-2"></div>




        <div class="col-md-5">




        </div>



    </div>

</div>
{!! Form::close() !!}




@endif



<div class="row">


    <div class="col-md-12">


<div class="table-responsive">
<table class="table">


    <thead>



    <tr>


        <th>PId</th>

        <th>Photo</th>

        <th>Type</th>

        <th>Title</th>

        <th>Price</th>

        <th>Quantity</th>

        <th>visibility</th>

        <th>Quality</th>

        <th>description</th>

        <th>update</th>

        <th>action</th>

        <th>action</th>


    </tr>


    </thead>


    <tbody>









@if($products)



    @foreach($products as $product)


    <tr>

        <td>{{$product->id}}</td>


        <td><img height="50" width="55" src="{{url('')}}/product_image/{{$product->product_photo}}" alt="no photo found"></td>


        <td>{{$product->type?$product->type->type_name:'no types found'}}</td>

{{--        <td>{{$product->types->type_name}}</td>--}}

        <td>{{$product->title}}</td>


        <td>{{$product->price}}</td>


        <td>{{$product->quantity}}</td>


        <td>{{$product->product_status}}</td>


        <td>{{$product->product_quality}}</td>


        <td>{{$product->description}}</td>


        <td>{{$product->updated_at->diffForHumans()}}</td>


        <td><a href="{{ url('admin/products/'.$product->id.'/edit') }}"><button class="btn btn-primary">update</button></a></td>


        <td>

           <button class="btn btn-danger" data-prodid="{{$product->id}}" data-toggle="modal" data-target="#delete_prod">Delete</button>
</td>

    </tr>




@endforeach
@endif


    </tbody>
</table>
</div>

    </div>

</div>

{{-- modal  --}}

<div class="modal  fade" id="delete_prod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('products.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
                <p class="text-center" style="color: red;">
                    Are you sure you want to delete this?
                </p>
                <input type="hidden" name="product_id" id="prod_id" value="">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
          </div>
      </form>
    </div>
  </div>
</div>




@endsection


@section('footer')


@endsection
