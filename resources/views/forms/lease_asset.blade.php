

   
<!-- Modal -->
<div class="modal fade" id="leaseasset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">Lease Asset</h5>
        <button type="button"  data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
      </div>
      @if($assets->count() && $staffs->count())
      <div class="modal-body">
     
     <form action="{{route('lease.store')}}" method="post">
         @csrf
         <input type="hidden" name="admin_id" value="{{ $admin->id }}">
     <div class="row">
     <div class="col-md-6">
        <div class="form-group ">
            <label for="category">Asset Name:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                   
                    <select name="asset_id" class="form-control @error('uom') is-invalid @enderror" autofocus>
                        <option disabled selected>Asset Leased</option>
                        @foreach($assets as $key => $asset)
                        <option value="{{$asset->id}}">{{$asset->asset_name}}</option>
                        @endforeach
                    </select>

                    @error('asset_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group ">
            <label for="category">Leased To:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                   
                    <select name="staff_id" class="form-control @error('uom') is-invalid @enderror" autofocus>
                        <option disabled selected>Employee leasing</option>
                        @foreach($staffs as $key => $staff)
                        <option value="{{$staff->id}}">{{$staff->firstname}}</option>
                        @endforeach
                    </select>

                    @error('staff_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
 
     </div>
     <div class="row">
     <div class="col-md-6">
        <div class="form-group ">
            <label for="purchase_date">Leased Date</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                  
                    <input type="date" class="form-control @error('purchase_date') is-invalid @enderror"
                        placeholder="Leased Date" name="lease_date" 
                        value="{{ old('lease_date') ?? $asset->lease_date }}" required />

                    @error('lease_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group ">
            <label for="auantity">Quantity</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <input type="text" class="form-control @error('quantity') is-invalid @enderror"
                        placeholder="Quantity i.e 20" name="quantity" 
                        value="{{ old('quantity') ?? $asset->quantity }}" required />

                    @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    
     </div>
     <div class=" row mt-3">
    <div class="col-auto mx-auto">
        <button type="submit" class="btn btn-outline-light">
            Lease  Asset
        </button>
    </div>



</div>

     </form>
      </div>
      @else
      <div class="modal-footer">
          <h5 class="text-center">Add Assets Or Employees Before Lease</h5>
</div>

@endif
      
    </div>
  </div>
</div>


   
   
   
   
   
   