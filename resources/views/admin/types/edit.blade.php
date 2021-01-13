@extends('backend.index')


@section('content')



    <h1>update Types</h1>


    @include('include.index')

    <div class="row">



        <div class="col-md-3"></div>



        <div class="col-md-6">



            {!! Form::model($types,array('action'=>['AdminTypesController@update',$types->id],'method'=>'PATCH')) !!}



            <div class="form-group">

                {!! Form::label('category_name','Category Name: ') !!}
                {!! Form::select('category_id',array(''=>'select category')+ $category,null,['class'=>'form-control']) !!}

            </div>




            <div class="form-group">

                {!! Form::label('type_name','Type Name: ') !!}
                {!! Form::text('type_name',null,['class'=>'form-control']) !!}

            </div>




            <div class="form-group">

                {!! Form::submit('update',['class'=>'btn btn-primary']) !!}


            </div>




            {!! Form::close() !!}







        </div>




        <div class="col-md-3"></div>


    </div>





@endsection







@section('footer')




@endsection
