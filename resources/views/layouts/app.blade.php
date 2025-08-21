<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lista de livros')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-orange-50 font-sans min-h-screen flex flex-col">

    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-4xl font-bold m-auto">Minha biblioteca online</h1>
            <nav>
                <a href="{{ route('books.index') }}" class="text-2xl hover:underline">Início</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6 flex-1">
        @yield('content')
    </main>

    <footer class="bg-white shadow mt-10">
        <div class="container mx-auto py-6 text-center text-gray-500">
            &copy; {{ date('Y') }} Minha Biblioteca Online
        </div>
    </footer>

</body>
</html>