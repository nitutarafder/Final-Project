@include('layouts.font_header')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  /*border: 1px solid #dddddd;*/
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}
</style>

<div style="padding-bottom: 70px;" >
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0F6CB2;color:#EFFFEF; margin-top:14px;">
            <div class='container'>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav" style="text-transform:  uppercase;">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
                        </li>
@if ($categorys)
         @foreach ($categorys as $category)
      
    


                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('product/category/'.$category->id) }}">{{$category->category_name}}</a>

                        </li>
          @endforeach             
@endif

                       
                    </ul>
                </div>
            </div>
        </nav>







<div class="container" style="padding-top: 70px;" >
	<div class="row">

		<div class="col-md-6">
			<h2>Your Order</h2>
@if ($view_orders)
<div class="table-responsive">

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>OrderId</th>
			<th>ProductName</th>
			<th>qty</th>
			<th>total</th>
		</tr>
	</thead>
@foreach ($view_orders as $view_order)

<tbody>

	<tr>
		<td>{{$view_order->id}}</td>
		<td>{{$view_order->order_id}}</td>
		<td>{{$product_name}}</td>
		<td>{{$view_order->qty}}</td>
		<td>{{$view_order->total}}</td>
	</tr>
	{{-- <tr>
		<td>
		<a class="btn btn-primary" href="{{ url('orders/pdf/'.$view_order->order_id) }}">download receipt</a>
		</td>
	</tr> --}}
		
</tbody>		
@endforeach
<?php $count=0; ?>
@foreach ($view_orders as $view_receipt)
<?php if($count>=1) break; ?>
<div>
	<tr>
		<td>
		<a class="btn btn-primary" href="{{ url('orders/pdf/'.$view_receipt->order_id) }}">download receipt</a>
		</td>
	</tr>
	</div>

	<?php $count++?>
@endforeach

</table>
</div>
@endif

	</div>


<div class="col-md-6">
	<div style="padding-left: 20px;">
	<h2>Shipping Address</h2>
	<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				{{-- <th>orderId</th> --}}
				<th>name</th>
				<th>email</th>
				<th>phone</th>
				<th>city</th>
				<th>fullAdd</th>

			</tr>
		</thead>

@if ($d_address)
	@foreach ($d_address as $address)
		
	

		<tbody >
			<tr>
				{{-- <td>{{$address->order_id}}</td> --}}
				<td>{{$address->name}}</td>
				<td>{{$address->email}}</td>
				
				<td>{{$address->phone}}</td>
				
				<td>{{$address->city}}</td>
				
				<td>{{$address->fullAddress}}</td>

			</tr>
			<div>
			<tr>
				<br>
				<td><a class="btn btn-primary" href="{{ url('order/address/edit/'.$address->id) }}">updateAddress</a></td>
			</tr>
			</div>
			
		</tbody>

@endforeach
@endif
</div>
	</table>
</div>
	
</div>




</div>
</div>
    </div>
@include('layouts/font_footer')