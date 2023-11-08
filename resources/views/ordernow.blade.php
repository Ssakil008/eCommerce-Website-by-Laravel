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
            <div class="container">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>{{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$0</td>
                    </tr>
                    <tr>
                        <td>Delivery Charge</td>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>${{$total+10}}</td>
                    </tr>
                    </tbody>
                </table>
                <div>
                <form action="/place_order" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method</label><br><br>
                        <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
                        <input type="radio" value="cash" name="payment"><span>EMI Payment</span><br><br>
                        <input type="radio" value="cash" name="payment"><span>Payment on delivery</span><br><br>
                    </div>
                        <button type="submit" class="btn btn-primary">Order Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
