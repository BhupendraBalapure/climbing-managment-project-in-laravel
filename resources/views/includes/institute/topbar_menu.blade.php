<!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                            <img src="{{ auth()->user()->profile_photo_url }}" alt="Avatar" style="width:35px; border-radius: 50%;"> 
                        </a>

                        <a class="dropdown-item" href="{{ route('institute.profile') }}">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        
                        <form method="POST" action="{{ url('logout') }}">
                        {{ csrf_field() }}
                        <button class="dropdown-item" type="submit">Logout</button>
                        </form>

                    </div>
                </li>
            </ul>
        </nav>