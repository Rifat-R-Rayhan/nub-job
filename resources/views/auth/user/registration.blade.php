<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/userReg.css">
</head>

<body>
    <div class="main-block">
        <h1>Registration</h1>
        <form action="{{route('register-user')}}" method="post" enctype="multipart/form-data">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif

            @csrf
            <!-- <hr>
        <div class="account-type">
            <input type="radio" value="none" id="radioOne" name="account" checked/>
            <label for="radioOne" class="radio">Personal</label>
            <input type="radio" value="none" id="radioTwo" name="account" />
            <label for="radioTwo" class="radio">Company</label>
        </div> -->
            <hr>
            <label id="icon" for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" required />
            <span class="text text-danger">@error('name') {{$message}} @enderror</span>
            <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="name" placeholder="Email" required />
            <span class="text text-danger">@error('email') {{$message}} @enderror</span>
            <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" required />
            <span class="text text-danger">@error('password') {{$message}} @enderror</span>
            <div class="img">
                <label id="icon" for="image"><i class="fas fa-image"></i></label>
                <input type="file" name="image" id="name" style="margin-top: 7px;" required />
            </div>
            <span class="text text-danger">@error('image') {{$message}} @enderror</span>
            <hr>
            <!-- <div class="gender">
            <input type="radio" value="none" id="male" name="gender" checked/>
            <label for="male" class="radio">Male</label>
            <input type="radio" value="none" id="female" name="gender" />
            <label for="female" class="radio">Female</label>
            </div>
            <hr> -->
            <div class="btn-block">
                <p>If you have already an account, just <a href="{{route('login')}}">login</a>.</p>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>