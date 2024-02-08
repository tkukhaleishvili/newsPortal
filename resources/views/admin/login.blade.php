<x-admin.layout.authentication>
      <div class="card">
              <div class="card-body p-4 p-sm-5">
                <div class="row flex-between-center mb-2">
                  <div class="col-auto">
                    <h5>Log in</h5>
                  </div>
                  <div class="col-auto fs--1 text-600">
                    <span class="mb-0 undefined">or</span>
                    <span>
                        <a href="../../../pages/authentication/simple/register.html">Create an account</a>
                    </span>
                  </div>
                </div>
                <form action="{{route('admin.auth')}}" method="POST">
                    @csrf
                  <div class="mb-3">
                    <input class="form-control" type="email"name="email" value="#" placeholder="Email address" required=""  />
                  </div>
                  <div class="mb-3">
                    <input class="form-control" type="password" name="password" value="#" placeholder="Password" required=""  />
                  </div>
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" id="basic-checkbox" checked="checked" />
                        <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                      </div>
                    </div>
                    <div class="col-auto"><a class="fs--1" href="../../../pages/authentication/simple/forgot-password.html">Forgot Password?</a></div>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit" value="testadmin">Log in</button>
                  </div>
                  {{-- <div class="col-md-8 mt-3">
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    @if ($errors->has('password'))
                        <div class="alert alert-danger">
                            {{ $errors->first('password') }} 
                            </div>
                        @endif
                    </div> --}}
                </form>
              </div>
            </div>
</x-admin.layout.authentication>
