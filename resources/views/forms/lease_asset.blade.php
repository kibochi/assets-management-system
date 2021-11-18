
   
   
   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="leaseasset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">Lease Asset</h5>
        <button type="button"  data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
      </div>
      <div class="modal-body">
     
     <form>
     <div class="row">
     <div class="col-md-7">
        <div class="form-group ">
            <label for="category">Asset Name:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                   
                    <select name="asset_id" class="form-control @error('uom') is-invalid @enderror" autofocus>
                        <option disabled selected>Asset Category</option>
                        @foreach($assets as $key => $asset)
                        <option value="{{$asset->tag_id}}">{{$asset->asset_name}}</option>
                        @endforeach
                    </select>

                    @error('uom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
 
     </div>
     </form>
      </div>
      
    </div>
  </div>
</div>
   
   
   
   
   
   