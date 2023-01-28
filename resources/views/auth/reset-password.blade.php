@extends('layouts.guest')
@section('content')
    
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label  for="email" :value="__('Email')" class="form-label">Email</label>
            <input type="text" id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label  for="password" :value="__('Password')" class="form-label" >Password</label>
            <input type="text" id="password" class="form-control" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label  for="password_confirmation" :value="__('Confirm Password')" class="form-label">Confirm Password</label>

            <input type="text" id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="btn btn-dark">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
@endsection
