<div>
    <form wire:submit.prevent="save">
    <div class="grid grid-cols-10">
            <div class="col-start-2 col-span-8">
                <p class="text-5xl font-sans ">Proyecto: {{ $project->name }}</p>
                <div class="flex">
                    <div class="flex-1 m-2">
                        <label class="block m-2">
                            <span class="block text-gray-700 text-sm font-bold m-2">Fecha Inicio</span>
                            <input type="date" wire:model="vigencia.inicio" name="inicio" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                            
                        </label>
                    </div>
                    <div class="flex-1 m-2">
                        <label class="block m-2">
                            <span class="block text-gray-700 text-sm font-bold m-2">Fecha Fin</span>
                            <input type="date" wire:model="vigencia.fin" name="fin" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="" required>
                            
                        </label>
                    </div>
                </div>
                <input class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="submit" value="Guardar">
            </div>
            <a href="/proyecto"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Regresar</button> </a>
        
    </div>
    </form>
</div>