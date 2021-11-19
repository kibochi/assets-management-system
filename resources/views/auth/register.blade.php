@extends('layouts.app')
@section('content')


<div class="row form">

<div class="col-sm-6 col-md-6 col-lg-6 left">
<div class="left-side title">
    
    
                <h1 class="text-muted text-center font-weight-bold">Already a Member?</h1>
                <div class="text-center  mt-3">
                    <a href="{{ route('login') }}" class=" btn btn-outline-dark ">Login Now</a>
                </div>

</div>
</div>

<div class="col-sm-6 col-md-6 col-lg-6 right">
<div class="register ">
                <div class="img text-center mb-3">
                    <img src="{{ asset('images/locks.png') }}" class="img-responsive">
                </div>
                <div class="text-center title2 mb-4">
                    <h2>New Account</h2>
                </div>
                @include('forms.register_form')
            </div>
</div>
</div>

  






@endsection
