@extends('layouts.app')

@section('content')

    <div id="home">
        @include('layouts.nav')

        <div class="container">

            <div class="text-center title2 mt-5 mb-3">
                <h2>Asset Profile</h2>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <a href="{{ route('asset.index') }}" class="btn btn-sm btn-success mb-3 py-3 px-4 "><i
                            class="fa fa-hand-point-left"></i> All Assets
                    </a>
                    <div class="card">
                        <div class="card-body">
                           
                                @method('PATCH')
                                @csrf
                                @include('forms.edit_asset')

                         

                        </div>
                        <div class="card-footer">
                            <div class="row">
                            <div class="col-auto mr-auto">
                            <a href="{{ route('asset.edit', $asset) }}" class="btn btn-success">
                                        Edit  Asset
                                    </a>
                            </div>
                                <div class="col-auto ml-auto">
                                
                                    <button type="button" id="delete_asset" class="btn btn-danger">
                                        Delete Asset
                                    </button>
                                    <form id="asset_delete" action="{{ route('asset.destroy', $asset) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
