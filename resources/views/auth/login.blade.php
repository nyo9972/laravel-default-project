<x-guest-layout>
    <body class="bg-gradient-primary">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">

                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">{{env('APP_NAME')}}</h1>
                                        </div>

                                        <form class="user" method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group">
                                                <input id="email" name="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Insira o endereço de e-mail..." value="{{ old('email') }}" required>
                                            </div>

                                            <div class="form-group">
                                                <input id="password" name="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Insira a senha..." required autocomplete="current-password">
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" name="remember" id="remember"   {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="remember">Lembrar-me</label>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>

                                            <hr>
                                        </form>
                                        @if (Route::has('password.request'))
                                            <div class="text-center">
                                                <a class="small" href="{{ route('password.request') }}">Esqueceu sua senha ?</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-guest-layout>
