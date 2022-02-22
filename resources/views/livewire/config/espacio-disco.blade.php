<div>
    <div class="grid grid-cols-10">
        <div class="col-start-2 col-span-8">
            <label class="block mb-4 py-16">
                <span class="block text-gray-700 text-sm font-bold mb-2">Espacio</span>
                <input value="{{ $disponible }} GB disponibles de {{ $limite }} GB." type="text" class="my-5 leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
                <div class="w-full bg-gray-200 rounded-full h-3.5 dark:bg-gray-700 ">
                    <div class="bg-blue-600 h-3.5 rounded-full" style="width: {{$porcentaje}}%">{{$porcentaje}}%</div>
                </div>
            </label>
        </div>
    </div>
</div>