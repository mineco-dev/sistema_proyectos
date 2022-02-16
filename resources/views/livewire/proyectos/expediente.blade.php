<div>

        <div class="grid grid-cols-10">
            <div class="col-start-2 col-span-8">
                <p class="text-5xl font-sans ">Proyecto: {{ $project->name }} {{ $project->id }}</p>
                <!-- <input class="flex-1 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="submit" value="Guardar"> -->
                @if ($archivo)
                <iframe class="mt-6" src="/storage/{{ $archivo->ruta }}" width="100%" height="800px">
                </iframe>
                @else
                <div class="pt-56 grid justify-items-stretch">
                    <div class="justify-self-center">
                        <form action="{{ route('cargar-expediente') }}" class="" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <input type="text" name="project_id" class="hidden" value="{{ $project->id  }}">
                            <p class="font-black ...">No hay ningún expediente.</p>
                            <input type="file" name="ruta" value="Adjuntar" class="form-input px-4 py-3 rounded-full transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-200 transform hover:-translate-y-1 hover:scale-110">
                            <button class="form-input px-4 py-3 rounded-full" type="submit">Guardar</button>

                        </form>
                    </div>

                </div>

                @endif
            </div>
            <div class="">
                <div class="justify-items-stretch">
                    <a href="/proyecto"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Regresar</button> </a>
                    <form action="{{ route('eliminar-expediente',$project->id) }}">
                        
                        <input type="submit" class="form-input px-4 py-3 rounded-full bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" value="Eliminar Expediente">
                    </form>
                    
                </div>

                    


            </div>
            

        </div>

</div>