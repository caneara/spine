{{-- HTML --}}
<!doctype html>
<html lang="{{ App::getLocale() }}">

    {{-- Head --}}
    <head>

        {{-- Title --}}
        <title>{{ Config::get('app.name') }}</title>

        {{-- Meta --}}
        <meta name="description"           content="{{ Config::get('app.description') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection"      content="telephone=no">
        <meta name="Content-Type"          content="text/html; charset=UTF-8">
        <meta name="viewport"              content="width=device-width, initial-scale=1">
        <meta name="robots"                content="noindex, nofollow" />

        {{-- Open Graph --}}
        <meta property="og:title"       content="{{ Config::get('app.name') }}">
        <meta property="og:description" content="{{ Config::get('app.description') }}">
        <meta property="og:type"        content="website">
        <meta property="og:url"         content="{{ Request::url() }}">
        <meta property="og:image"       content="{{ URL::asset('images/card.png') }}">
        <meta property="og:secure_url"  content="{{ URL::asset('images/card.png') }}">

        {{-- Twitter Card --}}
        <meta name="twitter:card"        content="summary_large_image">
        <meta name="twitter:title"       content="{{ Config::get('app.name') }}">
        <meta name="twitter:description" content="{{ Config::get('app.description') }}">
        <meta name="twitter:image"       content="{{ URL::asset('images/card.png') }}">

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{ URL::asset('images/logo.png') }}">

        {{-- Scripts --}}
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- Styles --}}
        <style>

            /**
             * Proxima Vara.
             *
             */
            @font-face {
                font-family: 'Proxima Vara';
                font-style: normal;
                font-weight: 100 900;
                font-variant-numeric: proportional-nums;
                src: url('/fonts/ProximaVara.woff2') format('woff2')
            }

            /**
             * Styles.
             *
             */
            .font-sans { font-family: 'Proxima Vara' !important }

        </style>

    </head>

    {{-- Body --}}
    <body class="font-sans leading-none flex flex-col justify-center items-center min-h-screen">

        {{-- Code --}}
        <h3 class="font-semibold text-indigo-600 mb-3">
            {{ $code }}
        </h3>

        {{-- Title --}}
        <h1 class="font-[650] text-[30px] md:text-[45px] mb-5">
            {{ $title }}
        </h1>

        {{-- Description --}}
        <h2 class="text-[18px] text-gray-600 text-center leading-normal px-6 mb-10">
            {{ $description }}
        </h2>

        {{-- Link --}}
        <a href="/"
           class="bg-sky-600 hover:bg-sky-700 text-sm font-medium text-white uppercase rounded-md transition duration-300 px-3.5 py-2">

            {{-- Text --}}
            Go home

        </a>

    </body>

</html>