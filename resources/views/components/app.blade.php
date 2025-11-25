<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VDFLibras - PC</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 bg-opacity-50 min-h-screen font-sans">

    <nav class="bg-teal-500 shadow-md relative z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        
        <div class="flex items-center text-white space-x-4">
            <span class="text-xl font-bold tracking-wide">VDFLibras</span>
        </div>

        <div class="hidden md:block w-1/3">
            <input type="text" placeholder="Pesquisar Sinais..." class="w-full px-4 py-2 rounded-full border-none focus:ring-2 focus:ring-teal-300 text-gray-700 outline-none">
        </div>

        <div class="flex items-center space-x-4">
            
            <span class="text-white font-bold hidden md:block">Olá, {{ auth()->user()->name ?? 'Usuário' }}</span>

            <div class="relative ml-3">
                
                <button onclick="toggleMenu()" class="text-white hover:bg-teal-600 p-2 rounded-full focus:outline-none transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </button>

                <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 border border-gray-100 origin-top-right">
                    
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-teal-600">
                        👤 Meu Perfil
                    </a>

                    <a href="{{ route('sugestao') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-teal-600">
                        Sugerir Novo Sinal
                    </a>

                    @if(auth()->user()->is_admin)
                        <div class="border-t border-gray-100 my-1"></div>
    
                    <a href="{{ route('sugestoes') }}" class="block px-4 py-2 text-sm text-teal-700 font-bold hover:bg-teal-50">
                            📋 Verificar Sugestões
                    <span class="ml-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">3</span>
                    </a>
                    @endif

                    <div class="border-t border-gray-100 my-1"></div>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-red-50 font-bold">
                            Sair do Sistema
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</nav>

<script>
    function toggleMenu() {
        const menu = document.getElementById('dropdown-menu');
        menu.classList.toggle('hidden');
    }

    // Fechar o menu se clicar fora dele (Opcional, mas melhora a experiência)
    window.onclick = function(event) {
        if (!event.target.closest('.relative')) {
            const menu = document.getElementById('dropdown-menu');
            if (!menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        }
    }
</script>

    <main class="container mx-auto px-6 py-8">
        {{ $slot }}
    </main>

</body>
</html>