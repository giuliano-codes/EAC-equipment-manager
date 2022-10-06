<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="py-12 w-full overflow-y-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid justify-center mb-8 text-lg font-bold">
                <span>Termo e Políticas de Uso</span>
            </div>
            <form action="">
                <div class="grid grid-cols-2 gap-2 mb-4">
                    <div>
                        <label class="font-semibold">Tipo de Usuário</label>
                        <select class="w-full rounded-xl">
                            <option>Selecione o tipo de Usuário</option>
                            <option>Discente</option>
                            <option>Docente</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Matrícula</label>
                        <input class="w-full rounded-xl" type="number">
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    <div>
                        <label class="font-semibold">E-mail alternativo</label>
                        <input class="w-full rounded-xl" type="email">
                    </div>
                    <div>
                        <label class="font-semibold">CPF</label>
                        <input class="w-full rounded-xl" type="text">
                    </div>
                    <div>
                        <label class="font-semibold">RG</label>
                        <input class="w-full rounded-xl" type="text">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 mb-4">
                    <div>
                        <label class="font-semibold">Telefone 1</label>
                        <input class="w-full rounded-xl" type="text">
                    </div>
                    <div>
                        <label class="font-semibold">Telefone 2</label>
                        <input class="w-full rounded-xl" type="text">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 mb-4">
                    <div>
                        <label class="font-semibold">Professor Orientador</label>
                        <select class="w-full rounded-xl">
                            <option>Selecione o professor Orientador</option>
                            <option>Discente</option>
                            <option>Docente</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Curso</label>
                        <input class="w-full rounded-xl" type="text">
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    <div>
                        <label class="font-semibold">Projeto/ Área de Pesquisa</label>
                        <input class="w-full rounded-xl" type="text">
                    </div>
                    <div>
                        <label class="font-semibold">Possui Bolsa</label>
                        <select class="w-full rounded-xl">
                            <option>Selecione a opção</option>
                            <option>Discente</option>
                            <option>Docente</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Status</label>
                        <select class="w-full rounded-xl">
                            <option>Selecione a opção</option>
                            <option>Discente</option>
                            <option>Docente</option>
                        </select>
                    </div>
                </div>
                <div class="grid mb-4">
                    <div>
                        <input type="checkbox">
                        <label class="text-blue-500"><a href="" target="_blank" rel="noopener noreferrer">Estou de acordo com os termos e políticas de uso</a></label>
                    </div>
                </div>
                <div class="grid">
                    <button class="focus:outline-none text-green-600 text-sm py-2.5 px-5 border border-green-600 hover:bg-green-50 w-full mt-4" type="submit">Efetivar Cadastro</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>