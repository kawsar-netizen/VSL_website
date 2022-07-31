@extends('layouts.admin_master')
@section('title')
    Service Edit
@endsection
@section('service-open')
    menu-open
@endsection
@section('service')
    active
@endsection
@section('service_list')
    active
@endsection
@section('content_page')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
        <div class="col-md-10">
            <!-- Slider Form -->
            <div class="card card-info" style="margin-top: 70px;">
                <div class="card-header">
                  <h3 class="card-title">Service Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{route('service.update',$serviceEdit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="card_title" id="card_title" value="{{$serviceEdit->card_title}}">
                        @error('card_title')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-8">
                          <textarea name="card_description" id="card_description" cols="30" rows="5" class="form-control">{{$serviceEdit->card_description}}</textarea>
                          @error('card_description')
                          <span class="text-danger">
                              {{ $message }}
                          </span>
                      @enderror
                        </div>
                      </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Icon</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="card_icon" id="card_icon" value="{{$serviceEdit->card_icon}}">
                        @error('card_icon')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control" name="card_image" id="card_image" value="{{$serviceEdit->card_image}}">
                        <img src="{{ asset('uploads/service/' . $serviceEdit->card_image) }}"
                          style="width: 70px;height:70px; margin-top:4px;border-radius:3px;">
                        @error('card_image')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-8" style="margin-top: 10px;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="active" type="radio" name="status"
                                value="1" {{ $serviceEdit->status == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="deactive" type="radio" name="status"
                                value="0" {{ $serviceEdit->status == '0' ? 'checked' : '' }}>
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
