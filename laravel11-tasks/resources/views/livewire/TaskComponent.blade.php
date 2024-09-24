<table class="min-w-full bg-white shadow-md rounded-xl">
    <thead class="bg-purple-800">
        <tr class="bg-blue-gray-100 text-white">
            <th class="py-3 px-4 text-left">Titulo</th>
            <th class="py-3 px-4 text-left">Descripción</th>
            <th class="py-3 px-4 text-left">Acción</th>
        </tr>
    </thead>

    <tbody class="text-blue-gray-900">
        @foreach ($tasks as $task)
        <tr class="border-b border-blue-gray-200">
            <td class="py-3 px-4 font-medium">{{ $task->title }}</td>
            <td class="py-3 px-4 font-medium">{{ $task->description }}</td>
            <td class="py-3 px-4">
                <div class="flex gap-x-2">
                    <button class="px-3 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-purple-700 rounded-lg hover:bg-green-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Editar
                    </button>
                    <button class="px-3 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-slate-600 rounded-lg hover:bg-red-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Eliminar
                    </button>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>