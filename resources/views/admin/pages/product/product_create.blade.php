@extends('layouts.admin_master')
@section('title')
    Product Add
@endsection
@section('content_page')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
        <div class="col-md-10">
            <!-- Product Form -->
            <div class="card card-info" style="margin-top: 70px;">
                <div class="card-header">
                  <h3 class="card-title">Product Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter product title">
                        @error('title')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Client Name</label>
                      <div class="col-sm-8">
                        <select name="client[]" id="client" class=" form-control" required="required" multiple="multiple">
                          <option selected>--select client--</option>
                          @foreach($clients as $item)
                          <option value="{{ $item->id }}">{{ $item->title}}</option>
                      @endforeach
                      </select>
                        @error('client')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                      <div class="col-sm-8">
                        <select name="category_id" id="category" class="category form-control" required="required">
                          <option disable selected>--select category--</option>
                          @foreach($categories as $item)
                          <option value="{{ $item->id }}">{{ $item->cat_name}}</option>
                      @endforeach
                      </select>
                        @error('pro_category')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Thumbnail Image</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control" name="image"placeholder="Enter product thumbnail  image">
                        @error('image')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-8">
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control"placeholder="Enter product description"></textarea>
                        @error('description')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Gallery Images</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control" name="multi_image[]" placeholder="Enter product images" multiple>
                        @error('multi_image')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-info">Submit</button>
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
