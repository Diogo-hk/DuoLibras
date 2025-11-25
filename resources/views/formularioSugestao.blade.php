<x-app>
    <div class="max-w-2xl mx-auto">
        
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Sugerir Novo Sinal</h1>
            <p class="text-gray-500">Ajude a comunidade a crescer enviando novos sinais.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
            
            <form action="#" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-gray-700 font-bold mb-2">Nome do Sinal</label>
                    <input type="text" name="nome_sinal" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition" placeholder="Ex: Computador, Escola...">
                </div>

                <div>
                    <label class="block text-gray-700 font-bold mb-2">Categoria</label>
                    <select name="categoria" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition bg-white">
                        <option>Cumprimentos</option>
                        <option>Verbos</option>
                        <option>Objetos</option>
                        <option>Tecnologia</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 font-bold mb-2">Descrição (Como fazer?)</label>
                    <textarea name="descricao" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition" placeholder="Descreva o movimento das mãos..."></textarea>
                </div>

                <div class="flex justify-end space-x-4 pt-4">
                    <a href="{{ route('dashboard') }}" class="px-6 py-3 rounded-lg text-gray-600 font-bold hover:bg-gray-100 transition">
                        Cancelar
                    </a>
                    
                    <button type="submit" class="px-6 py-3 rounded-lg bg-teal-500 text-white font-bold shadow-md hover:bg-teal-600 hover:translate-y-0.5 transition transform">
                        Enviar Sugestão
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app>