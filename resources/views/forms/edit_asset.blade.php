



                   <div class="row">
                      <div class="col-sm-5">
                          <h6 class="mb-0">Asset Code</h6>
                      </div>
                      <div class="col-sm-7 text-secondary">
                          {!! DNS1D::getBarcodeHTML('4445645656', 'UPCA') !!}
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-5">
                          <h6 class="mb-0">Asset Name</h6>
                      </div>
                      <div class="col-sm-7 text-secondary">
                          {{ $asset->asset_name }} 
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-5">
                          <h6 class="mb-0">tag ID</h6>
                      </div>
                      <div class="col-sm-7 text-secondary">
                          {{ $asset->tag_id}} 
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-5">
                          <h6 class="mb-0">Category</h6>
                      </div>
                      <div class=" col-sm-7 text-secondary">
                          {{ $asset->category }} 
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-5">
                          <h6 class="mb-0">Purchase Date</h6>
                      </div>
                      <div class="col-sm-7 text-secondary">
                          {{ $asset->purchase_date }} 
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-5">
                          <h6 class="mb-0">Quantity</h6>
                      </div>
                      <div class="col-sm-7  text-secondary">
                          {{ $asset->quantity }}  {{ $asset->uom}}
                      </div>
                  </div>
             
                  
 