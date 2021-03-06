@extends('layouts.app')

@section('content')



    <div id="home">

        @include('layouts.nav')
        <div class="container">
            <div class="text-center title2 mt-5 mb-3">
                <h2>Assets</h2>
            </div>

            <div class="row">
                <div class="col-md-10 mx-auto">
                <button type="button" class="btn btn-success mb-3 " data-bs-toggle="modal" data-bs-target="#assetmodal">
  <i class=" fa fa-plus"> New Asset</i>
</button>
                    <div class="wrap">
                        
                            <div class="table-responsive">
                                <table class="table table-fixed table-bordered table-stripped " id="myTable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">
                                                Tag ID
                                            </th>
                                            <th class="text-center">
                                                Asset Name
                                            </th>
                                            <th class="text-center">
                                                Category
                                            </th>
                                            <th class="text-center">
                                                Qty Purchased
                                            </th>
                                         
                                            
                                            <th class="text-center">
                                                Purchase Date
                                            </th>
                                           
                                            <th class="text-center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sets as $key => $set)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $key + 1 }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $set->tag_id }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $set->asset_name }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $set->category }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $set->quantity }}
                                                </td>
                                              
                                                <td class="text-center">
                                                    {{ $set->purchase_date }}
                                                </td>



                                                <td class="text-center">
                                                    <a href="{{ route('asset.show', $set) }}" class="btn  btn-sm">
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
            
            @include('forms.asset_form')

        </div>

    @endsection
