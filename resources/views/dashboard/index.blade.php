<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Data entry</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <script type="text/javascript" src="{!! asset('css/app.css') !!}"></script>

        <style>
            body {
                background-color: #cfdcfe;
            }
        </style>
    </head>
    <body class="flex h-full items-center justify-center bg-blue-lighter">
        <div id="app" class="w-2/5">
            <accordion></accordion>
        </div>
    </body>

    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
</html>
