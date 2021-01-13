
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>E-commerce</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  {{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script> 
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

@media only screen and (max-width:767px){
    .logo-holder{
        display: none;
    }
    .mobile-display-none{
        display: none !important;
    }
}
@media only screen and (min-width:768px){
    .mobile-search-and-cart-div{
        display: none !important;
    }
}

.search-field:focus{
    outline: none !important;
    box-shadow: none !important;
}

</style>
</head>
<body>
<div class="container-fluid mobile-display-none">
    {{-- <div class="header_list ">
        <div class='container'>
            <ul>
                @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                        @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item" ><a class="nav-link" href='{{ url('checkout') }}'>CartCheckout</a></li>
                <li class="nav-item"><a class="nav-link" href='{{ url('cart') }}'>My Cart</a></li>
                <li class="nav-item"><a class="nav-link" href=''>Wishlist</a></li>
                <li class="nav-item"><a class="nav-link" href='{{ url('profile') }}'>My account</a></li>

            </ul>
        </div>
    </div> --}}

 <div class="container">
    <div class="search_and_logo ">
       
            <div class="row ">
                <div class="col-md-3 logo-holder">
                    <div><a href="{{ url('/') }}"><img src="{{asset('frontend/img/desk-logo.png')}}"></a></div>
                </div>
                <div class="col-md-6 top-search-holder">
                    <div class="search-area">
                        <form action="{{ url('search') }}" class="search-form"  >

                            {{-- <select   disabled  > --}}
                                {{-- name="category" --}}
                                {{-- <option  selected="selected" disabled >Search Product</option> --}}
                                {{-- <option value="0" selected="selected">Product Category</option>
                                <option class="level-0" value="clothing">Clothing</option>
                                <option class="level-0" value="hoodies">Hoodies</option>
                                <option class="level-0" value="music">Music</option>
                                <option class="level-0" value="posters">Posters</option>
                                <option class="level-0" value="t-shirts">T-shirts</option>
                                <option class="level-0" value="albums">Albums</option>
                                <option class="level-0" value="uncategorized">Uncategorized</option> --}}
                            {{-- </select> --}}
                            <input type="text" name="searchData" id="yog-search-form" class="search-field ui-autocomplete-input" placeholder="Search here.." autocomplete="on">
                            {{-- <input type="hidden" name="post_type" value="products"> --}}
                            <button type="submit" class="search-button"></button>
                        </form>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="d-flex">
                        {{-- <div class="mr-auto p-2">Flex item</div> --}}
                        <div class="ml-auto p-2">
                            @guest
                             @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn " style="border: 1px solid gray;padding: 8px;">Login</a>
                             @endif
                            @else
                            <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"class="btn " style="border: 1px solid gray;padding: 8px;" >
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                            {{-- <a href="{{ route('logout') }}" class="btn " style="border: 1px solid gray;padding: 8px;">Logout</a> --}}
                            @endguest
                        </div>
                        <div class="p-2"><a href="{{ url('cart') }}" class="btn "  style="border: 1px solid gray;padding: 8px;">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                          {{Cart::count()}}
                        </a></div>
                      </div>
                </div>
            </div>
        </div>
    </div>

</div>





