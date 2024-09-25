<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <title>Sport</title>
</head>
<style>
    body {
       font-family: 'Roboto', sans-serif;
   }
</style>
<body class="w-screen h-screen flex justify-center items-center bg-black">
    <div class="w-screen h-screen rounded-xl xl:w-auto xl:h-auto bg-[#021526]">
        <div class="w-full h-full p-4 md:p-6 flex flex-col justify-center xl:justify-start gap-8">
            <header class="w-full flex flex-col justify-center items-center gap-2">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="w-24">
                <span class="text-white text-5xl xl:text-2xl font-bold">
                    Login
                </span>
            </header>
                <form action="/login" method="GET" class="flex flex-col gap-5">
                    @csrf
                    <input class="text-white bg-zinc-800 outline-none rounded-md w-full xl:w-[25rem] p-2" type="text" name="email" id="email" placeholder="Email">
                    <input class="text-white bg-zinc-800 outline-none rounded-md p-2" type="password" name="password" id="password" placeholder="Senha">
                    <button type="submit" class="rounded-md bg-sky-500 hover:bg-sky-700 transition-[0.1s] p-2 text-white font-bold text-xl">
                        Logar
                    </button>
                </form>
        </div>
    </div>
</body>
<script>
    const errorMessage = @json(session('error'));

    if(errorMessage) {
        Toastify({
            text: errorMessage,
            duration: 3000,
            gravity: "top", // "top" ou "bottom"
            position: 'center', // "left", "center" ou "right"
            backgroundColor: "red",
            stopOnFocus: true,
        }).showToast();
    }

</script>
</html>
