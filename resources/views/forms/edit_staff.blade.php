
          <input type="hidden" name="admin_id" value="{{ $admin->id }}">
          <div class="row">
          <div class="col-md-12">
        <div class="form-group ">
            <label for="rollno">Roll No:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                  
                    <input type="text" class="form-control @error('staff_id') is-invalid @enderror"
                      name="staff_id" 
                        value="{{ $staff_id  ?? $staff->staff_id}}" readonly/>
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
    <!-- First Name -->
    <div class="col-md-6">
        <div class="form-group ">
            <label for="firstname">First Name:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                  
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
    <div class="col-md-6">
        <div class="form-group ">
            <label for="email">email</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                  
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
    <div class="col-md-6">
        <div class="form-group ">
            <label for="phone">phone</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                  
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

<div class="row">
<div class="col-md-6">
        <div class="form-group ">
            <label for="gender">Role:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                  
                    <select name="role" id="role" class="form-control @error('section') is-invalid @enderror"
                        autofocus>
                        <option disabled selected>Role</option>
                    
                        <option>Lead Developer</option>
                        <option>Lead Engeener</option>
                        <option>System Admin</option>
                        <option>General Staff</option>
                    </select>

                    @error('role')
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
            <label for="gender">Section:</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                  
                    <select name="section" id="section" class="form-control @error('section') is-invalid @enderror"
                        autofocus>
                        <option disabled selected>Section</option>
                        <option>Manufacturing</option>
                        <option>Packing</option>
                        <option>Networking</option>
                        <option>Software Dev</option>
                        <option>Quality Anaylis</option>
                    </select>

                    @error('section')
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
            Save Employee
        </button>
    </div>



</div>

