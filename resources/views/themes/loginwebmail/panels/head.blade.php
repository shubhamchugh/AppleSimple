<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href='{{ asset("themes/loginwebmail/custom/custom-main.css") }}' type="text/css">
    <link rel="stylesheet" href='{{ asset("themes/loginwebmail/main.css") }}' type="text/css">
    {{ $HeaderCode->value ?? "" }}
    @section('head')
    @show
</head>
