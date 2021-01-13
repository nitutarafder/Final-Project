@extends('backend.index');


@section('content')


    <h1>Add types</h1>

    <div class="row">


        <div class="col-md-4">


            {!! Form::open(['action'=>'AdminTypesController@store','method'=>'POST']) !!}



            <div class="form-group">

                {!! Form::label('category_name','Category Name: ') !!}
                {!! Form::select('category_id',array(''=>'select category')+ $category,null,['class'=>'form-control']) !!}

            </div>




            <div class="form-group">

                {!! Form::label('type_name','Type Name: ') !!}
                {!! Form::text('type_name',null,['class'=>'form-control']) !!}

            </div>




            <div class="form-group">

                {!! Form::submit('Add',['class'=>'btn btn-primary']) !!}


            </div>




            {!! Form::close() !!}



            @include('include.index')

        </div>








         <div class="col-md-1">


        </div>


        <div class="col-md-7">

            <h1>Type Table</h1>
<div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Type Name</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($types)

                    @foreach($types as $type)
                        <tr>
                            <td>{{$type->id}}</td>
                            <td>{{$type->category?$type->category->category_name:'category  not found'}}</td>
                            <td>{{$type->type_name}}</td>
                            <td><a href="{{url('admin/types/'.$type->id.'/edit')}}"><button class="btn btn-primary">update</button></a></td>


                            <td>

                                 <button class="btn btn-danger" data-typid="{{$type->id}}" data-toggle="modal" data-target="#delete_type">Delete</button>


                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
</div>
        </div>

    </div>





{{-- modal  --}}
<div class="modal  fade" id="delete_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('types.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
                <p class="text-center" style="color: red;">
                    Are you sure you want to delete this?
                </p>
                <input type="hidden" name="type_id" id="typ_id" value="">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
          </div>
      </form>
    </div>
  </div>
</div>





@endsection


@section('footer')

@endsection
