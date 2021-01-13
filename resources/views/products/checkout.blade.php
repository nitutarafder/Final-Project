
@include('layouts.font_header');

@include('include.index')

<div >
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
</div>



  <script>
   $(document).ready(function() {
    $("#CartMsg").hide();
    //$('#CartTotal').hide();
    @foreach($data as $product)
    $("#upCart{{$product->id}}").on('change keyup', function(){
      var newQty = $("#upCart{{$product->id}}").val();
      var rowID = $("#rowID{{$product->id}}").val();
      $.ajax({
          url:'{{url('/cart/update')}}',
          data:'rowID=' + rowID + '&newQty=' + newQty,
          type:'get',
          success:function(response){
            $("#CartMsg").show();
            console.log(response);
            $("#CartMsg").html(response);
          }
      });
    });
    @endforeach
  $('#coupon_btn').click(function(){
      var coupon_id = $('#coupon_id').val();
      //alert(coupon_id);
      $.ajax({
        url:'{{url('/checkCoupon')}}',
        data: 'code=' + coupon_id,
        success:function(res){
       // alert(res);
       $('#cartTotal').html(res);
        }
      })
  });
   
  });
  </script>


{{-- 
<h2 class="text-center">checkout page</h2> --}}


<div class="cart_page" style="padding-top:30px; padding-bottom:30px">
  <h3 style="text-align: center;padding-bottom:30px; font-size: 21px;">SHOPPING CART / <strong>CECKOUT</strong></h3>

  {!! Form::open(['action'=>'CheckoutController@placeOrder','files'=>true,'method'=>'POST']) !!}
    <div class="container"style="background-color:#FFFFFF;">
      <div class="row">
        <div class="col-md-6" >
{{-- @include('include.index') --}}
<div style="padding: 10px; border:1px solid #0000001f;">
<h5>BILLING DETAILS</h5>
<hr>

    {{-- {!! Form::open(['action'=>'CheckoutController@placeOrder','files'=>true,'method'=>'POST']) !!} --}}

<div class="form-group">
{!! Form::label('name','Name:') !!}
{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name', 'required']) !!}
</div>
<div class="form-group">
{!! Form::label('email','Email:') !!}
{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email', 'required']) !!}
</div>
<div class="form-group">
{!! Form::label('phone','phone:') !!}
{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Phone', 'required']) !!}
</div>
<div class="form-group">
{!! Form::label('city','city:') !!}
{!! Form::text('city',null,['class'=>'form-control','placeholder'=>'City', 'required']) !!}
</div>
<div class="form-group">
{!! Form::label('fullAddress','Full Address:') !!}
{!! Form::textarea('fullAddress',null,['class'=>'form-control','rows'=>'2','placeholder'=>'details of your address', 'required']) !!}
</div>

{{-- <div class="form-group">
    {!! Form::submit('Place order',['class'=>'btn btn-primary order-now']) !!}
</div> --}}
{{-- {!! Form::close() !!} --}}

</div>
       
</div>

<style>
  .order-now{
    width: 100%;
  }
  tr:nth-child(even){
    background-color: white !important;
  }
</style>
{{-- col-md-6 --}}

         <div class="col-md-6">
            <div class="container" style="padding: 10px; border: 1px solid #0000001f">
                @if($data)
                <div class="table-responsive">
                    <table class="table text-center">
                      <thead>
                      <tr>   
                          <th scope="col">products</th>
                          <th scope="col">Price</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $product)
                          <tr>
                              <td>
                                {{$product->name}}
                              <p style="font-size: 11px;">Quantity: {{$product->qty}}</p> 
                              </td>
                              <td>{{$product->price}}</td>
                          </tr>                          
                        @endforeach
                        <tr>
                        <td>Total:</td>
                        <td>{{Cart::subtotal()}} tk</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                @endif
                <div>
                  <h5>Shipping Cost</h5>
                  <hr>
                  <ul>
                    <li>Outside Dhaka  100TK</li>
                    <li>Inside Dhaka    80TK</li>
                  </ul>
                  <hr>
                </div>
                <div class="form-group">
                  {!! Form::submit('Place order',['class'=>'btn btn-primary order-now']) !!}
              </div>
          </div>
      </div>
    </div>
    </div>


    {!! Form::close() !!}
</div>

{{-- footer  --}}

<div class="footer" >
  <div class="container">
      <div class="row " >
          <div class="col-md-3 contact_inf">
             <a href="{{ url('/') }}"> <img src="{{ asset('frontend/img/m-logo.png') }}" alt=""></a>
              <div>
                  <p style="color: white;">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesette</p>
              </div>
          </div>
          <div class="col-md-3 contact_inf" >
              <h1 class="text-uppercase" style="color: white"> Customer Services</h1>
              <div>
                  <ul style="list-style: none; color:white">
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">checkout</a></li>
                      <li><a href="#">Login</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-md-3 contact_inf"  >
              <h1 class="text-uppercase" style="color: white">stay connected</h1>
              <div>
                  <p style="color: white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or</p>
                  <br>
                  <form>
                      <input type="email" name="email" id="my-email" placeholder="Enter Email Address" style="width: 100%; height:35px;">
                      <input type="button" value="Join Newsletter" style="width: 100%; margin-top:5px;background-color: #1D6CB2;border: 1px solid #1D6CB2;color: white;">
                  </form>
              </div>
          </div>
      </div>
  </div>
  </div>