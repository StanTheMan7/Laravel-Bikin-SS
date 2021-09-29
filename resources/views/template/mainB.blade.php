<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

         <!-- Boxicons CDN Link -->
         <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

        <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js%22%3E</script>

        <!-- Font Awesome icons (free version)-->
        <script
            src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"
            crossorigin="anonymous"
        ></script>
        <!-- Google fonts-->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic"
            rel="stylesheet"
            type="text/css"
        />


        <link href="{{asset('css/app.css')}}" rel="stylesheet" />

    <title>Document</title>
</head>
<body >
    <div class="container-fluid ">

        <div class="container w-75 ">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            @yield("content")
        </x-app-layout>
        @include("backoffice.nav")
        </div>
    </div>

    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/plugins.js")}}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false%22%3E</script>
    <script src="{{asset("assets/js/init.js")}}"></script> --}}

</body>
</html>