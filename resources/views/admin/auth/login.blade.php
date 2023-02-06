@extends('layouts.guest')
    <!-- Session Status -->
@section('content')
    
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ url('admin/login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <h2>Login</h2>
            <label for="email" value="__('Email')" class="form-label">Email</label>
    
            <input type="text" id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus >
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" :value="__('Password')" class="form-label">Password</label>

            <input type="password" id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" >

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="form-label">
                {{-- <input id="remember_me" type="checkbox" class="form-control" name="remember"> --}}
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-muted me-3" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
                <a href="{{route('admin.register')}}">Register now </a>
            <button type="submit" class="btn btn-dark w-100">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
@endsection
