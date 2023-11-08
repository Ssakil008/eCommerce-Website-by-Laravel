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
                <h4>My Orders</h4>
                @foreach($orders as $item)
                <div class="row searched-item cart-list">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->image}}" class="trending-img">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h3>Name : {{$item->name}}</h3>
                            <h4>Delivery Status : {{$item->status}}</h4>
                            <h4>Address : {{$item->address}}</h4>
                            <h4>Payment Status : {{$item->payment_status}}</h4>
                            <h4>Payment Method : {{$item->payment_method}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>

@endsection
