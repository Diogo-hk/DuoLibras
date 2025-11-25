<x-layout>
    <div class="bg-white w-full max-w-sm p-8 rounded-[40px] shadow-2xl relative overflow-hidden">

        <div class="absolute top-0 left-0 w-full h-2 bg-teal-500"></div>

        <div class="text-center mb-8 mt-4">
            <div class="mx-auto bg-teal-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 text-teal-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>

            <h1 class="text-3xl font-bold text-teal-600 tracking-tight">VDFLibras</h1>
            <p class="text-gray-500 font-bold mt-2 text-lg">Bem-vindo de volta! 👋</p>
        </div>

        <form action="{{ route('auth') }}" method="POST" class="space-y-5">
            @csrf
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <input name="email" type="email" placeholder="Seu e-mail"
                    class="w-full pl-11 pr-4 py-3 rounded-full border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition text-gray-600 bg-gray-50 placeholder-gray-400"
                    required>
            </div>

            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <input name="password" type="password" placeholder="Digite sua senha"
                    class="w-full pl-11 pr-10 py-3 rounded-full border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition text-gray-600 bg-gray-50 placeholder-gray-400"
                    required>

                <div
                    class="absolute inset-y-0 right-0 pr-4 flex items-center cursor-pointer text-teal-500 hover:text-teal-700">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
            </div>

            <div class="flex justify-end">
                <a href="#" class="text-sm text-gray-400 hover:text-teal-600 font-semibold">Esqueceu a senha?</a>
            </div>

            <button type="submit"
                class="w-full bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 rounded-full shadow-lg shadow-teal-500/30 transition transform hover:-translate-y-0.5">
                ENTRAR
            </button>


        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <strong class="font-bold">Ops! Algo deu errado:</strong>
            <ul class="mt-1 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
             @endforeach
            </ul>
        </div>
        @endif
        </form>

        <div class="mt-8 mb-6 flex items-center justify-between">
            <span class="w-1/5 border-b border-gray-200 lg:w-1/4"></span>
            <span class="text-xs text-center text-gray-400 uppercase font-bold tracking-wider">ou entre com</span>
            <span class="w-1/5 border-b border-gray-200 lg:w-1/4"></span>
        </div>

        <div class="flex justify-center space-x-4">
            <button class="bg-white border border-gray-200 p-3 rounded-full hover:bg-gray-50 shadow-sm">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-6 h-6" alt="Google">
            </button>
            <button class="bg-white border border-gray-200 p-3 rounded-full hover:bg-gray-50 shadow-sm text-blue-800">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
            </button>
            <button class="bg-white border border-gray-200 p-3 rounded-full hover:bg-gray-50 shadow-sm text-black">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.74 1.18 0 2.29-1.23 3.57-1.23.99 0 2.05.49 2.8 1.12-2.28 1.41-1.96 5.51.53 6.64-1.28 2.68-2.68 5.71-1.98 5.7zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z" />
                </svg>
            </button>
        </div>

        <div class="mt-8 text-center text-sm">
            <p class="text-gray-500">Não tem conta? <a href="#"
                    class="text-teal-500 font-bold hover:underline">Cadastre-se</a></p>
        </div>
    </div>
</x-layout>