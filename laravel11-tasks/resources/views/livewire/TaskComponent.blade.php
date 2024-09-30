<section wire:poll="renderAllTasks">
    <div class=" text-center">
        <h1 class="px-6 pt-2 text-3xl text-purple-800 font-extrabold">Bienvenido al gestor de tareas</h1>
        <p class="px-6 text-gray-600">Aquí podrás ver y gestionar tus tareas</p>

        <!-- Modal para crear nueva tarea -->
        <div>
            <div x-data="{ isOpen: false }" class="relative flex justify-center">
                <button @click="isOpen = true" class="mx-6 my-3 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-purple-700 rounded-lg hover:bg-green-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Crear nueva tarea
                </button>

                <div x-show="isOpen"
                    x-transition:enter="transition duration-300 ease-out"
                    x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                    x-transition:leave="transition duration-150 ease-in"
                    x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                    x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                    class="fixed inset-0 z-10 overflow-y-auto"
                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                        <div class="relative inline-block p-4 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl sm:max-w-sm rounded-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:p-6">
                            <div class="mt-5 text-center">
                                <h3 class="text-lg font-medium text-gray-800 dark:text-white" id="modal-title">
                                    Crear nueva tarea
                                </h3>
                            </div>

                            <div class="flex items-center justify-between w-full mt-5 gap-x-2">
                                <form class="flex flex-col gap-y-2 w-full">
                                    <div class="mb-2 w-full">
                                        <label for="title" class="pl-2 block text-sm text-slate-200">Titulo</label>
                                        <input wire:model="title" type="text" name="title" id="title" placeholder="Escribe un titulo" class="flex-1 block h-10 px-4 text-sm text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring w-full" />
                                    </div>

                                    <div class="mb-2 w-full">
                                        <label for="description" class="pl-2 block text-sm text-slate-200">Descripción</label>
                                        <input wire:model="description" type="text" name="description" id="description" placeholder="Escribe una descripción" class="flex-1 block h-10 px-4 text-sm text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring w-full" />
                                    </div>
                                </form>
                            </div>

                            <div class="mt-4 sm:flex sm:items-center sm:justify-between sm:mt-6 sm:-mx-2">
                                <button wire:click="closeCreateModal" @click="isOpen = false" class="px-4 sm:mx-2 w-full py-2.5 text-sm font-medium dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                    Cancelar
                                </button>

                                <button wire:click="createOrUpdateTask" class="px-4 sm:mx-2 w-full py-2.5 mt-3 sm:mt-0 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-purple-700 rounded-md hover:bg-purple-900 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                                    Crear Tarea
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-6">
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
                            <div x-data="{ isOpen: false }" class="relative flex justify-center">
                                <button @click="isOpen = true" wire:click="openCreateModal({{ $task }})" class="px-3 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-purple-700 rounded-lg hover:bg-green-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                    Editar
                                </button>

                                <div x-show="isOpen"
                                    x-transition:enter="transition duration-300 ease-out"
                                    x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                                    x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                                    x-transition:leave="transition duration-150 ease-in"
                                    x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                                    x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                                    class="fixed inset-0 z-10 overflow-y-auto"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                                        <div class="relative inline-block p-4 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl sm:max-w-sm rounded-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:p-6">
                                            <div class="mt-5 text-center">
                                                <h3 class="text-lg font-medium text-gray-800 dark:text-white" id="modal-title">
                                                    Editar tarea
                                                </h3>
                                            </div>

                                            <div class="flex items-center justify-between w-full mt-5 gap-x-2">
                                                <form class="flex flex-col gap-y-2 w-full">
                                                    <div class="mb-2 w-full">
                                                        <label for="title" class="pl-2 block text-sm text-slate-200">Titulo</label>
                                                        <input wire:model="title" type="text" name="title" id="title" placeholder="Escribe un titulo" class="flex-1 block h-10 px-4 text-sm text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring w-full" />
                                                    </div>

                                                    <div class="mb-2 w-full">
                                                        <label for="description" class="pl-2 block text-sm text-slate-200">Descripción</label>
                                                        <input wire:model="description" type="text" name="description" id="description" placeholder="Escribe una descripción" class="flex-1 block h-10 px-4 text-sm text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring w-full" />
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="mt-4 sm:flex sm:items-center sm:justify-between sm:mt-6 sm:-mx-2">
                                                <button wire:click="closeCreateModal" @click="isOpen = false" class="px-4 sm:mx-2 w-full py-2.5 text-sm font-medium dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                                    Cancelar
                                                </button>

                                                <button wire:click="createOrUpdateTask" class="px-4 sm:mx-2 w-full py-2.5 mt-3 sm:mt-0 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-purple-700 rounded-md hover:bg-purple-900 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                                                    Modificar Tarea
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button wire:click="deleteTask({{ $task }})" wire:confirm="Are you sure you want to delete this task?" class="px-3 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-slate-600 rounded-lg hover:bg-red-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>