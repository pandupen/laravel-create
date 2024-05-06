@extends('layouts.page.design_page')
@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kepengurusan Desa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kepengurusan Desa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
          @foreach ($anggota as $ang)
          @if ($ang->kode == 1)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                   <h3>{{$ang->nama}}</h3>
                    <p>{{$ang->jabatan}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
          @elseif ($ang->kode == 2)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$ang->nama}}</h3>
                    <p>{{$ang->jabatan}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                </div>
              </div>
              @endif
              @endforeach
          </div>
    </section>
    <!-- /.content -->
  </div>

  @endsection
 