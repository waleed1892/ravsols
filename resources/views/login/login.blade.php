<!doctype html>
<html lang="en">
<head>
    <title>RavSols</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">RavSols</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert successAlert my-4" role="alert">
                            <div class="flex">
                                <button type="button" class="close mx-4" data-dismiss="alert">×</button>
                                <div>
                                    <p class="font-bold">{{ $message }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <form method="post" action="{{route('auth')}}" class="login-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" class="form-control rounded-left" placeholder="User email" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left"  name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class=" text-md-right">
                                <a href="">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

