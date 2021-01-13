 
 {{-- @include('layouts.font_header') --}}



 <div class="row">

@if($product)


<?php $count = 0; ?>
	@foreach($product as $prdc)


		@if($prdc->type->type_name == 'T-shirts')

		 <?php if($count == 6) break; ?>

        <div class="col-md-4 product_hover" >



        	<a  href="{{ url('') }}/product/{{$prdc->id}}">

        		<img height="100"  class="d-block w-100" src="{{ url('') }}/product_image/{{$prdc->product_photo}}" alt="Second slide">

        		<p>{{$prdc->title}}</p>
        		<p>{{$prdc->price}}</p>
        		<i " class="fa fa-cart-plus" aria-hidden="true"></i>
        	</a>
            

        </div>




<?php $count++; ?>

        @endif

@endforeach
                         

@endif

    </div>