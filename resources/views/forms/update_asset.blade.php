
                           
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
                        value="{{ $tag_id ?? $asset->tag_id}}" readonly />

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
                   
                    <select name="category" 
                        class="form-control @error('category') is-invalid @enderror" autofocus>
                        <option disabled selected>Asset Category</option>
                        <option>Hardware</option>
                        <option>Software</option>
                    </select>

                    @error('category')
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


<div class="row">
<div class="col-md-5">
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
    <div class="col-md-7">
        <div class="form-group ">
            <label for="category">Unit of Measurements:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                   
                    <select name="uom" 
                        class="form-control @error('uom') is-invalid @enderror" autofocus>
                        <option disabled selected>Asset Category</option>
                        <option>Litres</option>
                        <option>Pieces</option>
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



<!-- Submit Button -->
<div class=" row mt-3">
    <div class="col-auto mx-auto">
        <button type="submit" class="btn btn-outline-success">
            Save Asset
        </button>
    </div>



</div>


