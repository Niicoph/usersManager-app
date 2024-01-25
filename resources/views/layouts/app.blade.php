<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Fitness Lab</title>
</head>
<body class=" h-screen bg-gradient-to-br from-[#060706] via-[#132714] to-[#1a871f] flex justify-center items-center">
    <main class="h-4/5 w-4/5 border-4 border-white shadow-2xl rounded-2xl flex flex-col justify-center items-center">
        <header class="border-b border-white h-1/5 w-full flex justify-center items-center"> @yield('title') </header>
        <section class="h-4/5 w-full  flex  items-center justify-evenly flex-col ">@yield('content')</section>
    </main>

    <script>
        const addContainer = document.getElementById('add-container');
        const checkContainer = document.getElementById('check-container');
        const backContainer = document.getElementById('back-container');

        addContainer.addEventListener('click', () => {
            window.location.href = "{{ route('usuario.create') }}";
        });
        checkContainer.addEventListener('click', () => {
            window.location.href = "{{ route('usuarios.index') }}";
        });
        backContainer.addEventListener('click', () => {
            window.location.href = "{{ route('usuarios.index') }}";
        });

    </script>
</body>
</html>