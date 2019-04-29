<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Yo Soy Mas</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,800" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="font-sans leading-normal antialiased m-0 text-black">
        @yield('body')

        <footer class="text-center text-light-blue text-sm bg-purple p-10">
            &copy; {{ date('Y') }} Yo Soy Mas. Todos los derechos reservados. Presentado por Un Solo Peru.
        </footer>
    </body>
</html>
