<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.1.9/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
    <title>Sport</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        #loading {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swal2-popup {
            background-color: #1f2937;
            color: #ffffff;
            border-radius: 10px;
        }

        .swal2-confirm {
            background-color: #3b82f6;
            color: white;
            border-radius: 5px;
        }

        .swal2-cancel {
            background-color: #9ca3af;
            color: white;
            border-radius: 5px;
        }

        .swal2-confirm:hover {
            opacity: 0.8;
        }

        .swal2-cancel:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body class="w-screen h-screen flex text-white text-[0.9rem] xl:text-[0.8rem] 2xl:text-[0.9rem]">
    <div id="loading" class="flex">
        <div class="loader"><span class="loading loading-spinner loading-md"></span></div>
    </div>
    <div class="hidden md:block xl:w-[18%] 2xl:w-[15%]; h-full bg-zinc-800">
        <header class="h-36 w-full bg-[#021526] flex justify-center items-center overflow-clip">
            <img class="xl:w-[8rem] 2xl:w-[10rem]" src="{{ asset('logo.png') }}" alt="Logo">
        </header>
        <x-layout.linksSection/>
    </div>

    <div class="w-full h-full flex flex-col">
        <header class="w-full h-16 bg-zinc-900 px-4 flex items-center justify-end">
            <div class="w-[8rem]">
                <x-layout.links
                    text="Deslogar"
                    link="/logout"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>'
                />
            </div>
        </header>
        <div class="w-full h-full bg-zinc-950">
            {{$slot}}
        </div>
    </div>

<script>
    $(window).on('load', function() {
        $('#loading').hide(); /*Tô escondendo o loading do form / ajax quando a pagina carrega!*/
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const errorMessage = @json(session('error'));
    const successMessage = @json(session('success'));

    if (errorMessage) {
        Toastify({
            text: errorMessage,
            duration: 3000,
            gravity: "top",
            position: 'center',
            backgroundColor: "red",
            stopOnFocus: true,
        }).showToast();
    }

    if (successMessage) {
        Toastify({
            text: successMessage,
            duration: 3000,
            gravity: "top",
            position: 'center',
            backgroundColor: "green",
            stopOnFocus: true,
        }).showToast();
    }

    $(document).ready(function() {
        // Mostra o loading ao fazer uma requisição AJAX
        $(document).ajaxStart(function() {
            $('#loading').show();
        }).ajaxStop(function() {
            $('#loading').hide();
        });

        $('form').on('submit', function(event) {
            if ($(this).attr('method') !== 'dialog') {
                $('#loading').show();
            }
        });

        $('#toggleButton').on('click', function() {
            const $element = $('#form');

            if ($element.hasClass('hidden')) {
                $element.removeClass('hidden opacity-0').addClass('opacity-100');
            } else {
                $element.removeClass('opacity-100').addClass('opacity-0');

                setTimeout(() => {
                    $element.addClass('hidden');
                }, 300);
            }
        });
    });
</script>

</body>
</html>
