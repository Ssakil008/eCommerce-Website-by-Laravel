@extends('master')
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offser-4">
            <form action="/login" method="POST">
                
                <div class="form-group">
                    @csrf
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                
                    <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

@endsection