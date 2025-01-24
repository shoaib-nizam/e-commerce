<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('admin-panel/css/bootstrap.min.css') }}">
</head>
<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-6 m-auto">

                <div class="card">
                    <h5 class="card-header">Login Form</h5>
                    <div class="card-body">
                        <form action="">
                       

                    <div class="mt-3">
                        <input class="form-control" type="email" placeholder="User Email" aria-label="default input example">
                    </div>

                    <div class="mt-3">
                        <input class="form-control" type="password" placeholder="User Password" aria-label="default input example">
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a class="btn btn-info" href="{{route('signup')}}">Sign Up</a>
                    </div>
                </form>
                    </div>
                
                  </div>

            </div>
        </div>
    </div>

   

</body>
</html>