<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Beranda</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            @if (auth()->check())
                {{-- <form action="/logout" method="post">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-outline-danger btn-sm ">Log Out</button>
                </form> --}}
                <button type="submit" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-logout">Log Out</button>
            @else
                <a href="/login" class="btn btn-outline-danger btn-sm">Sign In</a>
            @endif
        </li>
    </ul>
  </nav>

@include('layouts.components.logout-confirmation')
