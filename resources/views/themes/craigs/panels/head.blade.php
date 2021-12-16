<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href={{ asset("themes/craigs/assets/bootstrap/css/bootstrap.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("themes/craigs/assets/fonts/font-awesome.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("themes/craigs/assets/css/selectize.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("themes/craigs/assets/css/style.css") }}>
    <link rel="stylesheet" href={{ asset("themes/craigs/assets/css/user.css") }}>
    {{ $HeaderCode->value ?? "" }}
    @section('head')

    @show
</head>