<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6"><h3>Create User</h3></div>
                            <div class="col-6 text-end"><a class="btn btn-primary" href="{{route('userList')}}">User List</a></div>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="{{route('createUser')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Your Full Name" name="name">

                            </div>
                            <div class="mb-2">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">

                            </div>
                            <div class="mb-2">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">

                            </div>
                            <div class="mb-2">
                                <label for="">Profile Picture</label>
                                <input type="file" class="form-control" name="profile_picture">

                            </div>
                            <div class="mb-2">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="**********" name="password">

                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-success">Create Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
