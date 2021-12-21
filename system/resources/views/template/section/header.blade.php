<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('dashboard')}}" class="nav-link">Home</a>
      </li>
      
    </ul>

    <ul class="navbar-nav ml-auto">

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          @if(Auth::check())
            {{request()->user()->username}}
          @else
            silahkan Login
          @endif
          <img src="{{ url('public') }}/dist/img/user.png" alt="User Avatar" style="height: 150%" class="img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
          <i class="fa fa-user"></i> Profile
          </a>
          <a href="#" class="dropdown-item">
          <i class="fa fa-cog"></i> Setting
          </a>
          <a href="/login" class="dropdown-item">
          <i class="fas fa-sign-out-alt"></i> Log out
          </a>
        </div>
      </li>
    </ul>
</nav>


   