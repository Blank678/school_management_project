<div class="modal fade" id="modal-info{{$teacher->id}}">

 <!-- /.edit-dialog -->
                     <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                         <h4 class="modal-title">Default Modal</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <div class="modal-body">
                         {!! Form::open(['route' => ['teachers.update',$teacher],"method"=>"Put",])!!}

         <div class="card-body">
           <div class="form-group">
             <label for="exampleInputEmail1">Full name</label>
             <input type="text" value="{{$teacher->full_name}}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full name">
           </div>
           <div class="form-group">
             <label for="dob">Date of Birth</label>
             <input type="text" value="{{ $teacher->birth_date }}" name="birth_date" class="form-control" id="dob" placeholder="Date of Birth">
           </div>

             <div class="form-group">
                 <label for="gender">Gender</label>
                 <select name="gender" class="form-control" id="gender">
                     <option value="">Select Gender</option>
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                 </select>
             </div>
             <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" value="{{ $teacher->email }}" name="email" class="form-control" id="email" placeholder="Email">
             </div>
             <div class="form-group">
                 <label for="dob">Password</label>
                 <input type="password" value="{{ $teacher->password }}" name="password" class="form-control" id="password" placeholder="password">
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
