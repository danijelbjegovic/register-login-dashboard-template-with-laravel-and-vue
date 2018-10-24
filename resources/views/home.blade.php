<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Dashboard</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div id="app">
        <v-app>
            <app-home></app-home>
        </v-app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>