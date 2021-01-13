@extends('backend.index');


@section('content')


    <h1>Add types</h1>

    <div class="row">


        <div class="col-md-4">


            {!! Form::open(['action'=>'AdminTypesController@store','method'=>'POST']) !!}



            <div class="form-group">

                {!! Form::label('category_name','Category Name: ') !!}
                {!! Form::text('category_name',array(''=>'select Category')+,null,['class'=>'form-control']) !!}

            </div>




            <div class="form-group">

                {!! Form::label('category_name','Category Name: ') !!}
                {!! Form::text('category_name',null,['class'=>'form-control']) !!}

            </div>




            <div class="form-group">

                {!! Form::submit('Add',['class'=>'btn btn-primary']) !!}


            </div>




            {!! Form::close() !!}



            @include('include.index')

        </div>








        <div class="col-md-8">

            <h1>all type list</h1>


        </div>






    </div>











@endsection


@section('footer')

@endsection
