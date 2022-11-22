<div x-data="{}">
    <div class="grid justify-center mb-8 text-lg font-bold">
        <span>Termos e Políticas de Uso</span>
    </div>
    <form wire:submit.prevent="validateUser">
        <div class="grid grid-cols-2 gap-2 mb-4">
            <div>
                <label class="font-semibold">Tipo de Usuário*</label>
                <select class="w-full rounded-xl" wire:model.defer="form.user_type" required>
                    <option value="">Selecione o tipo de Usuário</option>
                    <option value="student">Discente</option>
                    <option value="professor">Docente</option>
                </select>
            </div>
            <div>
                <label class="font-semibold">Matrícula*</label>
                <input class="w-full rounded-xl" type="text" wire:model.defer="form.registration_number" required>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-2 mb-4">
            <div>
                <label class="font-semibold">E-mail alternativo</label>
                <input class="w-full rounded-xl" type="email" wire:model.defer="form.alternative_email">
            </div>
            <div>
                <label class="font-semibold">CPF*</label>
                <input x-mask="999.999.999-99" class="w-full rounded-xl" type="text" wire:model.defer="form.cpf" required>
            </div>
            <div>
                <label class="font-semibold">RG*</label>
                <input class="w-full rounded-xl" type="text" wire:model.defer="form.rg" required>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-2 mb-4">
            <div>
                <label class="font-semibold">Telefone 1*</label>
                <input x-mask="(99) 99999-9999" class="w-full rounded-xl" type="text" wire:model.defer="form.first_phone" required>
                @error('form.first_phone')
                    <p class="text-red-500">O campo em questão apresenta algum erro.</p>
                @enderror
            </div>
            <div>
                <label class="font-semibold">Telefone 2</label>
                <input x-mask="(99) 99999-9999" class="w-full rounded-xl" type="text" wire:model.defer="form.second_phone">
            </div>
        </div>
        <div class="grid grid-cols-2 gap-2 mb-4">
            <div>
                <label class="font-semibold">Professor Orientador</label>
                <select class="w-full rounded-xl" wire:model.defer="form.professor_adviser">
                    <option value="">Selecione o professor Orientador</option>
                    <option value="will">Christian</option>
                    <option value="will">Eric</option>
                    <option value="will">Paulo</option>
                    <option value="will">Roberto</option>
                    <option value="vivi">Viviane</option>
                    <option value="will">William</option>
                </select>
            </div>
            <div>
                <label class="font-semibold">Curso*</label>
                <input class="w-full rounded-xl" type="text" wire:model.defer="form.course" required>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-2 mb-4">
            <div>
                <label class="font-semibold">Projeto/ Área de Pesquisa</label>
                <input class="w-full rounded-xl" type="text" wire:model.defer="form.project_research_area">
            </div>
            <div>
                <label class="font-semibold">Possui Bolsa*</label>
                <select class="w-full rounded-xl" wire:model.defer="form.scholarship" required>
                    <option>Selecione a opção</option>
                    <option value="yes">Sim</option>
                    <option value="no">Não</option>
                </select>
            </div>
        </div>
        <div class="grid mb-4">
            <div>
                <input type="checkbox" wire:model.defer="form.accept_terms_and_privacy_policy" required>
                <label class="text-blue-500"><a href="{{ route('terms-and-conditions') }}" target="_blank" rel="noopener noreferrer" wire:model="form.accept_terms_and_privacy_policy">Estou de acordo com os termos e políticas de uso</a></label>
            </div>
        </div>
        <div class="grid">
            <button class="focus:outline-none text-green-600 text-sm py-2.5 px-5 border border-green-600 hover:bg-green-50 w-full mt-4" type="submit">Efetivar Cadastro</button>
        </div>
    </form>
</div>
