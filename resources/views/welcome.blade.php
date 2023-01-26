<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teypo | Begin your adventure</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class='bg-[#0E0E0E]'>
        <div class='p-8'>
            @include('components.navigation')
            <section class='text-white mt-20 mx-16 flex justify-between'>
                <div>
                    <h2 class='uppercase text-6xl font-bold leading-snug'>
                        Wij maken<br />
                        <span class='text-[#CAFC01]'>Unieke & Efficiente</span><br />
                        Lorem ipsumadrel
                    </h2>
                </div>
                <div class='mr-32 mt-12'>
                    <p class='text-[#505759] w-[240px]'>
                        Founded in 2022 by a team of
                        professional designers,
                        developers & creative thinkers
                    </p>
                    <button class='bg-[#CAFC01] rounded-full text-black py-4 px-6 font-bold mt-12 text-lg'>Get started</button>
                </div>
            </section>
        </div>
        <section class='mt-32 flex justify-between'>
            <div class="flex justify-between">
                <img src='{{ asset('images/people.png') }}' style='width: 65vw'>
                <div class='text-white text-4xl flex-col align-items-flex-end h-full flex-1'>
                    <div class='h-1/3 relative'>
                        <div class='absolute bottom-0'>
                            <h3>21 <span class='text-[#CAFC01]'>+</span></h3>
                            <p>Jaar ervaring</p>
                        </div>
                    </div>
                    <div class='h-1/3 relative'>
                        <div class='absolute bottom-0'>
                            <h3>200 <span class='text-[#CAFC01]'>+</span></h3>
                            <p>Voltooide projecten</p>
                        </div>
                    </div>
                    <div class='h-1/3 relative'>
                        <div class='absolute bottom-0'>
                            <h3>140 <span class='text-[#CAFC01]'>+</span></h3>
                            <p>Positieve beoordelingen</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
