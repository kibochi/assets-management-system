
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="row">
                <!-- First Name -->
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="firstname">First Name:</label>
                        <div class="inputGroupContainer">
                            <div class="input-group">

                                <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                    placeholder="first name" name="firstname" id="firstname"
                                    value="{{ old('firstname') }}" autofocus />
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
                                    value="{{ old('lastname') }}" autofocus />
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
                <div class="col-md-12">
                    <div class="form-group ">
                        <label for="email">Email</label>
                        <div class="inputGroupContainer">
                            <div class="input-group">

                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="you@mail.com" name="email" id="email" value="{{ old('email') }}"
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
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group ">
                        <label for="phone">Phone</label>
                        <div class="inputGroupContainer">
                            <div class="input-group">

                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="(+1 123456789)" name="phone" id="phone" value="{{ old('phone') }}"
                                    max="10" required />

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
                        <label for="password">Password</label>
                        <div class="inputGroupContainer">
                            <div class="input-group">

                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" required />

                                @error('password')
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
                        <label for="password-confirm">Confirm password</label>
                        <div class="inputGroupContainer">
                            <div class="input-group">
                              
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password-confirm" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="form-group col-lg-12 mx-auto mt-3">
                <button type="submit" class="btn  btn-dark login w-100 py-3">Register</button>
            </div>
            <!-- Already Registered -->


        </form>

  