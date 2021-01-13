@include('layouts.font_header')

<div class="container">
    <div class="row course-set courses__row">
        @if($products)
    @foreach($products as $product)
            <div class="col-md-3  course-block course-block-lessons text-center" style="padding-top: 30px;">

                <a href="{{url('addtocart/')}}">


                <img height="150" src="{{url('')}}/product_image/{{$product->product_photo}}" alt="no photo found"><br>

                {{$product->type?$product->type->type_name:'no types found'}}<br>
                {{$product->title}}<br>
                {{$product->price}}<br>

                </a>


            </div>
        @endforeach
            @endif
    </div>




</div>

























{{--<div class="container">--}}



    {{--@if($products)--}}



        {{--@foreach($products as $product)--}}



{{--<div class="row">--}}


    {{--<div class="col-md-3">--}}
        {{--<img height="70" src="{{url('')}}/product_image/{{$product->product_photo}}" alt="no photo found">--}}

{{--        {{$product->type?$product->type->type_name:'no types found'}}--}}
        {{--{{$product->title}}--}}
        {{--{{$product->price}}--}}


    {{--</div>--}}






    {{--<div class="col-md-3">--}}


        {{--<img height="70" src="{{url('')}}/product_image/{{$product->product_photo}}" alt="no photo found">--}}

        {{--        {{$product->type?$product->type->type_name:'no types found'}}--}}
        {{--{{$product->title}}--}}
        {{--{{$product->price}}--}}


    {{--</div>--}}






    {{--<div class="col-md-3">--}}

        {{--<img height="70" src="{{url('')}}/product_image/{{$product->product_photo}}" alt="no photo found">--}}

        {{--        {{$product->type?$product->type->type_name:'no types found'}}--}}
        {{--{{$product->title}}--}}
        {{--{{$product->price}}--}}



    {{--</div>--}}






    {{--<div class="col-md-3">--}}

        {{--<img height="70" src="{{url('')}}/product_image/{{$product->product_photo}}" alt="no photo found">--}}

        {{--        {{$product->type?$product->type->type_name:'no types found'}}--}}
        {{--{{$product->title}}--}}
        {{--{{$product->price}}--}}


    {{--</div>--}}









{{--</div>--}}





        {{--@endforeach--}}
    {{--@endif--}}









{{--</div>--}}























                        {{--<td>{{$product->id}}</td>--}}


                        {{--<td></td>--}}


                        {{--<td></td>--}}

                        {{--        <td>{{$product->types->type_name}}</td>--}}

                        {{--<td></td>--}}


                        {{--<td></td>--}}


                        {{--<td>{{$product->quantity}}</td>--}}


                        {{--<td>{{$product->product_status}}</td>--}}


                        {{--<td>{{$product->product_quality}}</td>--}}


                        {{--<td>{{$product->description}}</td>--}}












