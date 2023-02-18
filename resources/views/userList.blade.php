<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6"><h3>User List</h3></div>
                        <div class="col-6 text-end"><a class="btn btn-success" href="{{route('index')}}">Create User</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>SL</th>
                            <th>Profile Picture</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>
                                    <img style="width: 100px" src="{{ asset('storage') }}/{{ $user->profile_picture }}" alt="">
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>
                                    <a class="btn btn-outline-warning" href="{{route('viewUser', $user->id)}}"><i class="fa-solid fa-eye"></i></a>
                                    <a class="btn btn-outline-primary" href="{{route('updateUser', $user->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a class="btn btn-outline-danger" onclick="return confirm('Are You sure To Delete?')" href="{{route('deleteUser', $user->id)}}"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://kit.fontawesome.com/e001dfc221.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
