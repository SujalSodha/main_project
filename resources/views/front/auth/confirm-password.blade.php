@extends('layouts.guest')
    @section('content')
        
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label for="" for="password" :value="__('Password')" class="form-label"> </label>

            <input type="text" id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" >
        </div>

        <div class="flex justify-end mt-4">
            <button class="btn btn-dark">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
@endsection
