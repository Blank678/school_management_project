@extends("layouts.admin")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Group Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">group</a></li>
              <li class="breadcrumb-item active">Group Dashboard</li>
              <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">New</button>
              <div class="modal fade" id="modal-default">

 <!-- /.edit-dialog -->
                     <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                         <h4 class="modal-title">Create new group</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <div class="modal-body">
                         {!! Form::open(['route' => 'groupes.store',"method"=>"Post"])!!}

                         <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Group Number</label>
                    <input type="text"  name="group" class="form-control" id="exampleInputEmail1" placeholder="group">
                  </div>
                  <div class="form-group">
                     <label for="num_of_stu">Number of Students</label>
                     <input type="number"  name="num_of_stu" class="form-control" id="num_of_stu" placeholder="num_of_stu">
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
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Group</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Group Number</th>
                    <th>Number of students</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($groupes as $groupe)
                  <tr>
                    <td>{{$groupe->id}}</td>
                    <td>{{$groupe->group}}</td>
                    <td>{{$groupe->num_of_stu}}</td>
                    <td>
                    <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-info{{$groupe->id}}">Edit</button>
                    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#modal-danger{{$groupe->id}}">Delete</button>
                    <div class="modal fade" id="modal-info{{$groupe->id}}">

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
                                {!! Form::open(['route' => ['groupes.update',$groupe],"method"=>"Put",])!!}

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Group</label>
                    <input type="text" value="{{$groupe->group}}" name="group" class="form-control" id="exampleInputEmail1" placeholder="Group Number">
                  </div>
                  <div class="form-group">
                        <label for="num_of_stu">Number of Students</label>
                        <input type="number" value="{{$groupe->num_of_stu}}" name="num_of_stu" class="form-control" id="num_of_stu" placeholder="Number of students">
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

       <!-- /.delete-dialog -->



                            <div class="modal fade" id="modal-danger{{$groupe->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Teacher</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {!! Form::open(['route' => ['groupes.destroy',$groupe],"method"=>"Delete"])!!}

            <div class="modal-body">
              <p>Delete &hellip; {{$groupe->full_name}}</p>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">Delete</button>
            </div>
                {!! Form::close() !!}

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



                    </td>
                  </tr>


                  @endforeach

</tbody>
</table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>


        @endsection
