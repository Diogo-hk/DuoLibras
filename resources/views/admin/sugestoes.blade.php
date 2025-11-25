<x-app>
    <div class="container mx-auto px-4">
        
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Sugestões Pendentes</h1>
                <p class="text-gray-500">Analise as contribuições da comunidade.</p>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nome do Sinal
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Categoria
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Descrição
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Enviado por
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 font-bold">Cachorro Quente</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                <span class="relative">Comidas</span>
                            </span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                            Mão em concha simulando pão...
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            João Silva
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                            
                            <button class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-1 px-3 rounded text-xs transition mr-2">
                                ✓ Aceitar
                            </button>

                            <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-1 px-3 rounded text-xs transition">
                                ✕
                            </button>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
</x-app>