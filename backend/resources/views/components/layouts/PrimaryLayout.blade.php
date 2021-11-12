<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ $pathStyle }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="{{ $generalClass }}">
        <div class="header-navigation">
            <x-header></x-header>
            <x-navigation></x-navigation>
        </div>

        <x-banner></x-banner>

        <x-social-media></x-social-media>

        <div class="main">
            {{ $slot }}
        </div>

        <x-footer></x-footer>

        <!-- The Modal -->
        <x-signin></x-signin>

        <x-confirmOTP></x-confirmOTP>
    </div>

    <!-- <script src="./assets/common/js/jquery-3.6.0.min.js"></script> -->
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/popup.js')}}"></script>
    <script src="{{asset('js/divided.js')}}"></script>
    <script src="{{asset('js/my-program.js')}}"></script>
    <script src="{{asset('js/register-program.js')}}"></script>
    <script src="{{asset('js/register-program-step-2.js')}}"></script>
</body>
</html>
