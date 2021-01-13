@extends('backend.index')


@section('content')


<h1>Orders page</h1>






    <div class="row">


        <div class="col-md-12">

<div class="table-responsive">

            <table class="table">


                <thead>



                <tr>


                    <th>orderId</th>

                    <th>userId</th>

                    <th>Total</th>

                    <th>status</th>

                    {{-- <th>updated_at</th> --}}

                    <th>action</th>

                   


                </tr>


                </thead>


                <tbody>









                @if($orders)



                    @foreach($orders as $order)


                        <tr>

                            <td>{{$order->id}}</td>


                            <td>{{$order->user_id}}</td>


                            <td>{{$order->total}}</td>


                            <td>{{$order->status}}</td>
       
                            {{-- <td>{{$order->updated_at->diffForHumans()}}</td> --}}


                            <td><a href="{{ url('admin/orders/'.$order->id) }}"><button class="btn {{$order->status=='delivered'?'btn-danger':'btn-primary'}} ">view</button></a></td>


{{-- 
                            <td>

                                <a href="{{ url('admin/orders/'.$product->id.'/edit') }}"><button class="btn btn-danger">delete</button></a>
                            </td> --}}

                          {{--   {!! Form::open(['action'=>['AdminProductController@destroy', $product->id],'method'=>'DELETE']) !!}


                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}


                            {!! Form::close() !!} --}}


                        </tr>


                    @endforeach
                @endif


                </tbody>
            </table>
</div>
        </div>

    </div>






@endsection




@section('footer')





@endsection
