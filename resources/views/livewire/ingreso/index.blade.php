<div>
    <div class="flex flex-col text-left">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    No_ingreso
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Bodega
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Dependencia
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Serie Factura
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    No Factura
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Fecha Factura
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Fecha Sistema
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Observaciones
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($ingresos as $ingreso)
                            <tr>                         
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $ingreso->no_ingreso }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $ingreso->bodega_id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $ingreso->dependency_id}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $ingreso->serie_factura}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $ingreso->no_factura}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $ingreso->fecha_factura}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $ingreso->fecha_sistema}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-500">{{ $ingreso->observaciones}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-normal">
                                    <a href=""><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2">Agregar Insumos</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        &nbsp;
        {{ $ingresos->links() }}
    </div>
</div>
