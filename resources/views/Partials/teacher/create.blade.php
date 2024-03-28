<div class="modal fade" id="modal-default">

 <!-- /.edit-dialog -->
                     <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                         <h4 class="modal-title">Create new Teacher</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <div class="modal-body">
                         {!! Form::open(['route' => 'teachers.store',"method"=>"Post"])!!}

<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Full name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="text" name="birth_date" class="form-control" id="dob" placeholder="Date of Birth">
  </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select name="gender" class="form-control" id="gender">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
{{--    <div class="form-group">--}}
{{--        <label for="group">Group</label>--}}
{{--        <select name="group" class="form-control" id="group">--}}
{{--            @foreach($groupes as $groupe)--}}
{{--                <option value="{{$groupe->id}}">{{$groupe->group}}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--    </div>--}}

    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password">
        <input type="checkbox" onclick="myFunction()" class="form-group">Show Password
        <script>
            function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </div>

</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
{!! Form::close() !!}
                         </div>
                         <div class="modal-footer justify-content-between">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                     </div>
                     <!-- /.modal-content -->
                     </div>
</div>
