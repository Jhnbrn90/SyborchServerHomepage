<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ config('app.name') }} </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,300" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css?v=2') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#0086da">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Work Sans', sans-serif;
            font-weight: 100;
            margin-bottom: 20px;
        }

        .message {
            margin-bottom: 35px;
        }

        .hidden {
            display: none;
        }

        #overlay {
            position: fixed;
            display:none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
            cursor: pointer;
        }
    </style>

    @yield('head')
    
</head>

<body class="bg-white">

@if (Carbon\Carbon::today()->format('d-m') == '01-04' && ! session('seen_joke'))
<div id="april-fools">
    <div id="overlay" style="display:block;"></div>
    
    <div id="april-modal" class="w-full" style="position:absolute; top:50%; left: 50; z-index:999; overflow:hidden;">
        <div class="container mx-auto">
            <div class="text-center py-8 rounded shadow-lg border border-grey-darkest bg-white">
                <h2 class="mb-4 text-grey-darkest">Introducing SyBOrCh Premium.</h2>
                <p class="font-medium mb-6">Try Premium free for 30 days. Only € 9,99/month after.<sup>*</sup></p>
                <a href="/trial" class="cursor-pointer bg-green hover:bg-green-dark text-white font-medium py-3 px-6 rounded-full no-underline tracking-wide">
                  START FREE TRIAL
                </a>
            </div>
        </div>
    </div>
</div>
@endif

    @yield('content')   


    <script src="js/app.js?v=3"></script>
</body>

</html>
