<x-auth-layout>
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h1 class="auth-title">Sign Up</h1>
                <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group position-relative has-icon-left mb-4">
                        <x-form-input type="text" name="email" class="form-control-xl" placeholder="Email" :value="true"/>
                        <x-form-icon icon="bi bi-envelope" />
                        <x-form-error key="email" />
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <x-form-input type="password" name="password" class="form-control-xl" placeholder="Password" :value="false"/>
                        <x-form-icon icon="bi bi-shield-lock" />
                        <x-form-error key="password" />
                    </div>
                
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Already have an account? <a href="auth-login.html" class="font-bold">Log
                            in</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
</x-auth-layout>
