@extends("layouts.admin")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Teachers Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Teachers</a></li>
              <li class="breadcrumb-item active">Teachers Dashboard</li>
              <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">New</button>
                 @include('Partials.teacher.create')
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
                <h3 class="card-title">Teachers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Full name</th>
                    <th>Date Of Birth</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($teachers as $teacher)
                  <tr>
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->full_name}}</td>
                    <td>{{$teacher->birth_date}}</td>
                    <td> {{$teacher->gender}}</td>
                    <td>{{$teacher->email}}</td>
                    <td>{{$teacher->password}}</td>
                    <td>
                    <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-info{{$teacher->id}}">Edit</button>
                    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#modal-danger{{$teacher->id}}">Delete</button>

                  @include("Partials.teacher.update")

       <!-- /.delete-dialog -->


                  @include("Partials.teacher.delete")



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
