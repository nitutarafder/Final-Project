@extends('backend.index')


@section('content')

    <h1>edit User</h1>


@include('include.index')


<div class="row">

<div class="col-md-3">

    <img  src="{{url('')}}/image/{{$users->photo}}" alt="" class="img-fluid img-thumbnail">

</div>



        <div class="col-md-9">

        {{--    {!! Form::model($user,['action'=>['AdminUsersController@update',$user->id],'files'=>true,'method'=>'PATCH']) !!}--}}


                    {!! Form::model($users, array('action' =>[ 'AdminUsersController@update',$users->id],'files'=>true, 'method' => 'PUT')) !!}


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
                        {!! Form::select('role',array('administrator'=>'Administrative','moderator'=>'Moderator'),$users->role,['class'=>'form-control']) !!}
                    </div>



                    <div class="form-group">

                        {!! Form::label('is_active','Status') !!}
                        {!! Form::select('is_active',array('active'=>'active','deactivate'=>' not active'),$users->is_active,['class'=>'form-control']) !!}

                    </div>



                    <div class="form-group">
                        {!! Form::label('photo','Photo') !!}
                        {!! Form::file('photo',null,['class'=>'form-control']) !!}
                    </div>



                    <div class="form-group">

                        {!! Form::label('password','Password') !!}
                        {!! Form::password('password',['class'=>'form-control']) !!}

                    </div>



                    <div class="form-group">
                        {!! Form::submit('Update user',['class'=>'btn btn-primary']) !!}

                    </div>



                    {!! Form::close() !!}


            </div>

</div>

@endsection

@section('footer')

@endsection
