<!DOCTYPE html>
<HTML lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> JurCorpuse </title>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"     
            rel="stylesheet"
            crossorigin="anonymous">
        <!-- Fonts -->
        <link 
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" 
            rel="stylesheet">

    </HEAD>
    <BODY class="antialiased">
        <b>{{ __('welcome') }}</b>
    </BODY>
</HTML>
