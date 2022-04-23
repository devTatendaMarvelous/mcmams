  
  @extends('layouts.auth')

@section('content')
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">
                            
                                <div class="card-body p-4"> 
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Create New Account</h5>
                                    </div>
                                    <div class="p-2 mt-4">
                                         <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                           <div class="mb-3">
                                                <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="username" placeholder="Enter username"  name="name" required autocomplete="name" autofocus>
                                                <div class="invalid-feedback">
                                                    Please enter username
                                                </div>
                                                  <div class="col-md-6">
                                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"> --}}

                                            </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email address" required>  
                                                <div class="invalid-feedback">
                                                    Please enter email
                                                </div>      


                                            </div>
                                            

                                                   

                                          
                                            
                                            <div class="mb-2">
                                                <label for="userpassword" class="form-label">Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>       
                                            </div>

                                            <div class="mb-2">
                                                <label for="userpassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>       
                                            </div>

                                           
                                            <div class="mb-4">
                                                <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the  <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                            </div>
                                            
                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                            </div>

                                            
                                        </form>

                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">Already have an account ? <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

@endsection
