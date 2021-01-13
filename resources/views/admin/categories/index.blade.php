@extends('backend.index')


@section('content')
    <h1>Add Categories</h1>






    <div class="row">

        <div class="col-md-4">

        {!! Form::open(['action'=>'AdminCategoriesController@store','files'=>true,'method'=>'POST']) !!}

           <div class="form-group">

               {!! Form::label('category_name','Category Name: ') !!}
               {!! Form::text('category_name',null,['class'=>'form-control']) !!}

           </div>



            <div class="form-group">

                {!! Form::label('category_name','Category Name: ') !!}
                {!! Form::file('category_photo',null,['class'=>'form-control']) !!}

            </div>




            <div class="form-group">

                {!! Form::submit('Add',['class'=>'btn btn-primary']) !!}


            </div>


        {!! Form::close() !!}



            @include('include.index')

        </div>


        <div class="col-md-2">


        </div>


        <div class="col-md-6">

            <h1>Category Table</h1>
<div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                   
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>


                @if($categories)

                    @foreach($categories as $category)

                        <tr>
                            <td>{{$category->id}}</td>


                            <td>{{$category->category_name}}</td>


                            {{--<td><img height="50" src="{{url('')}}'image_category/' {{$category->category_photo}}" alt=""></td>--}}
                            <td><img height="50" src="{{url('')}}/image_category/{{$category->category_photo}}" alt="no photo found"></td>


                


                            <td><a href="{{url('admin/categories/'.$category->id.'/edit')}}"><button class="btn btn-primary">update</button></a></td>


                            <td>

                                <button class="btn btn-danger" data-catid="{{$category->id}}" data-toggle="modal" data-target="#delete_category">Delete</button>


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
<div class="modal  fade" id="delete_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('categories.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
                <p class="text-center" style="color: red;">
                    Are you sure you want to delete this?
                </p>
                <input type="hidden" name="category_id" id="cat_id" value="">

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

