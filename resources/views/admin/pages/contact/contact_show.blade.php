@extends('layouts.admin_master')
@section('title')
    Contact Show
@endsection
@section('menu-open')
    menu-open
@endsection
@section('contact')
    active
@endsection
@section('contact_list')
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
            <!-- Category Form -->
            <div class="card card-info" style="margin-top: 70px;">
                <div class="card-header">
                  <h3 class="card-title">Contact Us Show</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="client_name" id="client_name" value="{{$contactShow->client_name}}" readonly>
                        @error('client_name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="client_email" id="client_email" value="{{$contactShow->client_email}}" readonly>
                        @error('client_email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Subject</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="subject" id="subject" value="{{$contactShow->subject}}" readonly>
                        @error('subject')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-8">
                      <textarea name="message" id="message" cols="30" rows="5" class="form-control" readonly>{{$contactShow->message}}</textarea>
                      @error('message')
                      <span class="text-danger">
                          {{ $message }}
                      </span>
                  @enderror
                    </div>
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <!-- /.card-footer -->
          
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
