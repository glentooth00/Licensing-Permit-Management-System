<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Licensing Permit </title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}">
    <style>
        body {
            background-image: url('/dist/images/hall.webp');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card p-5" style="margin-top: 140px;">
                    <div class="card-body">
                        <div class="text-center pb-5">
                            <img src="{{ asset('dist/images/logo.png') }}" width="100" alt="logo">
                            <h1>Admin Login</h1>
                        </div>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('custom.login') }}">
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

                        <p class="text-center my-4 pb-4 text-muted">-------- PERMIT REGISTRATION ---------</p>
                        <di class="mt-3">
                            <a href="/business_registration" class="form-control btn btn-success btn-lg">Apply for
                                Business Permit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
    <div class="modal fade" id="registrationModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">Registration Successful</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                </div>
                <div class="modal-body">
                    <p>Your registration was successful. Please wait for the approval of your permit</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // JavaScript code to check for registration success and show the modal
        $(document).ready(function() {
            @if (session('registration_success'))
                $('#registrationModal').modal('show');
            @endif
        });
    </script>
</body>

</html>
