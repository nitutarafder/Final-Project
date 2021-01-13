@extends('backend.index')



@section('content')









<div class="row">


    <div class="col-md-12">



        <table class="table">


            <thead>



            <tr>


                <th>ProductId</th>

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


                        <td><img height="50" src="{{url('')}}/product_image/{{$product->product_photo}}" alt="no photo found"></td>


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


                        {!! Form::open(['action'=>['AdminProductController@destroy', $product->id],'method'=>'DELETE']) !!}


                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}


                        {!! Form::close() !!}


                    </tr>


                @endforeach
            @endif


            </tbody>
        </table>

    </div>

</div>






    @endsection




@section('footer')





    @endsection
