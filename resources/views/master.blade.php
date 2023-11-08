<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_Commerce Project</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login
    {
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img
    {
        height: 400px !important
    } 
    .custom-product
    {
        height: 600px;
    }
    h3
    {
        color: #008080;
    }
    p
    {
        color: #808000;
    }
    h4
    {
        color: #808000;
    }
    h2
    {
        color: #808000;
    }
    .trending-wrapper
    {
        margin: 30 px;
    }
    .trending-item
    {
        float: left;
        width: 20%;
    }
    .trending-img
    {
        height: 100px;
    }
    .detail-img
    {
        height: 200px;
    }
    .serach-box
    {
        width: 500px !important
    }
    .cart-list
    {
        border-bottom: 1px solid #000;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

</style>
</html>