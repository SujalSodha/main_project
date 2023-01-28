@extends('layouts.guest')
    @section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label class="form-label" for="name" :value="__('Name')" >Name</label>
            <input type="text" id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" :value="__('Email')" class="form-label">Email</label>
            <input type="text" id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="" for="password" :value="__('Password')" class="form-label">Password</label>

            <input type="text" id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label  for="password_confirmation" :value="__('Confirm Password')" class="form-label">Confirm Password</label>

            <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button class="btn btn-dark">
                {{ __('Register') }}
            </button>
        </div>
    </form>
            
@endsection
