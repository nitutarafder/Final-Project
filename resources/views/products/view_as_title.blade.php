@include('layouts.font_header')

<div >
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0F6CB2;color:#EFFFEF; margin-top:14px;">
            <div class='container'>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul   class="navbar-nav" style="text-transform:  uppercase;">
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
    </div>


<div class="container-fluid" style="background-color:#F3F3F3;">

	<div class="container" style="background-color:#FFFFFF">
		<div class="row" style="padding-bottom: 100px; padding-top: 60px;">
@if ($products)
	@foreach ($products as $product)
	
			<div class="col-md-4" style="text-align: center;">
				<a href="{{ url('') }}/product/{{$product->id}}">
					<img height="150" width="150" src="{{ url('') }}/product_image/{{$product->product_photo}}">
					<p>{{$product->title}}<br>TK:{{$product->price}}</p>
				</a>
			</div>
			@endforeach
		@endif
		</div>
	</div>


</div>

@include('layouts/font_footer')