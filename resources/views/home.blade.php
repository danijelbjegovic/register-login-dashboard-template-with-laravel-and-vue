<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div id="app">
        <v-app>
            <v-toolbar>
                <v-toolbar-side-icon></v-toolbar-side-icon>
                <v-toolbar-title>Title</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down">
                <v-btn flat>Link One</v-btn>
                <v-btn flat>Link Two</v-btn>
                <v-btn flat>Link Three</v-btn>
                </v-toolbar-items>
            </v-toolbar>
        </v-app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>