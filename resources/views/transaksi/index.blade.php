@extends('layouts.master')
@section('product')
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">TokoSepatu.Com</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/dist/img/avatar.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">

      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('sepatu.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Product
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pelanggan.index') }}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{ route('transaksi.index') }}" class="nav-link active">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Transaksi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-left"></i> {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="content-wrapper" style="min-height: 1302.12px;">
  <section class="content" style="padding-top: 10px;">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <button class="btn btn-warning" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>

        <div class="card-body">
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Pesanan</th>
                  <th>Warna</th>
                  <th>Ukuran</th>
                  <th>Harga</th>
                  <th width="20%" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm mr-2" id="editData" data-toggle="modal" data-target="#modalEdit" data-id=""><i class="fa fa-pen"></i> Edit</button>
                                        <button class="btn btn-danger btn-sm" id="delData" data-id=""><i class="fa fa-trash"></i> Delete</button>
                                    </td>
                                </tr> -->

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="modalAddLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama Komponen</label>
          <input type="text" id="nm_komponen" class="form-control" placeholder="ex : Pengungkit" required>
        </div>
        <div class="form-group">
          <label>Display num</label>
          <input type="number" id="display_num" value="" class="form-control" placeholder="ex : 1" readonly>
        </div>
      </div>
      <div class="modal-footer">
        <button id="addData" class="btn btn-warning"><i class="fa fa-paper-plane mr-1"></i>Tambah</button>
      </div>
    </div>
  </div>
</div>
@endsection