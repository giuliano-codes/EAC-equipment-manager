<div>
    <div class="grid justify-center mb-8 text-lg font-bold">
        <span>Edição de Equipamento</span>
    </div>
    <form wire:submit.prevent="validateEquipment">
        <div class="grid grid-cols-4 gap-2">
            <div>
                <label class="font-semibold">Nome</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.name">
            </div>
            <div>
                <label class="font-semibold">Modelo</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.model">
            </div>
            <div>
                <label class="font-semibold">Número de Série</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.serie_number">
            </div>
            <div>
                <label class="font-semibold">Fabricante</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.manufacturer">
            </div>
        </div>
        <div class="grid grid-cols-3 gap-2">
            <div>
                <label class="font-semibold">Código UFSM</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.ufsm_code">
            </div>
            <div>
                <label class="font-semibold">Código Laboratório</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.laboratory_code">
            </div>
            <div>
                <label class="font-semibold">Código NCM</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.ncm_code">
            </div>
        </div>
        <div class="grid grid-cols-2 gap-2">
            <div>
                <label class="font-semibold">Armário</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.locker">
            </div>
            <div>
                <label class="font-semibold">Tipo</label>
                <select class="w-full rounded-xl" wire:model="form.type">
                    <option value="">Selecione o Tipo</option>
                    <option value="physical">Físico</option>
                    <option value="software">Software</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-2">
            <div>
                <label class="font-semibold">Link para o Manual</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.manual_link">
            </div>
            <div>
                <label class="font-semibold">Recursos</label>
                <input class="w-full rounded-xl" type="text" wire:model="form.resources">
            </div>
        </div>
        <div class="grid grid-cols-2 gap-2">
            <div>
                <label class="font-semibold">Informações Complementares</label>
                <textarea class="w-full rounded-xl" rows="3" wire:model="form.additional_information"></textarea>
            </div>
            <div>
                <label class="font-semibold">Observações</label>
                <textarea class="w-full rounded-xl" rows="3" wire:model="form.observation"></textarea>
            </div>
        </div>
        <div>
            <label class="font-semibold">Links Úteis</label>
            <textarea class="w-full rounded-xl" rows="3" wire:model="form.useful_links"></textarea>
        </div>
        <div class="grid">
            <label id="upload-area" class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300 cursor-pointer">
                <div class="flex flex-col items-center justify-center pt-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                        Selecionar imagem
                    </p>
                </div>
                <input id="files_upload" type="file" name="files_upload" wire:model="form.image" class="opacity-0"/>
            </label>    
        </div>
        <div class="grid mb-3">
            <button class="focus:outline-none text-green-600 text-sm py-2.5 px-5 border border-green-600 hover:bg-green-50 w-full mt-4" type="submit">Salvar Equipamento</button>
        </div>
    </form>
</div>
