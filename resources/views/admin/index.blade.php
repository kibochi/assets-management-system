@extends('layouts.app')

@section('content')

    <div id="home">
        @include('layouts.nav')

        <div class="container">
            <div class="row mt-3 mb">
                <div class="col ">
                    <p>Welcome back, <b>Admin</b></p>

                </div>
                
            </div>
            <hr>
            <div class="row tm-content-row">
            <div class="col-auto ml-auto">
                <button type="button" class="btn btn-success mb-3 " data-bs-toggle="modal" data-bs-target="#leaseasset">
  <i class=" fa fa-plus"> Lease Asset</i>
</button>

                </div>
            </div>
            <hr>

            <div class="row tm-content-row">
                <div class ="col-sm-9 col-md-9 col-lg-9 tm-block-col">
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
                                                Leased To
                                            </th>
                                            <th class="text-center">
                                                Quantity
                                            </th>
                                            <th class="text-center">
                                               Leased Date
                                            </th>
                                           
                                            <th class="text-center">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($leased as $key => $lease)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $key + 1 }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $lease->asset->tag_id }}
                                                </td>
                                                <td class="text-center">
                                                {{ $lease->asset->asset_name }}
                                                </td>

                                                <td class="text-center">
                                                {{ $lease->staff->firstname }} {{ $lease->staff->lastname }}
                                                </td>
                                                <td class="text-center">
                                                {{ $lease->quantity}}
                                                </td>
                                                <td class="text-center">
                                                {{ $lease->lease_date }}
                                                </td>

                                                <td class="text-center">
                                                    @if( $lease->status == "0")
                                                        <span class="badge badge-danger">Not Returned</span>
                                                    @else
                                                          <span class="badge badge-success">Returned</span>
                                                    @endif
                                                  
                                                </td>




                                            </tr>

                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
</div>


            <div class="col-sm-3 col-md-3 col-lg-3 tm-block-col">
                <div class="row">
                    <div class="col-md-10 ml-auto">
                    <div class="card card-three">
            <div class="card-body">
            <div class="row">
            <a href="{{route('asset.index')}}" class="px-2">All Assets</a>
                <div class="col-auto ml-auto">
                <h4>{{$assets->count()}}</h4>
                    
</div>
            </div>

            </div>
            </div>

</div>

               </div>
               <div class="row">
                    <div class="col-md-10 ml-auto">
                    <div class="card card-one">
            <div class="card-body">
           
            <div class="row">
            <p class="px-2">Leased Asset</p>
                <div class="col-auto ml-auto">
                <h4>{{$leased->count()}}</h4>
                    
</div>
            </div>

            </div>
            </div>

</div>

               </div>
               <div class="row">
                    <div class="col-md-10 ml-auto">
                    <div class="card card-two">
            <div class="card-body">
            <div class="row">
            <a href="{{route('staff.index')}}" class="px-2">Empoyees</a>
                <div class="col-auto ml-auto">
                <h4>{{$staffs->count()}}</h4>
                    
</div>
            </div>

            </div>
            </div>

</div>

               </div>
            
            </div>
            </div>


      @include('forms.lease_asset')
        </div>
    </div>





@endsection
