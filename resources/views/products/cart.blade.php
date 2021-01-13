@include('layouts.font_header');
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
      
       success: function() {   
        location.reload();  
       }
          // success:function(response){
          //   $("#CartMsg").show();
          //   console.log(response);
          //   $("#CartMsg").html(response);
          // }

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

<div class="cart_page" style="padding-bottom:30px">
    <h3 style="text-align: center;padding-bottom:30px;font-size: 21px;"><strong>SHOPPING CART</strong>/CECKOUT</h3>
    <div class="container"style="background-color:#FFFFFF;">
      
        <div class="row">
            <div class="col-md-8">
        @if($data)
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        {{-- <th scope="col">Remove</th> --}}
                        <th scope="col">Image</th>
                        <th scope="col">products</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $cnt=1; ?>
                    @foreach($data as $product)
                    <tr>                       
                    {{--      <th scope="row"><a style="font-size: 30px; color: red;" href="{{ url('cart/remove') }}/{{$product->rowId}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></th> --}}
                      <td> 
                        <img style="width: 41px;" src="{{ url('product_image') }}/{{ $product->options->image}}" alt="product image">
                      </td>
                        <td>
                            {{$product->name}}
                            <br>
                            <a class="btn btn-small" style="color: red;" data-toggle="modal" data-target="#exampleModal">remove </a>
                        </td>
                        <td>{{$product->price}}</td>
                        <td>
                        <input type="hidden" value="{{$product->rowId}}" id="rowID{{$product->id}}"/>
                                             {{-- <div class="cart-qty"> <span>Qty : </span>
                                                <input type="number" max="10" min="1"
                                                value="{{$product->qty}}" class="qty-fill"
                                                id="upCart{{$product->id}}" >
                                                    <a class="btn btn-primary" href="{{ url('/cart') }}">update</a>
                                                </div> --}}
           
                    <div class="center">
                        <div class="input-group" style="width: 119px;">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="quant{{$product->id}}">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                            <input type="text" name="quant{{$product->id}}" class="form-control" value="{{$product->qty}}" min="1" max="10" id="upCart{{$product->id}}">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant{{$product->id}}">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                        </div>

            {{-- <a class="btn btn-primary" href="{{ url('/cart') }}">update</a> --}}
                    </div>
                        </td>
                        <td>{{$product->subtotal}}</td>
                    </tr>
            {{-- modal  --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete: {{$product->name}} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p style="text-align: center;colo:#000;">Do you want to Delete {{$product->name}} ?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                <a class="btn btn-danger" href="{{ url('cart/remove') }}/{{$product->rowId}}">Yes</a>
                </div>
            </div>
            </div>
            </div>
            {{-- end modal  --}}
            @endforeach
                </tbody>
            </table>

        </div>
@endif
    </div>

       
            <div class="col-md-4" style="border:1px solid #0000001f">
                <div style="padding: 10px;" >
                    <div><h6>CART TOTALS</h6><hr></div>
                    <div style="padding-bottom: 10px">
                        <h5>Total: {{ Cart::subtotal() }} </h5>
                    </div>
                  <a href="{{ url('checkout') }}" >
                    <button  class="btn btn-primary"style="width:100%">proceed to checkout</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->


<style type="text/css">
  .center{
width: 27%;
  /*margin: 40px auto;*/
}
</style>
<script type="text/javascript">
    {{-- expr --}}
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    console.log(type);
    // console.log(tes);
    var input = $("input[name='"+fieldName+"']");
    // var input = $("")
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }
        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
 {{-- @endforeach --}}
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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}

{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script> --}}