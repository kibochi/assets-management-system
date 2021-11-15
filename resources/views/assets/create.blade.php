@extends('layouts.app')

@section('content')

    <div id="home">

        @include('layouts.nav')

        {{-- content here --}}

        <div class="container">

            <div class="text-center title2 mt-5 mb-3">
                <h2>New Asset</h2>
            </div>
            <div class="row">

                <div class="col-md-8 mx-auto">
                    <a href="{{ route('asset.index') }}" class="btn btn-sm btn-success mb-3 py-3 px-4 "><i
                            class="fa fa-hand-point-left"></i> All Assets
                    </a>
                 
                            <form action="{{ route('asset.store') }}" method="POST">
                                @csrf
                                @include('forms.asset_form')
                            </form>
                        </div>
                    </div>
                </div>
         

    </div>


@endsection
