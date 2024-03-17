<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Licensing Permit </title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css')}}">

</head>
<body>
      <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-md-8 text-center">
                    <img src="{{ asset('dist/images/logo.png')}}" width="150" alt="logo">
                    <h1>Estancia LGU Business and Licensing Permit Information System</h1>
                </div>
                <div class="col-md-4 form1 bg-light">
                    <div class="">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset("dist/images/user1.png")}}" width="200" height="200" alt="">
                            </div>
                            <form action="">
                                <div>
                                    <label for="">Username</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mt-4">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control">
                                </div>
                                {{-- <div class="mt-4">
                                    <input type="checkbox"><b class="ml-2">Remember Password</b>
                                </div> --}}
                                <div class="mt-5">
                                    <div class="d-grid gap-4">
                                        <button class="btn btn-primary" type="button">Login</button>
                                        <a href="/registration" class="btn btn-success" type="button">Sign Up</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    <script src="{{ asset('dist/js/app.min.js')}}"></script>
</body>
</html>