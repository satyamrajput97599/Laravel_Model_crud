{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Custom Auth</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
                <h4>Register Page</h4>
                <form action="{{route('register-user')}}" method="POST">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password" name="password" value="">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>
                    <a href="login">Already Registered !! Login   here</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Custom Auth</title>
</head>
<body>
        <x-nav/>
<center><h1>Crud Operation in laravel Register Page</h1></center><hr>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 border border-dark mt-5 p-2 ">
        <form action="">
            Enter Name
            <input type="text" name="n" class="form-control mb-3"/><br>

            Enter Email
            <input type="text" name="e" class="form-control mb-3"/><br>

            Enter Password
            <input type="text" name="p" class="form-control mb-3"/><br>

            <input type="submit" name="submit" class="btn btn-primary mt-2" value="submit" type="submit">

            <br>
                    <a href="login">Already Registered !! Login   here</a>
            
            <center>
                <h3>{{$msg}}</h3>
            </center>
        </form>
    </div>
</div>
    </div>
</body>
</html>