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

            .section--header {
                background-color: #ffcb2a;
                color: white;
            }

            .section--body {
                height: auto;
                background-color: #dddddd;
                overflow: hidden;
                transition: 500ms ease-out;
            }

            .button--next {
                background-color: #5200b4;
                padding: 3px 20px;
                color: white;
                font-size: 0.8em;
            }

            .error {
                font-size: 0.8em;
                margin-top: 5px;
                color: red;
            }

            [type="date"] {
                background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
            }
            [type="date"]::-webkit-inner-spin-button {
                display: none;
            }
            [type="date"]::-webkit-calendar-picker-indicator {
                opacity: 0;
            }

            #comments {
                height: 100px;
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
