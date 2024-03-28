<div class="modal fade" id="modal-info{{$student->id}}">

 <!-- /.edit-dialog -->
                     <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                         <h4 class="modal-title">Update student</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <div class="modal-body">
                         {!! Form::open(['route' => ['students.update',$student],"method"=>"Put",])!!}

         <div class="card-body">
           <div class="form-group">
             <label for="exampleInputEmail1">Full name</label>
             <input type="text" value="{{$student->full_name}}" name="full_name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
           </div>
             <div class="form-group">
                 <label for="dob">Date of Birth</label>
                 <input type="text" value="{{$student->birth_date}}" name="birth_date" class="form-control" id="dob" placeholder="Date of Birth">
             </div>

             <div class="form-group">
                 <label for="gender">Gender</label>
                 <select name="gender" class="form-control" id="gender">
                     <option value="">Select Gender</option>
                     <option value="male" {{ $student->gender === 'male' ? 'selected' : '' }}>Male</option>
                     <option value="female" {{ $student->gender === 'female' ? 'selected' : '' }}>Female</option>
                 </select>
             </div>

             <div class="form-group">
             <label for="group">Group</label>
             <select name="group" class="form-control" id="group">
                 @foreach($groupes as $groupe)
                     <option value="{{$groupe->id}}">{{$groupe->group}}</option>
                 @endforeach
             </select>
         </div>

           <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" value="{{ $student->email}}" name="email" class="form-control" id="email" placeholder="email">
           </div>

           <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" value="{{ $student->password }}" name="password" class="form-control" id="password" placeholder="password">
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
                         <button type="button" class="btn btn-primary">Save changes</button>
                         </div>
                     </div>
                     <!-- /.modal-content -->
                     </div>
                     </div>
