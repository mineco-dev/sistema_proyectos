<div>

    <div class="grid grid-cols-10">

        <div class="col-start-2 col-span-8">

            <p class="text-5xl font-sans ">Proyecto: {{ $project->name }} {{ $project->id }}</p>
            @if (session('status'))

            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{ session('status') }}</strong>

                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">

                </span>

            </div>

            @endif
            <!-- <input class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="submit" value="Guardar"> -->
            <div class="py-3">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre de Archivo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acción
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($archivos as $item)

                        <tr>
                            <td class="px-6 py-4 whitespace-normal">
                                <div class="text-sm text-gray-500">{{ $loop->index + 1 }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-normal">
                                <div class="text-sm text-gray-500">{{ $item->nombre }}</div>
                            </td>
                            <td class="flex px-6 py-4 whitespace-normal">
                                <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mx-2" wire:click="verArchivo('{{$item->ruta}}')">Ver</button>
                                <form action="{{ route('eliminar-expediente',$item->id) }}">

                                    <input type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mx-2" value="Eliminar Archivo">

                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>

                @if ($mostrarFrame)

                <iframe class="mt-6" src="/storage/{{ $rutaActual }}" width="100%" height="800px">
                </iframe>

                @endif

            </div>


            <div class="pt-14 grid">
                <div class="justify-self-center">
                    <form action="{{ route('cargar-expediente') }}" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <span>+ Agregar un nuevo archivo</span>
                        <label class="block m-2">
                            <span for="name" class="block text-gray-700 text-sm font-bold m-2">Nombre:</span>

                            <input type="text" name="name" class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </label>

                        <input type="text" name="project_id" class="hidden" value="{{ $project->id  }}">

                        <input type="file" name="ruta" value="Adjuntar" class="form-input px-4 py-3 rounded-full transition duration-500 ease-in-out bg-blue-400 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-110" required>
                        <button class="form-input px-4 py-3 rounded-full bg-blue-900 hover:bg-blue-800 text-white font-bold" type="submit">Guardar</button>

                    </form>
                </div>

            </div>
        </div>
        <div class="">
            <div class="justify-items-stretch">
                <a href="/proyecto"> <button class="bg-blue-800 hover:bg-blue-900 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Regresar</button> </a>


            </div>




        </div>


    </div>

</div>