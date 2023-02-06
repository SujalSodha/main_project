@extends('layouts.app')
@section('header')
    <h2 class="h4 font-weight-bold">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('profile')
    
            <div class="card my-6">
                <div class="card-body ">
                    <h2 class="fw-bold">Welcome {{ Auth::user()->name }}</h2>
                    <p class="mt-3"><span>Out reach bird</span> - dashboard</p>
                </div>
            </div>
@endsection
