<div class="grid grid-cols-3">
    <form action="{{ route('proveedores.update',$provider->id) }}" class="p-8 shadow-md rounded-md text-left col-start-2" method="POST">
        @csrf
        @method('PUT')

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Nit</span>
            <input value="{{ $provider->nit }}" type="number" name="nit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Nombre</span>
            <input value="{{ $provider->nombre }}" type="text" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Dirección</span>
            <textarea type="text" name="direccion" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>{{ $provider->direccion }}</textarea>
        </label>
        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Teléfono</span>
            <input value="{{ $provider->telefono }}" type="tel" name="telefono" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required pattern="[0-9]{8}">
        </label>
        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Correo</span>
            <input value="{{ $provider->correo }}" type="email" name="correo" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>
        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Contacto</span>
            <input value="{{ $provider->contacto }}" type="tel" pattern="[0-9]{8}" name="contacto" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="">
        </label>

        @if ($errors->any())
        <div class="text-red-500 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        
        

        <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" value="Actualizar">
        <a href="/proveedor" class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Cancelar Acción</a>
    </form>
    &nbsp;

</div>