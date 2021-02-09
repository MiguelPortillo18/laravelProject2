<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    @php
        $alert = 'alert';
    @endphp

    <body>
        <div class="container mx-auto">
            <x-alert color="red" class="mb-4">

                <x-slot name="title">
                    Titulo 1
                </x-slot>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias eveniet ex provident amet expedita repellat, dolor blanditiis corporis, placeat veritatis accusamus sed suscipit dolorem! Sed quaerat hic placeat aut voluptatem.
            </x-alert> 

            <x-alert>

                <x-slot name="title">
                    Titulo 2
                </x-slot>

                Hola Mundo
            </x-alert>

            <x-alert2 color="blue" class="mb-4"> 

                <x-slot name="title">
                    Titulo de prueba
                </x-slot>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quisquam, illum recusandae impedit autem quam illo minima nihil eligendi soluta dolor dolores commodi, alias quod. Libero eaque facere nihil necessitatibus.
            </x-alert2>

            <x-alert2> 

                <x-slot name="title">
                    Titulo de prueba2
                </x-slot>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quisquam, illum recusandae impedit autem quam illo minima nihil eligendi soluta dolor dolores commodi, alias quod. Libero eaque facere nihil necessitatibus.
            </x-alert2>

            <x-dynamic-component :component="$alert">
                <x-slot name="title">
                    Titulo de prueba
                </x-slot>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quisquam, illum recusandae impedit autem quam illo minima nihil eligendi soluta dolor dolores commodi, alias quod. Libero eaque facere nihil necessitatibus.
            </x-dynamic-component>
        </div>
    </body>
</html>
