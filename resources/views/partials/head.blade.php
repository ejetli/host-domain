<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.laravel = { csrfToken: '{{ csrf_token() }}'}</script>

        <title>Laravel</title>

        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>