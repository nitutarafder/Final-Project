<!DOCTYPE html>
<html>
<head>
	


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
  background-color: #dddddd;
}
</style>


</head>



<body>

<div class="container">
<h2 style="text-align: center;background-color: gray; text-transform: uppercase;">money receipt</h2>
<br>
<br>
<div style="padding-top: 30px;">
<h2 style="text-align: center;background-color: gray; text-transform: uppercase; ">Product Informations</h2>
@if ($view_orders)
	<table class="table">
		<thead>
			<tr>
				<th>OrderID</th>
				<th>Product</th>
				<th>Qty</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($view_orders as $view_order)
			<tr>
				<td>{{$view_order->order_id}}</td>
				<td>{{$product_name}}</td>
				<td>{{$view_order->qty}}</td>
				<td>{{$view_order->total}}</td>
			</tr>
			@endforeach

		</tbody>
	</table>
@endif
</div>
<div style="padding-top: 30px;">
<h2 style="text-align: center;background-color: gray; text-transform: uppercase; ">Shipping Address</h2>
@if ($d_address)
	<table class="table">
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
		<tbody>
			@foreach ($d_address as $address)
			<tr>
				<td>{{$address->order_id}}</td>
				<td>{{$address->name}}</td>
				<td>{{$address->email}}</td>
				<td>{{$address->phone}}</td>
				<td>{{$address->city}}</td>
				<td>{{$address->fullAddress}}</td>

			</tr>
			@endforeach

		</tbody>
	</table>
@endif
</div>
</div>









{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script> --}}
</body>
</html>