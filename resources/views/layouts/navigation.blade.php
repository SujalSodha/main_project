<nav class="navbar-default navbar-static-side  position-absolute text-light overflow-auto" style="max-width:15%; background-color: black; height:162%">
    <div class="sidebar-collapse">
         <div class="logo-section p-3  border-bottom">
           <h3>Out reach bird</h3>
            </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

            <!-- Left Side Of Navbar -->
             <ul class="navbar-nav text-start h6">
            <li class="nav-item {{route('dashboard')}}">
                <a  class='nav-link' href="{{ route('dashboard') }}" >
                    <i class="fa fa-dashboard mx-2"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{route('profile.edit')}}">
                <a  class='nav-link' href="{{ route('profile.edit') }}">
                    <i class="fa fa-user mx-2"></i><span>Profile</span>
                </a>
            </li>
            </ul> 
    </div>
</nav>