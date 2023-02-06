<h2 class="fw-bold">Welcome {{Auth::guard('admin')->user()->name }}</h2>

{{-- <h2>Welcome admin</h2> --}}

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <a href="route('admin.logout')" class="dropdown-item px-4"
        onclick="event.preventDefault();
            this.closest('form').submit();">
        {{ __('Log Out') }}
    </a>
</form>