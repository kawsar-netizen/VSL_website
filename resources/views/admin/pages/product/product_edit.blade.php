@extends('layouts.admin_master')
@section('title')
    Product Edit
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
                                <h3 class="card-title">Product Update</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('product.update', $productEdit->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="title" id="title"
                                                value="{{ $productEdit->title }}">
                                            @error('title')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-8">
                                            <select name="category_id" id="category" class="category form-control"
                                                required="required">
                                                <option disable selected>--select category--</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $productEdit->category_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->cat_name }}</option>
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
                                            <input type="file" class="form-control" name="Thumbnail_image"
                                                id="Thumbnail_image" value="{{ $productEdit->image }}">
                                            <img src="{{ asset('uploads/product/' . $productEdit->image) }}" width="60px"
                                                height="60px" alt="testimonialImage"
                                                style="border-radius: 3px; margin-top:4px;">
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
                                            <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $productEdit->description }}</textarea>
                                            @error('description')
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
                        {{-- Gallery Images section --}}
                        <div class="card card-info" style="margin-top: 70px;">
                            <div class="card-header">
                                <h3 class="card-title">Gallery Image Update</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Gallery Images</label>
                                    <div class="row p-2">
                                        
                                        @foreach($g_images as $p_image)
                                          <div class="col-md-4">
                                              <img src="{{ asset($p_image->image) }}" class="img-fluid">
                                              <br>
                                             
                                              <a href="">Delete {{$p_image->id}}</a>
                                              
                                          </div>
                                        @endforeach
                                    </div>
                            <form class="form-horizontal" action="{{ route('product.update', $productEdit->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="p_id" value="{{$productEdit->id}}">
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Add More Images</label>
                                    <input type="file" class="form-control" name="multi_image[]" placeholder="Enter product images" multiple>
                                  </div>
                                    <div class="form-group">
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
                        {{-- Client section --}}
                        <div class="card card-info" style="margin-top: 70px;">
                            <div class="card-header">
                                <h3 class="card-title">Client</h3>
                            </div>
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Client names</label>
                            <div class="form-group row">
                              
                              <div class="col-md-6">
                                <div class="card-body">
                                  <ul>
                                    @foreach($p_clients as $p_client)
                                    <li>{{ $p_client->id }} <a href="">Delete</a></li>
                                  @endforeach
                                  
              
                                  </ul>
                                  </div>
                                  
                              </div>

                              <div class="col-md-6">
                                <form class="form-horizontal" action="{{ route('product.update', $productEdit->id) }}"
                                  method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <div class="card-body">
  
                                      <div class="form-group row">
                                          <label for="inputEmail3" class="col-sm-2 col-form-label">Gallery Images</label>
                                          <div class="col-sm-8">
                                              <input type="file" class="form-control" name="Thumbnail_image"
                                                  id="Thumbnail_image" value="{{ $productEdit->image }}">
                                              <img src="{{ asset('uploads/product/' . $productEdit->image) }}"
                                                  width="60px" height="60px" alt="testimonialImage"
                                                  style="border-radius: 3px; margin-top:4px;">
                                              @error('image')
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
                          </div>

                    
                            
                        </div>
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
