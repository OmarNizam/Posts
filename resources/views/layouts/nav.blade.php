{{-- <div class="navbar navbar-dark bg-dark">
  <div class="container d-flex justify-content-between">
    <a href="#" class="navbar-brand">Posts</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</div> --}}



<div class="navbar navbar-dark bg-dark">
  <div class="container">
    <nav class="nav">
      <a class="nav-link active" href="/">Home</a>
      <a class="nav-link" href="/posts/create">Create Post</a>
      <a class="nav-link" href="#">Press</a>
      <a class="nav-link" href="#">New hires</a>
      <a class="nav-link" href="#">About</a>
    </nav>
    <!-- Right Side Of Navbar -->
    <nav class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @else
          
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>

        @endguest
    </nav>
  </div>
</div>
<hr />
