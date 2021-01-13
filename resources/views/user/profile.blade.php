@include('layouts.font_header')


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
		



		<div class="container" style="padding-top: 70px;">
			<div class="row">
				<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
					<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Order</a>
					{{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
					<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
				</div>
				</div>
				<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
					@if($users)		
					@foreach($users as $user)	
						<p><strong>Name:</strong>  {{$user->name}}</p>				
						<p><strong>Email:</strong> {{$user->email}}</p>
						<p><strong>Phone:</strong> {{$user->phone}}</p>
					@endforeach
					@endif
					</div>
					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<div class="table-responsive">
							<table class="table">
									<thead>
									  <tr>
										<th>order Id</th>
										<th>total</th>
										<th>status</th>
										<th>order date</th>
										<th>action</th>
									  </tr>
									</thead>
									<tbody>
										@if($orders)
										@foreach($orders as $order)
					
									  <tr>
										<td>{{$order->id}}</td>
										<td>{{$order->total}}</td>
										<td class="{{$order->status=='delivered'?'text-danger':''}}">{{$order->status}}</td>
										 <td>{{$order->status=='delivered'?$order->updated_at->diffForHumans():$order->created_at->diffForHumans()}}</td>
										 <td><a class="btn btn-primary" href="{{ url('orders/details/'.$order->id) }}">details</a></td>
									  </tr>
									 @endforeach
									 @endif
									</tbody>
							  </table>
					</div>
					</div>
					{{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
					<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> --}}
				</div>
				</div>
			</div>
		</div>
    </div>
@include('layouts/font_footer')