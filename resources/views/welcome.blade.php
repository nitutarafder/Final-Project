@include('layouts.font_header')
<style >
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

@media only screen and (max-width:767px){
    .side-category{
        display: none;
    }
}
@media only screen and (min-width:768px){
    .mobile-version-nav-bar{
        display: none !important;
    }

}
.search-box, .search-box form{
    position: relative;
}
.search-box form .search-icon {
    position: absolute;
    top: 5px;
    right: 5px;
}
</style>
<div >
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0F6CB2;color:#EFFFEF; margin-top:14px;">
            <div class='container'>
                {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                <div class="d-flex mobile-version-nav-bar">
                    <div>
                        <a class="navbar-brand " style="width: 40px;" href="{{ url('/') }}"><img src="{{asset('frontend/img/m-logo.png')}}"></a>
                    </div>
                    <div class="flex-fill px-2">
                        <div>
                            <div class="search-box" >
                                <form>
                                    <input type="text" name="filterdata" class="form-control shadow-none" placeholder="Enter Your Keyword" style="    margin-top: 16px;">
                                    <i fill="currentColor" class="search-icon" style="display: inline-block; color: rgb(85, 85, 85);">
                                        <svg fill="currentColor" height="25" width="25" viewBox="0 0 24 24" style="display: inline-block;vertical-align: middle;">
                                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                </path>
                                            </svg>
                                        </i>
                                        {{-- <div class="pr-2">
                                            <a href="#">A</a>
                                        </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="pr-2">
                            <div class="cart-box" style="margin-top: 16px;"><a type="button" class="btn rounded-circle shadow-none cart-btn" href="/" style="width:10px;">
                                <i fill="currentColor" style="display: inline-block;">
                                    <svg fill="currentColor" height="22" width="22" viewBox="0 0 24 24" style="display: inline-block; vertical-align: middle;">
                                        <path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-9.83-3.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1 2-2.76 5H8.53l-.13-.27L6.16 6l-.95-2-.94-2H1v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.13 0-.25-.11-.25-.25z">
                                            </path>
                                        </svg>
                                    </i>
                                </a>
                                <small>6</small>
                            </div>
                        </div>
                        {{-- <div>
                            <button type="button" class="btn rounded-circle shadow-none p-1 bar-btn">
                                <i fill="currentColor" style="display: inline-block;">
                                    <svg fill="currentColor" height="25" width="25" viewBox="0 0 24 24" style="display: inline-block; vertical-align: middle;">
                                        <path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"></path>
                                    </svg>
                                </i>
                            </button>
                        </div> --}}
                    </div>
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

<!--  banner section --><!--  banner section --><!--  banner section -->
<!--  banner section --><!--  banner section --><!--  banner section -->

<div class="banner-section" style="background-color: #F3F3F3;" >
<div class="container-fluid">
    <div class="container">
     <div class="row">
<div class="col-md-12">
<div>
    <!-- slider  -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item bann_text ">
                <img class="d-block w-100" src="{{asset('frontend/img/bannerecommerce-blue(2).jpg')}}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>woman <strong style="color: orange;">fashion</strong> </h2>
                        <p>Buy Home Decoration Products </p>
                        <button type="button" class="btn succ" style="background-color: transparent; border:2px solid #fff;">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item bann_text active">
                <img class="d-block w-100" src="{{asset('frontend/img/bannerecommerce-blue(1).jpg')}}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Home <strong style="color: orange;">Decoration</strong> </h2>
                        <p>Take a look on Women Fashions </p>
                        <button type="button" class="btn succ" style="background-color: transparent; border:2px solid #fff;">Buy Now</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev" style="width: 5% !important">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next" style="width: 5% !important">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<div style="background-color: #F3F3F3">
<div class="container">
    <div style="padding-bottom: 30px; padding-top:20px;">
        <div class="">
            <div class="container">
                <div class="row">
    
                    <div class="col-md-4">
                        <img src="{{ asset('frontend/img/Screenshot_5.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('frontend/img/bigdiscount.jpg') }}" alt="">
    
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('frontend/img/byonegetone.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- T-Shirt  -->
<div style="background-color:#F3F3F3">
    <div class="container" >
        <div class="d-flex" style="border-bottom: 2px solid #1D6CB2;">
            <div class="p-2" style="font-weight: bold;background-color:#1D6CB2; color:#fff ;text-transform:uppercase;">Men's Collection</div>
            <div class="ml-auto p-2"><a href="{{ url('product/category/1') }}" style="color: #1D6CB2;text-transform:uppercase;">View More</a></div>
        </div>
        <div class="row">
            <div class="col-md-12 prodct_section" >
                <div class="container" style="background-color:#FFFFFF ;">
                    <div class="row" style="padding-top: 13px;padding-bottom: 13px;">
                        <div class="col-md-12 cont">
                            <div >
                                <div class="row" style="padding: 5px;">
                                        @if($product)
                                        <?php $count = 0; ?>
                                            @foreach($product as $prdc)
                                                @if($prdc->type->type_name == 'T-shirts')
                                                <?php if($count == 8) break; ?>
                                                <div class="col-md-3 product_hover" >
                                                    <a  href="{{ url('') }}/product/{{$prdc->id}}">
                                                        <img  class="d-block w-100" src="{{ url('') }}/product_image/{{$prdc->product_photo}}" alt="Second slide">
                                                        <p>{{$prdc->title}} | Price: {{$prdc->price}}</p>
                                                    </a>
                                                    {{-- <a   href="{{ url('cart/add') }}/{{$prdc->id}}"><i  class="fa fa-cart-plus" aria-hidden="true"></i></a> --}}
                                                </div>
                                        <?php $count++; ?>
                                                @endif
                                        @endforeach
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Muslim Fashion -->
<div style="background-color:#F3F3F3">
    <div class="container" >
        <div class="d-flex" style="border-bottom: 2px solid #1D6CB2;">
            <div class="p-2" style="font-weight: bold;background-color:#1D6CB2; color:#fff; text-transform:uppercase;">Womens Collection</div>
            <div class="ml-auto p-2"><a href="{{ url('product/category/2') }}" style="color: #1D6CB2; text-transform:uppercase;">View More</a></div>
        </div>
        <div class="row">
            <div class="col-md-12 prodct_section" >
                <div class="container" style="background-color:#FFFFFF ;">
                    <div class="row" style="padding-top: 13px;padding-bottom: 13px;">
                        <div class="col-md-12 cont">
                            <div >
                                <div class="row" style="padding: 5px;">
                                        @if($product)
                                        <?php $count = 0; ?>
                                            @foreach($product as $prdc)
                                                @if($prdc->type->type_name == 'Shari')
                                                <?php if($count == 8) break; ?>
                                                <div class="col-md-3 product_hover" >
                                                    <a  href="{{ url('') }}/product/{{$prdc->id}}">
                                                        <img  class="d-block w-100" src="{{ url('') }}/product_image/{{$prdc->product_photo}}" alt="Second slide">
                                                        <p>{{$prdc->title}} | Price: {{$prdc->price}}</p>
                                                    </a>
                                                    {{-- <a   href="{{ url('cart/add') }}/{{$prdc->id}}"><i  class="fa fa-cart-plus" aria-hidden="true"></i></a> --}}
                                                </div>
                                        <?php $count++; ?>
                                                @endif
                                        @endforeach
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Jewelry -->

<div style="background-color:#F3F3F3">
    <div class="container" >
        <div class="d-flex" style="border-bottom: 2px solid #1D6CB2;">
            <div class="p-2" style="font-weight: bold;background-color:#1D6CB2; color:#fff; text-transform:uppercase; ">Jewelry</div>
            <div class="ml-auto p-2"><a href="{{ url('product/category/4') }}" style="color: #1D6CB2;text-transform:uppercase;">View More</a></div>
        </div>
        <div class="row">
            <div class="col-md-12 prodct_section" >
                <div class="container" style="background-color:#FFFFFF ;">
                    <div class="row" style="padding-top: 13px;padding-bottom: 13px;">
                        <div class="col-md-12 cont">
                            <div >
                                <div class="row" style="padding: 5px;">
                                        @if($product)
                                        <?php $count = 0; ?>
                                            @foreach($product as $prdc)
                                                @if($prdc->type->type_name == 'Jewelry')
                                                <?php if($count == 8) break; ?>
                                                <div class="col-md-3 product_hover" >
                                                    <a  href="{{ url('') }}/product/{{$prdc->id}}">
                                                        <img  class="d-block w-100" src="{{ url('') }}/product_image/{{$prdc->product_photo}}" alt="Second slide">
                                                        <p>{{$prdc->title}} | Price: {{$prdc->price}}</p>
                                                    </a>
                                                    {{-- <a   href="{{ url('cart/add') }}/{{$prdc->id}}"><i  class="fa fa-cart-plus" aria-hidden="true"></i></a> --}}
                                                </div>
                                        <?php $count++; ?>
                                                @endif
                                        @endforeach
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Cosmetics -->

<div style="background-color:#F3F3F3">
    <div class="container" >
        <div class="d-flex" style="border-bottom: 2px solid #1D6CB2;">
            <div class="p-2" style="font-weight: bold;background-color:#1D6CB2; color:#fff; text-transform:uppercase; ">Pants</div>
            <div class="ml-auto p-2"><a href="{{ url('product/category/4') }}" style="color: #1D6CB2;text-transform:uppercase;">View More</a></div>
        </div>
        <div class="row">
            <div class="col-md-12 prodct_section" >
                <div class="container" style="background-color:#FFFFFF ;">
                    <div class="row" style="padding-top: 13px;padding-bottom: 13px;">
                        <div class="col-md-12 cont">
                            <div >
                                <div class="row" style="padding: 5px;">
                                        @if($product)
                                        <?php $count = 0; ?>
                                            @foreach($product as $prdc)
                                                @if($prdc->type->type_name == 'Pants')
                                                <?php if($count == 8) break; ?>
                                                <div class="col-md-3 product_hover" >
                                                    <a  href="{{ url('') }}/product/{{$prdc->id}}">
                                                        <img  class="d-block w-100" src="{{ url('') }}/product_image/{{$prdc->product_photo}}" alt="Second slide">
                                                        <p>{{$prdc->title}} | Price: {{$prdc->price}}</p>
                                                    </a>
                                                    {{-- <a   href="{{ url('cart/add') }}/{{$prdc->id}}"><i  class="fa fa-cart-plus" aria-hidden="true"></i></a> --}}
                                                </div>
                                        <?php $count++; ?>
                                                @endif
                                        @endforeach
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- footer section -->

@include('layouts/font_footer')
</div>
<script>
$('.cosmetics_slide').cosmetics_slide({
interval: 2000
})

</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script> --}}
</body>
</html>




