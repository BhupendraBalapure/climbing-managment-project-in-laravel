<!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        @if (auth()->user()->is_admin == 1)
                        {{-- <a class="dropdown-item" href="">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a> --}}
                        {{-- <div class="dropdown-divider"></div> --}}
                        @elseif (auth()->user()->is_admin == 2)
                        {{-- <a class="dropdown-item" href="">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <a class="dropdown-item" href="">Messages</a>
                        <a class="dropdown-item" href="">Calendar</a> --}}
                        <div class="dropdown-divider"></div>
                         @elseif (auth()->user()->is_admin == 3)
                        {{-- <a class="dropdown-item" href="">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a> --}}
                        {{-- <div class="dropdown-divider"></div> --}}

                        @elseif (auth()->user()->is_admin == 4)
                        {{-- <a class="dropdown-item" href="">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a> --}}
                        {{-- <div class="dropdown-divider"></div> --}}
                        
                        @elseif (auth()->user()->is_admin == 5)
                        {{-- <a class="dropdown-item" href="">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a> --}}
                        {{-- <div class="dropdown-divider"></div> --}}
                        
                        @endif
                        <form method="POST" action="{{ url('logout') }}">
                        {{ csrf_field() }}
                        <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                     
                    </div>
                </li>
            </ul>
        </nav>