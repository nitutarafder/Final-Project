@extends('backend.index')


@section('content')

    <h1>Create User</h1>


@include('include.index')



{!! Form::open(['action'=>'AdminUsersController@store','files'=>true,'method'=>'POST']) !!}

        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('email','Email:') !!}

            {!! Form::text('email',null,['class'=>'form-control']) !!}

        </div>
           <div class="form-group">
            {!! Form::label('phone','Phone:') !!}

            {!! Form::text('phone',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('address','Address:') !!}

            {!! Form::text('address',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('role','Role:') !!}

            {!! Form::select('role',array('administrator'=>'Administrator','moderator' =>'moderator'),null,['class'=>'form-control']) !!}

        </div>
    <div class="form-group">
        {!! Form::label('is_active','Is Active:') !!}

        {!! Form::select('is_active',array('active'=>'Active','deactivate' =>'Deactivate'),null,['class'=>'form-control']) !!}

    </div>

        {{--<div class="form-group">--}}

            {{--{!! Form::label('is_active','Status') !!}--}}
            {{--{!! Form::select('is_active',array(0=>'not active',1=>'active'),0,['class'=>'form-control']) !!}--}}

        {{--</div>--}}

    <div class="form-group">
        {!! Form::label('photo','Photo') !!}
        {!! Form::file('photo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">

        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}

    </div>



    <div class="form-group">
        {!! Form::submit('Create user',['class'=>'btn btn-primary']) !!}

    </div>





    {!! Form::close() !!}





@endsection

@section('footer')

@endsection
