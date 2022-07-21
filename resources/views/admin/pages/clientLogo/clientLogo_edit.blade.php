@extends('layouts.admin_master')
@section('title')
    ClientLogo Edit
@endsection
@section('content_page')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
        <div class="col-md-10">
            <!-- ClientLogo Form -->
            <div class="card card-info" style="margin-top: 70px;">
                <div class="card-header">
                  <h3 class="card-title">ClientLogo Update</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{route('clientLogo.update',$clientEdit->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="title" id="title" value="{{$clientEdit->title}}">
                        @error('title')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-8">
                          <input type="file" class="form-control" name="image" id="image" value="{{$clientEdit->image}}">
                          <img src="{{ asset('uploads/clientLogo/' . $clientEdit->image) }}"
                          style="width: 70px;height:70px; margin-top:4px;border-radius:3px;">
                          @error('image')
                          <span class="text-danger">
                              {{ $message }}
                          </span>
                      @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="active" type="radio" name="status"
                                    value="1" {{ $clientEdit->status == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="deactive" type="radio" name="status"
                                    value="0" {{ $clientEdit->status == '0' ? 'checked' : '' }}>
                                <label class="form-check-label" for="deactive">Deactive</label>
                            </div>
                          @error('status')
                          <span class="text-danger">
                              {{ $message }}
                          </span>
                      @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                      </div> 
                  </div>
                  <!-- /.card-body -->
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

@endsection
