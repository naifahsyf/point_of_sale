<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('AdminLTE-2/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Naifah Syaripudin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">UTAMA</li>
        <li>
          <a href="">
          <i class="fa fa-tasks" aria-hidden="true"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="header">MENU</li>
        <li>
          <a href="{{ route('kategori.index') }}">
          <i class="fa fa-th"></i> <span>Ketegori</span>
          </a>
        </li>
        <li>
          <a href="{{ route('produk.index') }}">
          <i class="fa fa-cart-plus" aria-hidden="true"></i><span>Produk</span>
          </a>
        </li>
        <li class="header">TRANSAKSI</li>
        <li>
          <a href="">
          <i class="fa fa-circle-o text-red"></i> <span>Pengeluaran</span>
          </a>
        </li>
        <li>
          <a href="">
         <i class="fa fa-circle-o text-aqua"></i> <span>Pembelian</span>
          </a>
        </li>
        <li>
        <a href="">
        <i class="fa fa-edit"></i> <span>Daftar Pembelian</span>
        </a>
        </li>
        <li>
          <a href="">
          <i class="fa fa-book"></i> <span>Transaksi Penjualan</span></a></li>>
          </a>
        </li>
        </li>
        <li class="header">SISTEM</li>
        <li>
          <a href="">
          <i class="fa fa-users" aria-hidden="true"></i><span>Users</span>
          </a>
        </li>
        <li>
          <a href="">
          <i class="fa fa-cogs" aria-hidden="true"></i> <span>Setting</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>