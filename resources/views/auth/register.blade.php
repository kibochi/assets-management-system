@extends('layouts.app')

@section('content')

    
<div class="box">
        <div class="box-left">
            <div class="big-image title">
                <h1 class="text-muted font-weight-bold">Already a Member?</h1>
                <div class="text-center  mt-3">
                    <a href="{{ route('login') }}" class=" btn btn-outline-dark w-50">Login</a>
                </div>
            </div>
        </div>

        <div class="box-right ">
            <div class="form">
                <div class="img text-center mb-3">
                    <img src="{{ asset('images/lock.png') }}" class="img-responsive">
                </div>
                <div class="text-center title2 mb-4">
                    <h2>New Account</h2>
                </div>
                @include('forms.register_form')
            </div>
        </div>
    </div>


@endsection
