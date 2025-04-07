@php
    $menus = [
        (object) [
            "title" => "Merk",
            "path" => "brands"
        ],
        // (object) [
        //     "title" => "Kategori",
        //     "path" => "categories"
        // ],
        (object) [
            "title" => "Tipe",
            "path" => "types"
        ],
        // (object) [
        //     "title" => "Kendaraan",
        //     "path" => "vehicles"
        // ]
    ];
@endphp
{{-- @dump(auth()->user()) --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('assets/logos/logo-fbc.jpeg') }}" alt="Logo FBC" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Toko Accu FBC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{ asset('templates/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="#" class="d-block">{{ !auth()->check() ? 'Selamat Datang!' : auth()->user()->name }}</a>
        </div>
      </div>

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> --}}

        @if(auth()->check())
            <li class="nav-item">
                <a href="/" class="nav-link {{ request()->path() === '/' ? 'active' : '' }}">
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="/products" class="nav-link {{ request()->path() === 'products' ? 'active' : '' }}">
                    <p>
                        Produk
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <p>
                        Transaksi
                    </p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/expenses" class="nav-link
                            {{ request()->path() === 'expenses' ? 'active' : '' }}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pengeluaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/purchases" class="nav-link
                            {{ request()->path() === 'purchases' ? 'active' : '' }}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pembelian</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/sales" class="nav-link
                            {{ request()->path() === 'sales' ? 'active' : '' }}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Penjualan</p>
                        </a>
                    </li>
                </ul>
            </li>

            @if (auth()->user()->is_admin)
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p>
                            Lainnya
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach ($menus as $menu)
                            <li class="nav-item">
                                <a href="/{{ $menu->path }}" class="nav-link
                                    {{ request()->path() === $menu->path ? 'active' : '' }}
                                    ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ $menu->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @endif

          {{-- @foreach ($menus as $menu)
            <li class="nav-item">
                <a href="{{ $menu->path }}" class="nav-link {{ request()->path() === $menu->path ? 'active' : '' }}">
                <p>
                    {{ $menu->title }}
                </p>
                </a>
            </li>
          @endforeach --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
