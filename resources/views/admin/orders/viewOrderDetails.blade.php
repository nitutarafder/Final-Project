@extends('backend.index')


@section('content')


<h1>Order Details:</h1>


    <div class="row">
<div class="col-md-2">
	


</div>

        <div class="col-md-8">

<div class="table-responsive">

            <table class="table">

            	<h5>total orders</h5>
                <thead>



                <tr>

                	 <th>orderId</th>
                    <th>orderId</th>

                    <th>productId</th>

                    <th>Quentaty</th>

                    <th>total</th>


                   


                </tr>


                </thead>


                <tbody>


                @if($view_orders)



                    @foreach($view_orders as $view_order)


                        <tr>

                            <td>{{$view_order->id}}</td>


                            <td>{{$view_order->order_id}}</td>

 							<td>{{$view_order->product_id}}</td>

                            <td>{{$view_order->qty}}</td>

                            <td>{{$view_order->total}}</td>
       
                      

                        </tr>


                    @endforeach

                    <?php $i=0; ?>

                    @foreach ($view_orders as $order_link)
                        <?php if($i==1) break; ?>
                  
                    <tr>
                         <td><a href="{{ url('admin/orders/confirm/'.$order_link->order_id) }}"><button class="btn btn-primary">delevery</button></a></td>
                    </tr>

                    <?php $i++;?>
                      @endforeach
                @endif


                </tbody>
            </table>
</div>
<div>
	
	{{-- Delevary Address  --}}
	<div class="table-responsive">
		<table class="table">
<h5 style="padding-top: 20px;">Delevary Address</h5>

        <thead>
            <tr>
                <th>orderId</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>city</th>
                <th>fullAdd</th>

            </tr>
        </thead>

@if ($d_address)
    @foreach ($d_address as $address)
        {{-- expr --}}
    

        <tbody>
            <tr>
                <td>{{$address->order_id}}</td>
                <td>{{$address->name}}</td>
                <td>{{$address->email}}</td>
                <td>{{$address->phone}}</td>
                <td>{{$address->city}}</td>
                <td>{{$address->fullAddress}}</td>

            </tr>
            
        </tbody>
        <?php $i=0; ?>

                    @foreach ($d_address as $address_link)
                        <?php if($i==1) break; ?>
                  
       
                    <tr>
                         <td> <a class="btn btn-primary" href="{{ url('admin/order/users/'.$address_link->user_id) }}">user details</a> </td>
                    </tr>

                    <?php $i++;?>
                      @endforeach

@endforeach
@endif
    </table>
</div>
</div>




        </div>





















    </div>






@endsection




@section('footer')





@endsection
