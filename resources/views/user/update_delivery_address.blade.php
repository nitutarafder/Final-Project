@include('layouts.font_header')

<div class="container">
<div class="row" >


<div class="col-md-3 ">

   

</div>



        <div class="col-md-6 col-sm-12" style="padding-top: 40px; padding-bottom: 40px;" >
                
                <h2>Update Shipping address</h2>

                    {!! Form::model($d_address, array('action' =>[ 'OrderController@OrderAddressUpdate',$d_address->id], 'method' => 'POST')) !!}


                    <div class="form-group">

                        {!! Form::label('name','Name:') !!}
                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name', 'required']) !!}


                    </div>



                    <div class="form-group">
                        {!! Form::label('email','Email:') !!}
                        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'email', 'required']) !!}

                    </div>

                   <div class="form-group">
                        {!! Form::label('phone','Phone:') !!}
                        {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'phone', 'required']) !!}

                    </div>


                    <div class="form-group">
                        {!! Form::label('city','City:') !!}
                        {!! Form::text('city',null,['class'=>'form-control','placeholder'=>'City', 'required']) !!}

                    </div>

                    <div class="form-group">
                        {!! Form::label('fullAddress','Full Address:') !!}
                        {!! Form::text('fullAddress',null,['class'=>'form-control','placeholder'=>'Full Address', 'required']) !!}

                    </div>


                    <div class="form-group">
                        {!! Form::submit('Update user',['class'=>'btn btn-primary']) !!}

                    </div>



                    {!! Form::close() !!}


            </div>
            <div class="col-md-3">

   

            </div>

</div>
</div>

@include('layouts/font_footer')