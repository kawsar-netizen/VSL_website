@extends('layouts.admin_master')
@section('title')
    Category Edit
@endsection
@section('category_open')
    menu-open
@endsection
@section('category')
    active
@endsection
@section('category_list')
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
                        <div class="card card-info" style="margin-top: 100px;">
                            <div class="card-header">
                                <h3 class="card-title">Category Edit</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('category.update', $categoryEdit->id) }}"
                                method="POST">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="cat_name"
                                                value="{{ $categoryEdit->cat_name }}" id="cat_name"
                                                placeholder="Enter category name">
                                            @error('cat_name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="active" type="radio" name="status"
                                                value="1" {{ $categoryEdit->status == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="deactive" type="radio" name="status"
                                                value="0" {{ $categoryEdit->status == '0' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="deactive">Deactive</label>
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
