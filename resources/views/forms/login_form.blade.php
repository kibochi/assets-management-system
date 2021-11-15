<div class="row">
     <div class="col-md-12 mx-auto">
         <form action="{{ route('login') }}" method="POST">
             @csrf
             {{-- Email --}}
             <div class="row">
                 <div class="col-md-12">

                     <div class="form-group ">
                         <label for="email">Email</label>
                         <div class="inputGroupContainer">
                             <div class="input-group">
                                 <input type="email" class="form-control @error('email') is-invalid @enderror"
                                     placeholder="mail@mail.com" name="email" id="email" value="{{ old('email') }}"
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
                         <label for="password">Password</label>
                         <div class="inputGroupContainer">
                             <div class="input-group">
                                 <input type="password" class="form-control @error('password') is-invalid @enderror"
                                     placeholder=" " name="password" id="password" required />

                                 @error('password')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
             <div class="form-group row">
                 <div class="col-md-12 offset-md-4">
                     <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="remember" id="remember"
                             {{ old('remember') ? 'checked' : '' }}>

                         <label class="form-check-label" for="remember">
                             {{ __('Remember Me') }}
                         </label>
                     </div>
                 </div>
             </div>
             <!-- Submit Button -->
             <div class="form-group col-lg-12 mx-auto mt-3">
                 <button type="submit" class="btn login btn-dark w-100 py-3">Login</button>
             </div>
             <div class="forgot text-center ">
                 @if (Route::has('password.request'))
                     <a class="btn btn-link" href="{{ route('password.request') }}">
                         {{ __('Forgot Your Password?') }}
                     </a>
                 @endif
             </div>

         </form>

     </div>
 </div>
