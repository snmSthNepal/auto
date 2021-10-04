<fieldset class="col2-set">
    <!-- Registration-->
        <form action="{{ route('register') }}" method="post" id="registerForm">
            @csrf
            <div class="col-1 new-users"> 
                <strong>New User</strong>
                <div class="content">
                    <p>By creating an account with our store, you will be able to move through the checkout process </p>
                    <ul class="form-list">
                        <li>
                            <label for="username"> Name <em class="required">*</em></label>
                            <div class="input-box">
                                <input type="text" name="name" class="input-text required-entry" placeholder="Example: autoPoint" value="{{ old('name') }}">
                            </div>
                        </li>
                        <li>
                            <label for="email"> Email Address <em class="required">*</em></label>
                            <div class="input-box">
                                <input type="email" name="email" class="input-text required-entry validate-email" value="{{ old('email') }}">
                            </div>
                        </li>
                        <li>
                            <label for="phone"> Mobile Number <em class="required">*</em></label>
                            <div class="input-box">
                                <input type="tel" name="phone" id="phone" class="input-text required-entry" value="{{ old('phone') }}" pattern="[0-9]{10}"> 
                            </div>
                        </li>
                        <li>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{ old('password') }}">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{ old('password_confirmation') }}">
                                </div>
                            </div>
                        </li>
                        <li>
                            <!--<label for="type"> Account Type <em class="required">*</em></label>-->
                            <div class="input-box">
                                <select class="hide" data-width="100%" tabindex="-98" name="userType" id="userType">
                                    <option value=""> Select Account Type </option>
                                    <option value="business" hidden> Business/Showroom/Recondition </option>
                                    <option value="personal" selected> Personal </option>
                                </select>
                            </div>
                        </li>
                    </ul>
                    <button type="submit" class="button create-account" id="btnRegister">
                        <span><span>Create an Account</span></span>
                    </button>
                </div>
            </div>
        </form>


        <!--Login Form-->
        <form action="{{route('login')}}" method="post" id="loginForm">
            @csrf
            <div class="col-2 new-users"> 
                <strong>Registered Users</strong>

                <div class="content">
                    <p>Login to checkout what is inside</p>
                    <ul class="form-list">
                        <li>
                            <label for="email"> Enter email <em class="required">*</em></label>
                            <div class="input-box">
                                <input type="email" name="email" id="email" class="input-text required-entry" value="" placeholder="example@example.com">
                            </div>
                        </li>

                        <li>
                            <label for="password">Password<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="password" name="password" id="password" class="input-text required-entry validate-password" value="">
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                        </li>
                    </ul>
                    <button type="submit" class="button create-account" id="btnLogin">
                        <span><span>Login</span></span>
                    </button>
                </div>
            </div>
        </form>
</fieldset>






    
   
