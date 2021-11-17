
   
   
   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staffmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">New Asset</h5>
        <button type="button"  data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
      </div>
      <div class="modal-body">
          <form>
          <input type="hidden" name="admin_id" value="{{ $admin->id }}">
<div class="row">
    <!-- First Name -->
    <div class="col-md-6">
        <div class="form-group ">
            <label for="firstname">First Name:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                        placeholder="first name" name="firstname" id="firstname"
                        value="{{ old('firstname') ?? $staff->firstname }}" autofocus />
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>
        </div>

    </div>

    <!-- Last Name -->
    <div class="col-md-6">
        <div class="form-group ">
            <label for="firstname">Last Name:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                        placeholder="last name" name="lastname" id="lastname"
                        value="{{ old('lastname') ?? $staff->lastname }}" autofocus />
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>
        </div>
    </div>

</div>

{{-- Email --}}
<div class="row">
    <div class="col-md-7">
        <div class="form-group ">
            <label for="email">email</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="you@mail.com" name="email" id="email" value="{{ old('email') ?? $staff->email }}"
                        required autocomplete="email" />

                    @error('email')
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
            <label for="phone">phone</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                        placeholder="(+1 123 456 789) " name="phone" id="phone"
                        value="{{ old('phone') ?? $staff->phone }}" max="10" required />

                    @error('phone')
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
            <label for="dob">Dob</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-calendar-check"></i></span>
                    <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" id="dob"
                        value="{{ old('dob') ?? $staff->dob }}" required />

                    @error('dob')
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
            <label for="gender">Gender:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-users"></i></span>
                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror"
                        autofocus>
                        <option disabled selected>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>

                    @error('gender')
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
        <button type="submit" class="btn btn-outline-light">
            Save Employee
        </button>
    </div>



</div>

</form>
  
      </div>
      
    </div>
  </div>
</div>
   
   
   
   
   
   