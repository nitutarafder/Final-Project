@extends('backend.index')


@section('content')

    @include('include.index')


    {!! Form::model($categories, array('action' =>[ 'AdminCategoriesController@update',$categories->id],'files'=>true ,'method' => 'PATCH')) !!}
    <div class="form-group">

        {!! Form::label('name','Category Name: ') !!}
        {!! Form::text('category_name',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('name','Category Name: ') !!}
        {!! Form::file('category_photo',null,['class'=>'form-control']) !!}

    </div>


    <div class="form-group">

        {!! Form::submit('update',['class'=>'btn btn-primary']) !!}


    </div>

    {!! Form::close() !!}






@endsection


@section('footer')


