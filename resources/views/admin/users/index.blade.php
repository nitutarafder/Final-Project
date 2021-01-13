@extends('backend.index')




@section('content')

    @if(Session::has('delete_user'))

            <p class="bg-danger">{{Session('delete_user')}}</p>
        @endif




    <h1>All users</h1>

<div class="table-responsive">
    <table class="table">
        <thead>




        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Role</th>
            <th>Is Active</th>
            <th>Created</th>
            {{-- <th>Updated</th> --}}
            <th>action</th>
            <th>delete</th>

        </tr>




        </thead>




        <tbody>



    @if($users)


        @foreach($users as $user)


            <tr>


                <td>{{$user->id}}</td>


{{--            <td><img height="50" src="{{$user->photo? $user->photo->file : 'http://placehold.it/400X400'}}" alt="no photo found"></td>--}}


                <td><img height="50" src="{{url('')}}/image/{{$user->photo}}" alt="no photo found"></td>


                <td>{{$user->name}}</td>


                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->is_active}}</td>


                <td>{{$user->created_at->diffForHumans()}}</td>

               {{--  <td>{{$user->updated_at->diffForHumans()}}</td> --}}



                <td ><a class="btn btn-primary" href="{{ url('admin/users/'.$user->id.'/edit') }}">update</a></td> 



                <td>




<button class="btn btn-danger" data-userid="{{$user->id}}" data-toggle="modal" data-target="#delete">Delete</button>

                </td>

            </tr>
        @endforeach

    @endif

 </tbody>
</table>
</div>






<!-- Modal -->

<div class="modal  fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('users.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
                <p class="text-center" style="color: red;">
                    Are you sure you want to delete this?
                </p>
                <input type="hidden" name="user_id" id="user_id" value="">

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


