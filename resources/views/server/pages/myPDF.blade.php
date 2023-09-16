<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section style="background-color: #eee;">
        <h1>{{$title}}</h1>
        <p>{{$date}}</p>

        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <!-- <td>Image</td> -->
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <!-- <td><img src="{{asset('uploads/user')}}/{{$user->image}}" style="width: 160px; height: 160px; border-radius: 50%;"></td> -->
                </tr>
                @endforeach
            </tbody>

        </table>
    </section>
</body>

</html>