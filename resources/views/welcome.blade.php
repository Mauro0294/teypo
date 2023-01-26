<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teypo | Begin your adventure</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class='bg-[#0E0E0E] p-8'>
        <nav>
            <ul class='text-white flex justify-between items-center'>
                <div class='flex justify-center'>
                    <img src='{{ asset('images/teypo.png') }}'>
                    <h2 class='ml-4 text-4xl'>teypo.</h2>
                </div>
                <div class='flex'>
                    <li class='cursor-pointer text-[#CAFC01]'>Home</li>
                    <li class='ml-16 cursor-pointer hover:text-[#CAFC01]'>Services</li>
                    <li class='ml-16 cursor-pointer hover:text-[#CAFC01]'>Blog</li>
                    <li class='ml-16 cursor-pointer hover:text-[#CAFC01]'>Contact</li>
                </div>
                <div>
                    <button class='bg-[#CAFC01] rounded-full text-black py-2 px-4 font-bold'>Contact us</button>
                </div>
            </ul>
        </nav>
        <section>
            {{-- TODO: big text here (check figma) --}}
        </section>
    </body>
</html>
