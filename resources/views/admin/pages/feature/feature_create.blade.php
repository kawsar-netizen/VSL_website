@extends('layouts.admin_master')
@section('title')
    Feature Add
@endsection
@section('feature-open')
    menu-open
@endsection
@section('feature')
    active
@endsection
@section('feature_list')
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
                                <h3 class="card-title">Feature Create</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('feature.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tab_name" id="tab_name"
                                                placeholder="Enter feature name">
                                            @error('tab_name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea name="tab_description" id="tab_description"
                                                class="form-control summernote"placeholder="Enter feature description"></textarea>
                                            @error('tab_description')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image" id="image"
                                                placeholder="Enter feature image">
                                            @error('image')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tab_icon" id="tab_icon"
                                                placeholder="Enter  feature icon">
                                            @error('tab_icon')
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
@section('summernote_script')
<script>
    $(function () {
      // Summernote
      $('.summernote').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endsection
