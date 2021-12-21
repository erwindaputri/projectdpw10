@php 

    function checkRouteActive($route){
     if(Route::current()->uri == $route) return 'active';
    }
  @endphp

   
<aside class="main-sidebar sidebar-dark-Success ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public') }}/dist/img/hijau.jpeg" alt="ADMIN" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="image">
          <img src="{{ url('public') }}/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
              {{request()->user()->username}}
            @else
              silahkan Login
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{url('dashboard')}}" class="nav-link {{checkRouteActive('dashboard')}}">
                  <i class="fas fa-home"></i>
                  <p>
                  Beranda
                  </p>
                </a>
             </li>
            <li class="nav-item">
                <a href="{{url('admin/produk')}}" class="nav-link {{checkRouteActive('admin/produk')}}">
                  <i class="fas fa-boxes"></i>
                  <p>
                  Produk
                  </p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{url('admin/kategori')}}" class="nav-link {{checkRouteActive('admin/kategori')}}">
                  <i class="far fa-chart-bar"></i>
                  <p>
                  Kategori
                  </p>
                </a> 
              </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{checkRouteActive('admin/user')}}">
              <i class="fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>