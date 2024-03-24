<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <<<<<<< HEAD <title>Document</title>
        <link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
        =======
        <title>Licensing Permit </title>
        <link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
        >>>>>>> user-registration

</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-md-8 text-center">
                <img src="{{ asset('dist/images/logo.png') }}" width="150" alt="logo">
                <h1>Estancia LGU Business and Licensing Permit Information System</h1>
            </div>
            <div class="col-md-4 form1 bg-light">
                <div class="">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('dist/images/user1.png') }}" width="200" height="200"
                                alt="">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control block mt-1 w-full" type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="username" />

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
                                {{-- <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                        name="remember">
                                    <span
                                        class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label> --}}
                            </div>

                            {{-- <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif --}}

                            <x-primary-button class="form-control btn btn-primary">
                                {{ __('Log in') }}
                            </x-primary-button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ asset('dist/js/app.min.js') }}"></script>
</body>

</html>
