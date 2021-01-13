@extends('backend.index')


@section('content')

   


@include('include.index')

 <h1 class="text-center" style="padding-bottom: 30px;">User Info</h1>
<div class="row">

<div class="col-md-3">

 

</div>



        <div class="col-md-6" style="background-color: white; color: black; padding-top: 20px; padding-bottom: 20px;">

        @if ($users)
          
               <ul style=" font-size: 20px;" >
                   <li style=" line-height: 40px; " ><strong>Name:</strong> {{$users->name}}</li>
                   <li style=" line-height: 40px; "><strong>Email:</strong> {{$users->email}}</li>
                   <li style=" line-height:40px; "><strong>Contact: </strong>{{$users->phone}}</li>
               </ul>
      

           @else
           <h2>no user found</h2>
        @endif


        </div>

</div>

@endsection

@section('footer')

@endsection
