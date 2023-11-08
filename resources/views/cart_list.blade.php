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

    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
                @foreach($products as $item)
                <div class="row searched-item cart-list">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->image}}" class="trending-img">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h2>{{$item->name}}</h2>
                            <h4>{{$item->description}}</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
        </div>
    </div>
</body>
</html>

@endsection
