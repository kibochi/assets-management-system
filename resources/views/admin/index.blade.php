@extends('layouts.app')

@section('content')

    <div id="home">
        @include('layouts.nav')

        <div class="container">
            <div class="row m-5">
                <div class="col ">
                    <p>Welcome back, <b>Admin</b></p>

                </div>
                <div class="col ml-auto">
                <button type="button" class="btn btn-success mb-3 " data-bs-toggle="modal" data-bs-target="#leaseasset">
  <i class=" fa fa-plus"> Lease Asset</i>
</button>
                </div>
            </div>

            <div class="row tm-content-row">
            <div class="col-sm-4 col-md-4 col-lg-4 tm-block-col">
            <div class="card ">
            <div class="card-body">
            fdfdffd

            </div>
            </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 tm-block-col">
            <div class="card ">
            <div class="card-body">
            fdfdffd

            </div>
            </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 tm-block-col">
            <div class="card ">
            <div class="card-body">
            fdfdffd

            </div>
            </div>
            </div>
            </div>


      @include('forms.lease_asset')
        </div>
    </div>





@endsection
