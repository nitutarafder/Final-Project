{{-- 



@if($categories)

<div class="nav-item dropdown">


    @foreach( $categories as $category)

    <a href="{{url('category/')}}" class="list-group-item list-group-item-action"><i class="fa fa-shopping-bag icons" aria-hidden="true"></i>{{$category->category_name}} <i style="float:right;" class="fa fa-angle-right" aria-hidden="true"></i></a>





    <div class="dropdown-menu product-menu product-menu-style " aria-labelledby="navbarDropdown" >

        <div class="container">

            <div class="row" style="background-color: #FFFFFF;">


                {{--@foreach($category->types as $b)--}}
                {{--<div class="col-md-4">--}}
                    {{--<p><strong>columns one</strong></p>--}}

                        {{--<a class="dropdown-item" href="#">{{$b->type_name?$b->type_name:'no types found'}}</a>--}}


                    {{--<br>--}}

                {{--</div>--}}
                {{--@endforeach--}}



            </div>

        </div>

        <!-- <div class="dropdown-divider"></div> -->

    </div>


    @endforeach
    @endif


</div>
 --}}