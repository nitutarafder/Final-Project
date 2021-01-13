@include('layouts.font_header')



<div >
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0F6CB2;color:#EFFFEF; margin-top:14px;">
        <div class='container'>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" style="text-transform:  uppercase;">
                    <li class="nav-item " >
                        <a class="nav-link" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
                     </li>
                    @if ($categorys)
                        @foreach ($categorys as $category)    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{$category->category_name}}</a>
                                    </li>
                        @endforeach             
                    @endif                      
                </ul>
            </div>
        </div>
    </nav>
</div>





<div class="add_to_cart" style="background-color:#F3F3F3" >
    <div class="container" style="padding-top:10px; ">
        <div class="row">
@if($products)
            <div class="col-md-12"  >
                <div class="container" style="background-color:#FFFFFF; padding-top:20px;padding-bottom:50px;">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="product_image">
                                <img width="300" src="{{ url('') }}/product_image/{{$products->product_photo}}" alt="product_image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h1 style="padding-bottom:20px;">{{$products->title}}</h1>
                            @if ($products->discount_pricef>0)
                            <p style="color:red;"><strong><del class="">{{$products->discount_pricef + $products->price }}</del> </strong>TK</p>
                            @endif
                            <h3 style="color:#000;"><strong></strong>{{$products->price}} TK</h3>
                            <p>{{$products->description}}</p>  
                            <h6 style="padding-top:10px;">Category: <strong style="color:#000">{{$products->product_quality}}</strong></h6>

                            <ul>
                                <li>Cash On Delivery</li>
                                <li>Delivery time 3-5 days</li>
                                <li>Sundorbon Courier | SA paribahon</li>
                                <li>Hotline: +880175.....4</li>
                                
                            </ul>

                          <hr>
                            <div class="row" style="padding-bottom:20px;">
                                <div class="col-md-4">                                
                                  <a href="{{ url('cart/add')}}/{{$products->id}}"> <button class="btn btn-primary">Add to cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@include('layouts/font_footer')