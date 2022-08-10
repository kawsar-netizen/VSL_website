  @extends('layouts.admin_master')
  @section('title')
      Dashboard
  @endsection
  @section('dashboard')
      active
  @endsection
  @section('content_page')
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0">Dashboard</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Dashboard</li>
                          </ol>
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                              <div class="inner">
                                  <h3>{{ $totalProduct }}</h3>

                                  <p>Total Product</p>
                              </div>
                              <div class="icon">
                                  <i class="fab fa-product-hunt nav-icon"></i>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3>{{ $totalService }}</h3>

                                  <p>Total Service</p>
                              </div>
                              <div class="icon">
                                  <i class="fas fa-taxi nav-icon"></i>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                              <div class="inner">
                                  <h3>{{ $totalClient }}</h3>

                                  <p>Total Client</p>
                              </div>
                              <div class="icon">
                                  <i class="fas fa-user-nurse nav-icon"></i>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-primary">
                              <div class="inner">
                                  <h3>{{ $totalEmployee }}</h3>

                                  <p>Total Employee</p>
                              </div>
                              <div class="icon">
                                  <i class="fas fa-users nav-icon"></i>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <h3>{{ $totalContact }}</h3>

                                  <p>Total Contact</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                  </div>
                  <!-- /.row -->
              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
  @endsection
