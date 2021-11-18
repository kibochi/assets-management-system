@extends('layouts.app')

@section('content')

    <div id="home">
        @include('layouts.nav')

        <div class="container">

            <div class="text-center title2 mt-5 mb-3">
                <h2>Update Staff</h2>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <a href="{{ route('staff.index') }}" class="btn btn-sm btn-success mb-3 py-3 px-4 "><i
                            class="fa fa-hand-point-left"></i> All Staffs
                    </a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('staff.update', $staff) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                @include('forms.edit_staff')

                            </form>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-auto ml-auto">
                                    <button type="button" id="delete_staff" class="btn btn-danger">
                                        Delete Staff
                                    </button>
                                    <form id="staff_delete" action="{{ route('staff.destroy', $staff) }}" method="POST">
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
