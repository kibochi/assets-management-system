
   
   
   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="assetmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">New Asset</h5>
        <button type="button"  data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
      </div>
      <div class="modal-body">
     
      <form action="{{ route('asset.store') }}" method="POST">
                                @csrf
                                @include('forms.asset_form')
                           
   <input type="hidden" name="admin_id" value="{{ $admin->id }}">

<div class="row">

    <!-- First Name -->
    <div class="col-md-6">
        <div class="form-group ">
            <label for="asset_name">Asset Name:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                   
                    <input type="text" class="form-control @error('asset_name') is-invalid @enderror"
                        placeholder="asset name" name="asset_name" id="asset_name"
                        value="{{ old('asset_name') ?? $asset->asset_name }}" autofocus />
                    @error('asset_name')
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
            <label for="category">Asset Tag ID:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    
                    <input type="text" class="form-control @error('tag_id') is-invalid @enderror"
                        placeholder="asset tag id" name="tag_id" 
                        value="{{ old('tag_id') ?? $asset->tag_id}}" autofocus />

                    @error('tag_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

</div>

{{-- asset_category --}}
<div class="row">
    <div class="col-md-7">
        <div class="form-group ">
            <label for="category">Asset Category:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                   
                    <select name="asset_category" id="asset_category"
                        class="form-control @error('asset_category') is-invalid @enderror" autofocus>
                        <option disabled selected>Asset Category</option>
                        <option>Hardware</option>
                        <option>Software</option>
                    </select>

                    @error('asset_category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group ">
            <label for="purchase_date">Purchase Date</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                  
                    <input type="date" class="form-control @error('purchase_date') is-invalid @enderror"
                        placeholder="Purchase Date" name="purchase_date" 
                        value="{{ old('purchase_date') ?? $asset->purchase_date }}" required />

                    @error('purchase_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Submit Button -->
<div class=" row mt-3">
    <div class="col-auto mx-auto">
        <button type="submit" class="btn btn-warning save">
            Save Asset
        </button>
    </div>



</div>


</form>
      </div>
      
    </div>
  </div>
</div>
   
   
   
   
   
   