<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Licensing Permit </title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">


</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card p-5" style="margin-top: 150px;">
                    <div class="card-body">
                        <div class="text-center pb-5">
                            <img src="{{ asset('dist/images/logo.png') }}" width="100" alt="logo">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Username -->
                            <div>
                                <x-input-error :messages="$errors->get('username')" class="text-danger mt-2" />
                                <x-input-label for="username" :value="__('Username')" />
                                <x-text-input id="username" class="form-control block mt-1 w-full" type="text"
                                    name="username" :value="old('username')" required autofocus autocomplete="username" />
                            </div>
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="form-control block mt-1 w-full" type="password"
                                    name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="text-red mt-2" />
                            </div>
                            <!-- Remember Me -->
                            <div class="block mt-4">
                            </div>
                            <x-primary-button class="form-control btn btn-primary btn-lg">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </form>

                        <p class="text-center my-4 text-muted">-------- PERMIT REGISTRATRION ---------</p>
                        <div>
                            <a href="/business_registration" class="form-control btn btn-success btn-lg">Apply for
                                Business Permit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
</body>

</html>
