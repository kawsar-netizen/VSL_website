@extends('layouts.admin_master')
@section('title')
    Client Testimonial Edit
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
                  <h3 class="card-title">Client Testimonial Update</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{route('clientTestimonial.update',$clientTestimonianlEdit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="client_name" id="client_name" value="{{$clientTestimonianlEdit->client_name}}">
                        @error('client_name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="designation" id="designation" value="{{$clientTestimonianlEdit->designation}}">
                        @error('designation')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-8">
                          <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{$clientTestimonianlEdit->description}}</textarea>
                          @error('description')
                          <span class="text-danger">
                              {{ $message }}
                          </span>
                      @enderror
                        </div>
                      </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control" name="client_image" id="client_image" value="{{$clientTestimonianlEdit->description}}">
                        <img src="{{ asset('uploads/clientTestimonial/' . $clientTestimonianlEdit->client_image) }}"
                        width="60px" height="60px" alt="testimonialImage" style="border-radius: 3px; margin-top:4px;">
                        @error('client_image')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Rating</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="rating" required="required">
                            <option value="1" {{$clientTestimonianlEdit->rating == 1  ? 'selected' : ''}}>1</option>
                            <option value="2" {{$clientTestimonianlEdit->rating == 2  ? 'selected' : ''}}>2</option>
                            <option value="3" {{$clientTestimonianlEdit->rating == 3  ? 'selected' : ''}}>3</option>
                            <option value="4" {{$clientTestimonianlEdit->rating == 4  ? 'selected' : ''}}>4</option>
                            <option value="5" {{$clientTestimonianlEdit->rating == 5  ? 'selected' : ''}}>5</option>
                          </select>
                        @error('rating')
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
                                    value="1" {{ $clientTestimonianlEdit->status == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="deactive" type="radio" name="status"
                                    value="0"  {{ $clientTestimonianlEdit->status == '0' ? 'checked' : '' }}>
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
