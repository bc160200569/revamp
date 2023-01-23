<!DOCTYPE html>
<html>

<head>
    <title>Login System in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box {
            width: 400px;
            border: 1px solid #ccc;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            /* height: 300px; */
            /* height: 35%; */
        }

        .custom {
            width: 400px;
            height: 600px;
            /* background-color: red; */

            position: absolute;
            top: 300px;
            bottom: 0;
            left: 0;
            right: 0;

            margin: auto;
        }
    </style>
</head>

<body>
    <br />
    <div class="custom">
        <h3 align="center">Login</h3><br />
        <!-- @if(Session::has('error'))
                <p class="text-danger">{{Session::get('error')}}</p>
            @endif
            @if(Session::has('success'))
                <p class="text-success">{{Session::get('success')}}</p>
            @endif -->
        <form method="post" action="{{'signin'}}">
            @csrf
            <div class="form-group">
                <span class="text-danger">
                    @error('login')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>User Name</label>
                <input type="username" name="username" class="form-control" />
                <!-- For showing validation error -->
                <span class="text-danger">
                    @error('username')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" />
                <!-- For showing validation error -->
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="display: flex;">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>