@extends('layouts.app')

@section('content')



    <div id="home">

        @include('layouts.nav')
        <div class="container">
            <div class="text-center title2 mt-5 mb-3">
                <h2>Staffs</h2>
            </div>

            <div class="row">
                <div class="col-md-12 mx-auto">
                <button type="button" class="btn btn-success mb-3 " data-bs-toggle="modal" data-bs-target="#staffmodal">
  <i class=" fa fa-plus"> New Staff</i>
</button>
                    <div class="wrap">
                        
                            <div class="table-responsive">
                                <table class="table table-fixed table-bordered table-stripped " id="myTable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">
                                                Staff ID
                                            </th>
                                            <th class="text-center">
                                                Firstname
                                            </th>
                                            <th class="text-center">
                                                Lastname
                                            </th>
                                            <th class="text-center">
                                                Email
                                            </th>

                                            <th class="text-center">
                                               Phone
                                            </th>
                                            <th class="text-center">
                                                Section
                                            </th>
                                            <th class="text-center">
                                                Role
                                            </th>
                                           
                                            <th class="text-center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($staffs as $key => $s)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $key + 1 }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $s->staff_id }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $s->firstname }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $s->lastname }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $s->email }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $s->phone }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $s->section }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $s->role }}
                                                </td>



                                                <td class="text-center">
                                                    <a href="{{ route('staff.show', $s) }}" class="btn  btn-sm">
                                                        <i class="fa fa-edit"></i></a>
                                                </td>




                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                    </div>
                </div>
            </div>
            
            @include('forms.staff_form')

        </div>

    @endsection
